<?php
/*
Template Name: Careers
*/
get_header();

$categories = get_terms([
    'taxonomy' => 'job_category',
    'hide_empty' => true
]);

$jobs = get_posts([
    'post_type' => 'careers',
    'posts_per_page' => -1,
    'post_status' => 'publish'
]);

$departments = [];

foreach ($jobs as $job) {
    $department = get_field('department', $job->ID);

    if (!empty($department)) {
        $departments[$department] = $department;
    }
}
?>

<section class="relative h-[520px] bg-black overflow-hidden flex items-center">
    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">
    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-2xl">
            <h1 class="text-white text-3xl lg:text-5xl font-medium leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>
        </div>
    </div>
</section>

<section class="py-16 md:py-18 bg-white">
    <div class="container mx-auto px-6">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-lg mb-4">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center font-medium text-body hover:text-fg-brand">
                        <svg class="me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="#939393" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                        </svg>
                    </a>
                </li>
                <li>
                    <div class="flex items-center space-x-1.5 text-[#939393]">
                        <span class="inline-block mr-2">\</span>
                        <a href="#"
                            class="inline-flex text-[#F78D1E] items-center font-medium text-body hover:text-fg-brand">Careers</a>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="max-w-6xl mx-auto text-lg lg:text-xl text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                <span class="font-normal">Join the</span> Emerald Team.
            </h2>
            <p class="leading-relaxed mb-4">
                Emerald Industries has established a strong corporate network. The work culture is both exciting and
                challenging, here! We are always looking out for bright minds, be it freshers or experienced
                professionals. We provide a conducive environment which help employees maintain a perfect work-life
                balance. If you are looking for a challenging career and an exciting professional journey ahead,
            </p>
            <p>send in your updated resume to <a href="mailto:info@ejindia.com"
                    class="font-medium underline">info@ejindia.com</a> In you have any queries, call <a
                    href="tel:0422-4222200" class="font-medium underline">0422-4222200</a> or <a
                    href="tel:+91 97917 14333" class="font-medium underline">+91 97917 14333</a>.</p>
        </div>
    </div>
</section>

