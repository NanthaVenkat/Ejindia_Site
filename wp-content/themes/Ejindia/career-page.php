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

<!-- HERO SECTION -->
<section class="relative h-[520px] bg-black overflow-hidden flex items-center">

    <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/career_banner.jpg" alt=""
        class="absolute inset-0 w-full h-full object-cover">

    <!-- <div class="absolute inset-0 bg-black/60"></div> -->

    <div class="relative z-10 container mx-auto px-6 flex items-center">
        <div class="max-w-2xl">

            <!-- <p class="text-[#F78D1F] uppercase tracking-widest mb-4">
        Careers
      </p> -->

            <h1 class="text-white text-3xl lg:text-5xl font-medium leading-tight">
                Seize your opportunity become part of the vibrant Emerald family
            </h1>

        </div>
    </div>

</section>

<!-- INTRO SECTION -->
<section class="py-24 bg-white">

    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center">

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                <span class="font-normal">Join the</span> Emerald Team.
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                Emerald Industries has established a strong corporate network. The work culture is both exciting and
                challenging,
                here! We are always looking out for bright minds, be it freshers or experienced professionals. We
                provide a conducive environment which help employees maintain a perfect work-life balance. If you are
                looking for a challenging
                career and an exciting professional journey ahead,
            </p>
            <p>send in your updated resume to <a href="mailto:info@ejindia.com">info@ejindia.com</a> In you have any
                queries, call <a href="tel:0422-4222200">0422-4222200</a> or <a href="tel:+91 97917 14333">+91 97917
                    14333</a>.</p>
        </div>
    </div>

</section>

<!-- JOB OPENINGS -->
<section class="py-24 bg-[#111111]">

    <div class="container mx-auto px-6">

        <div class="text-center text-white mb-16">

            <h2 class="text-4xl md:text-6xl font-bold mb-8">
                <span class="font-normal">Current</span> Job Openings
            </h2>

            <p>We are always looking for passionate, dynamic, and talented individuals to join our team all around the
                world.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <div>
                <div
                    class="w-full lg:rounded-xl overflow-auto lg:overflow-hidden lg:border border-[#444444] flex gap-4 lg:gap-0 lg:sticky top-24 lg:block">

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

            <!-- JOB LIST -->
            <div class="lg:col-span-3">

                <div class="grid md:grid-cols-2 gap-8">

                    <?php foreach ($jobs as $job):

                        $terms = get_the_terms($job->ID, 'job_category');
                        // $slug = !empty($terms) ? $terms[0]->slug : 'uncategorized';

                        $department = get_field('department', $job->ID);
                        $department_slug = sanitize_title($department);

                        $department = get_field('department', $job->ID);
                        $location = get_field('location', $job->ID);
                        $experience = get_field('experience', $job->ID);
                        $qualification = get_field('qualification', $job->ID);
                        $positions = get_field('open_positions', $job->ID);
                        ?>

                        <div data-job="<?php echo esc_attr($department_slug); ?>"
                            class="duration-300 bg-[#b3b3b32f] hover:bg-[#b3b3b338] backdrop-filter backdrop-blur-sm bg-opacity-10 border border-[#444444] hover:border-white rounded-2xl border p-6">

                            <h3 class="text-white text-xl font-semibold pb-3 mb-3 border-b border-[#444444]">
                                <?php echo esc_html(get_the_title($job->ID)); ?>
                            </h3>

                            <!-- <`?php if ($department): ?>
                                <div class="mb-4">
                                    <span
                                        class="inline-block bg-[#F78D1F] text-black px-4 py-1 rounded-full text-sm font-semibold">
                                        <`?php echo esc_html($department); ?>
                                    </span>
                                </div>
                            <`?php endif; ?> -->

                            <p class="text-white">
                                <span class="text-[#F78D1E]">Category :</span>

                                <?php
                                if (!empty($terms)) {
                                    echo esc_html($terms[0]->name);
                                }
                                ?>
                            </p>

                            <div class="mt-4 space-y-2 text-white border border-[#444444] p-4 rounded-2xl">

                                <p>
                                    <span class="text-[#8E8E8E]">Location:</span>
                                    <?php echo esc_html($location); ?>
                                </p>

                                <p>
                                    <span class="text-[#8E8E8E]">Experience:</span>
                                    <?php echo esc_html($experience); ?>
                                </p>

                                <p>
                                    <span class="text-[#8E8E8E]">Qualification:</span>
                                    <?php echo esc_html($qualification); ?>
                                </p>

                                <p>
                                    <span class="text-[#8E8E8E]">Positions:</span>
                                    <?php echo !empty($positions) ? esc_html($positions) : '_'; ?>
                                </p>

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
<?php foreach ($jobs as $job): ?>

    <!-- Job Description Modal -->

    <dialog id="job_view_<?php echo $job->ID; ?>"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">

        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">

            <el-dialog-panel
                class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl sm:my-8 sm:w-full sm:max-w-lg">

                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6">

                    <h3 class="text-white text-xl font-medium mb-6">
                        <?php echo esc_html(get_the_title($job->ID)); ?>
                    </h3>

                    <ul class="career-jds text-white pl-5">

                        <?php if (have_rows('job_description', $job->ID)): ?>

                            <?php while (have_rows('job_description', $job->ID)):
                                the_row(); ?>

                                <li>
                                    <?php echo esc_html(get_sub_field('description_point')); ?>
                                </li>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </ul>

                </div>

                <div class="bg-gray-700/25 px-4 py-3">

                    <button type="button" command="close" commandfor="job_view_<?php echo $job->ID; ?>"
                        class="rounded-md bg-white/10 px-3 py-2 text-white">

                        Close

                    </button>

                </div>

            </el-dialog-panel>

        </div>

    </dialog>



    <!-- Interested Modal -->

    <dialog id="job_interest_<?php echo $job->ID; ?>"
        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">

        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50"></el-dialog-backdrop>

        <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">

            <el-dialog-panel
                class="relative p-4 transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl sm:my-8 sm:w-full sm:max-w-lg">

                <?php echo do_shortcode('[wpforms id="1441"]'); ?>

                <input type="hidden" class="career-job-title" value="<?php echo esc_attr(get_the_title($job->ID)); ?>">

                <div class="mt-4">

                    <button class="career-form-submit rounded-md bg-white/10 px-3 py-2 text-white mr-3">

                        Submit

                    </button>

                    <button type="button" command="close" commandfor="job_interest_<?php echo $job->ID; ?>"
                        class="rounded-md bg-white/10 px-3 py-2 text-white">

                        Cancel

                    </button>

                </div>

            </el-dialog-panel>

        </div>

    </dialog>

<?php endforeach; ?>

<?php get_footer(); ?>