<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h1><?php echo e(__('Auto Complete Search')); ?></h1>

                <h4><?php echo e(__('Type a Country Name')); ?></h4>
                <input type="text" id="autoComplete">
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
    <script>
        const autoCompleteJS = new autoComplete({
            selector: "#autoComplete",
            placeHolder: "Search for Food...",
            data: {
                src: async (query) => {
                    try {
                        // Fetch Data from external Source
                        const source = await fetch(`<?php echo e(URL('auto-complete-search/search')); ?>/${query}`);
                        // Data should be an array of `Objects` or `Strings`
                        const data = await source.json();

                        return data;
                    } catch (error) {
                        return error;
                    }
                },
                // Data source 'Object' key to be searched
                keys: ["name"]
            },
            resultsList: {
                element: (list, data) => {
                    if (!data.results.length) {
                        // Create "No Results" message element
                        const message = document.createElement("div");
                        // Add class to the created element
                        message.setAttribute("class", "no_result");
                        // Add message text content
                        message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                        // Append message element to the results list
                        list.prepend(message);
                    }
                },
                noResults: true,
            },
            resultItem: {
                highlight: true,
            }
        });

        document.querySelector("#autoComplete").addEventListener("selection", function(event) {
            // "event.detail" carries the autoComplete.js "feedback" object
            console.log(event.detail);
            $("#autoComplete").val(event.detail.selection.value.name);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /run/media/root/WORKING-FILES/4_Need_GitHub_Upload_@sadhin-dev/2_Done_GitHub-Upload_Project_2025/LaravelProjects/resources/views/AutoCompleteSearch/index.blade.php ENDPATH**/ ?>