<section class="py-24 bg-[#111111]">
    <div class="container mx-auto px-6">
        <div class="text-center text-white mb-16">
            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                <span class="font-normal">Current</span> Job Openings
            </h2>
            <p class="text-lg lg:text-xl">We are always looking for passionate, dynamic, and talented individuals to
                join our team all around the world.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
            <div>
                <div class="w-full lg:rounded-xl overflow-auto lg:overflow-hidden lg:border border-[#444444] flex gap-4 lg:gap-0 lg:sticky top-24 lg:block"
                    id="careers-filter-container">
                    <button data-filter="all-jobs"
                        class="career-filter-btn cursor-pointer whitespace-nowrap lg:whitespace-wrap rounded-full lg:rounded-none w-full bg-[#F78D1F] px-5 py-2 lg:py-4 hover:opacity-80 duration-300">
                        All Jobs
                    </button>
                    <?php foreach ($departments as $department): ?>
                        <button data-filter="<?php echo sanitize_title($department); ?>"
                            class="career-filter-btn cursor-pointer whitespace-nowrap lg:whitespace-wrap rounded-full lg:rounded-none w-full bg-[#6868686B] text-white px-5 py-2 lg:py-4 hover:opacity-80 duration-300 border-t border-[#444444]">
                            <?php echo esc_html($department); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="grid md:grid-cols-2 gap-8" id="careers-job-grid">
                    <?php foreach ($jobs as $job):
                        $terms = get_the_terms($job->ID, 'job_category');
                        $department = get_field('department', $job->ID);
                        $department_slug = sanitize_title($department);
                        $location = get_field('location', $job->ID);
                        $experience = get_field('experience', $job->ID);
                        $qualification = get_field('qualification', $job->ID);
                        $positions = get_field('open_positions', $job->ID);
                        ?>
                        <div data-job="<?php echo esc_attr($department_slug); ?>"
                            class="job-card-item duration-300 bg-[#b3b3b32f] hover:bg-[#b3b3b338] backdrop-filter backdrop-blur-sm bg-opacity-10 border border-[#444444] hover:border-white rounded-2xl p-6">
                            <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                                <?php echo esc_html(get_the_title($job->ID)); ?>
                            </h3>
                            <p class="text-white">
                                <span class="text-[#F78D1E]">Category :</span>
                                <?php if (!empty($terms)) {
                                    echo esc_html($terms[0]->name);
                                } ?>
                            </p>
                            <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">
                                <p><span class="text-[#8E8E8E]">Location:</span> <?php echo esc_html($location); ?></p>
                                <p><span class="text-[#8E8E8E]">Experience:</span> <?php echo esc_html($experience); ?></p>
                                <p><span class="text-[#8E8E8E]">Qualification:</span>
                                    <?php echo esc_html($qualification); ?></p>
                                <p><span class="text-[#8E8E8E]">Positions:</span>
                                    <?php echo !empty($positions) ? esc_html($positions) : '_'; ?></p>
                            </div>
                            <div class="flex flex-wrap gap-3 mt-8 font-medium">
                                <button command="show-modal" commandfor="job_view_<?php echo $job->ID; ?>"
                                    class="border border-white text-white px-6 py-2 rounded-full cursor-pointer transition-all hover:bg-white hover:text-black">
                                    View More
                                </button>
                                <button command="show-modal" commandfor="job_interest_<?php echo $job->ID; ?>"
                                    class="bg-[#F78D1F] text-black px-6 py-2 rounded-full cursor-pointer">
                                    I'm Interested
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php foreach ($jobs as $job):
    $department = get_field('department', $job->ID);
    $location = get_field('location', $job->ID);
    $experience = get_field('experience', $job->ID);
    $qualification = get_field('qualification', $job->ID);
    $positions = get_field('open_positions', $job->ID);
    ?>
    <dialog id="job_view_<?php echo $job->ID; ?>"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 dialog-dismiss-overlay"></el-dialog-backdrop>
        <div
            class="flex relative min-h-full items-end justify-center text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-xl sm:my-8 w-[95%] max-w-6xl pb-6">
                <div>
                    <div
                        class="h-80 bg-[url(http://ea.brightbridge.co/wp-content/uploads/2026/06/carre-jd.jpg)] bg-cover bg-center flex items-end p-5 relative">
                        <div class="absolute w-full h-full top-0 left-0 bg-black opacity-50 z-0"></div>
                        <button type="button" command="close" commandfor="job_view_<?php echo $job->ID; ?>"
                            class="text-white absolute top-5 right-5 cursor-pointer">Close</button>
                        <div class="text-white z-[1] space-y-4">
                            <h4 class="uppercase font-light text-lg md:text-xl">Career</h4>
                            <h3 class="text-3xl md:text-4xl font"><?php echo esc_html($department); ?></h3>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 p-5 sm:p-8">
                        <div class="col-span-2 order-2 lg:order-1">
                            <h3 class="text-2xl md:text-4xl mb-6"><?php echo esc_html(get_the_title($job->ID)); ?></h3>
                            <ul class="career-jds pl-5 space-y-2">
                                <?php if (have_rows('job_description', $job->ID)): ?>
                                    <?php while (have_rows('job_description', $job->ID)):
                                        the_row(); ?>
                                        <li><?php echo esc_html(get_sub_field('description_point')); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="space-y-3 order-1 lg:order-2 ">
                            <h3 class="text-2xl md:text-4xl mb-4">Job information</h3>
                            <p class="text-sm text-gray-500">Location<br><span
                                    class="font-medium text-gray-900 text-base"><?php echo esc_html($location); ?></span>
                            </p>
                            <p class="text-sm text-gray-500">Experience<br><span
                                    class="font-medium text-gray-900 text-base"><?php echo esc_html($experience); ?></span>
                            </p>
                            <p class="text-sm text-gray-500">Qualification<br><span
                                    class="font-medium text-gray-900 text-base"><?php echo esc_html($qualification); ?></span>
                            </p>
                            <p class="text-sm text-gray-500">Positions<br><span
                                    class="font-medium text-gray-900 text-base"><?php echo !empty($positions) ? esc_html($positions) : '_'; ?></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="px-5 sm:px-8 mt-4 flex gap-3">
                    <button type="button"
                        class="jd-interested-trigger rounded-md bg-[#F78D1E] px-5 py-2.5 text-black font-medium cursor-pointer hover:bg-opacity-90"
                        data-target="job_interest_<?php echo $job->ID; ?>" data-current="job_view_<?php echo $job->ID; ?>">
                        I'm INTERESTED
                    </button>
                    <button type="button"
                        class="jd-view-all-trigger rounded-md bg-white border border-gray-300 px-5 py-2.5 text-gray-700 font-medium cursor-pointer hover:bg-gray-50"
                        data-current="job_view_<?php echo $job->ID; ?>">
                        VIEW ALL JOBS
                    </button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>

    <dialog id="job_interest_<?php echo $job->ID; ?>"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 dialog-dismiss-overlay"></el-dialog-backdrop>
        <div class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
                class="relative p-5 sm:p-8 transform overflow-hidden rounded-3xl bg-white text-left shadow-xl sm:my-8 w-[95%] max-w-3xl">
                <button type="button" command="close" commandfor="job_interest_<?php echo $job->ID; ?>"
                    class="absolute top-5 right-5 cursor-pointer text-gray-500 hover:text-black text-xl">&times;</button>

                <div class="pt-6">
                    <h3 class="text-2xl font-bold mb-2">Apply for <?php echo esc_html(get_the_title($job->ID)); ?></h3>
                    <p class="text-gray-500 mb-6">Please fill out the form below to submit your corporate profile.</p>
                    <?php echo do_shortcode('[wpforms id="1441"]'); ?>
                </div>

                <input type="hidden" class="career-job-title" value="<?php echo esc_attr(get_the_title($job->ID)); ?>">

                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end gap-3">
                    <button type="button" command="close" commandfor="job_interest_<?php echo $job->ID; ?>"
                        class="rounded-md bg-white border border-gray-300 px-5 py-2 text-gray-700 font-medium cursor-pointer hover:bg-gray-50">
                        Cancel
                    </button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>
