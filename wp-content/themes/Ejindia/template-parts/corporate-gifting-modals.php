<el-dialog>
    <dialog id="corporate-gifting" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel class="relative mx-4 transform overflow-hidden rounded-3xl bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 w-full max-w-5xl data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="grid md:grid-cols-2 bg-gray-900">
                    <div class="hidden sm:block"><img src="http://ea.brightbridge.co/wp-content/uploads/2026/07/Group-25923.png" alt=""></div>
                    <div class="p-5 flex items-center w-full">
                        <?php echo do_shortcode('[wpforms id="1622"]') ?>
                    </div>
                </div>

                <button type="button" command="close" commandfor="corporate-gifting" class="absolute top-2 right-2 z-50 cursor-pointer text-gray-500 hover:text-white px-2 font-medium">X</button>
            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>


<style>
    .wpforms-error {
        color: #F33939 !important;
    }

    .wpforms-container {
        width: 100%;
    }

    #wpforms-form-1622 label {
        color: #fff;
        margin-bottom: 6px;
    }

    #wpforms-form-1622 input::placeholder {
        color: #BEBEBE;
    }

    #wpforms-form-1622 input,
    #wpforms-form-1622 select {
        padding: 8px 14px;
        outline: none;
        border: 1px solid gray;
        border-radius: 0.45rem;
    }

    #wpforms-submit-1622 {
        min-width: 200px;
        display: block;
        background-color: #F78D1E;
        color: #fff;
        text-transform: uppercase;
        padding: 5px;
        border-radius: 0.45rem !important;
    }
</style>