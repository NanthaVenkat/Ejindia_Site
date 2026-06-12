<?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?><?php
/*
Template Name: Careers
*/
get_header();
?>

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-3xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-5xl font-bold leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-[#F78D1F] font-semibold uppercase tracking-wider mb-4">
                Join Emerald
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                Build Your Future With Us
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                At Emerald Jewel Industry India Limited, we believe that our
                people are our greatest strength. We provide a collaborative,
                inclusive and growth-oriented environment where every team
                member has the opportunity to thrive.
            </p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <p class="text-[#F78D1F] uppercase tracking-wider mb-4">
                Current Openings
            </p>

            <h2 class="text-white text-4xl md:text-6xl font-bold">
                Explore Opportunities
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div class="rounded-xl font-medium overflow-hidden border border-zinc-800">
                    <button data-filter="all-jobs"
                        class="w-full bg-[#F78D1F] backdrop-filter backdrop-blur-sm bg-opacity-10 px-5 py-4 border-zinc-800">
                        All Jobs
                    </button>

                    <button data-filter="industrial_engineering"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Industrial Engineering
                    </button>

                    <button data-filter="production"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Production
                    </button>

                    <button data-filter="human_resources"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Human Resources
                    </button>

                    <button data-filter="marketing"
                        class="w-full bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 text-white px-5 py-4 border-t border-zinc-800">
                        Marketing
                    </button>
                </div>
            </div>

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <div data-job="industrial_engineering"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Junior Assistant – IE Data Analytics
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <button command="show-modal" commandfor="industrial_engineering_vm" href="#"
                                class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </button>
                            <button command="show-modal" commandfor="industrial_engineering_int"
                                class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </button>
                        </div>
                    </div>

                    <div data-job="production"
                        class="bg-[#6868686B] backdrop-filter backdrop-blur-sm bg-opacity-10 rounded-2xl border border-zinc-800 p-6">
                        <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                            Costing & Budgeting
                        </h3>

                        <p class="text-white">
                            <span class="text-[#F78D1E]">Department :</span>
                            Staff
                        </p>

                        <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                            <p>
                                <span class="text-[#8E8E8E]">Location:</span>
                                Coimbatore
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Experience:</span>
                                2 Years
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Qualification:</span>
                                Any UG Degree
                            </p>
                            <p>
                                <span class="text-[#8E8E8E]">Positions:</span>
                                10
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="#" class="border border-white text-white px-6 py-2 rounded-full">
                                View More
                            </a>
                            <a href="#" class="bg-[#F78D1F] text-black px-6 py-2 rounded-full font-semibold">
                                I'm Interested
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <dialog id="industrial_engineering_vm" aria-labelledby="industrial_engineering_vm-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_vm"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="industrial_engineering_int" aria-labelledby="industrial_engineering_int-title"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All
                                    of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="industrial_engineering_int"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>


<?php get_footer(); ?>