<?php endforeach; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // --- 1. DEPARTMENTS TAB FILTER LOGIC ---
        const filterButtons = document.querySelectorAll('#careers-filter-container .career-filter-btn');
        const jobCards = document.querySelectorAll('#careers-job-grid .job-card-item');

        function applyJobFilter(filterValue) {
            filterButtons.forEach(btn => {
                if (btn.getAttribute('data-filter') === filterValue) {
                    btn.classList.remove('bg-[#6868686B]', 'text-white');
                    btn.classList.add('bg-[#F78D1F]', 'text-black');
                } else {
                    btn.classList.remove('bg-[#F78D1F]', 'text-black');
                    btn.classList.add('bg-[#6868686B]', 'text-white');
                }
            });

            jobCards.forEach(card => {
                if (filterValue === 'all-jobs' || card.getAttribute('data-job') === filterValue) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                applyJobFilter(this.getAttribute('data-filter'));
            });
        });

        // --- 2. INTER-MODAL INTERACTIVE CONTROLS ---
        // Handle "VIEW ALL JOBS" internally inside JDs
        document.querySelectorAll('.jd-view-all-trigger').forEach(trigger => {
            trigger.addEventListener('click', function () {
                const currentModalId = this.getAttribute('data-current');
                const targetModal = document.getElementById(currentModalId);

                if (targetModal) {
                    targetModal.close(); // Close current dialog box
                }

                applyJobFilter('all-jobs'); // Set tab row container back to "All Jobs"

                // Smooth scroll tracking back to openings section anchor natively
                const gridSection = document.getElementById('careers-filter-container');
                if (gridSection) {
                    gridSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });

        // Handle "I'm INTERESTED" transition sequence directly inside JDs
        document.querySelectorAll('.jd-interested-trigger').forEach(trigger => {
            trigger.addEventListener('click', function () {
                const currentModalId = this.getAttribute('data-current');
                const targetModalId = this.getAttribute('data-target');

                const currentModal = document.getElementById(currentModalId);
                const targetModal = document.getElementById(targetModalId);

                if (currentModal) currentModal.close();
                if (targetModal) targetModal.showModal();
            });
        });

        // Native backdrop dismiss fallback binder
        document.querySelectorAll('.dialog-dismiss-overlay').forEach(overlay => {
            overlay.addEventListener('click', function () {
                const parentDialog = this.closest('dialog');
                if (parentDialog) parentDialog.close();
            });
        });
    });
</script>

<?php get_footer(); ?>