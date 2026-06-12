<?php
/*
Template Name: Investors
*/

get_header();
?>

<section class="py-12">
    <div class="w-full xl:max-w-[1440px] mx-auto">
        <div class="max-w-xl mx-auto mb-10 text-center">
            <h3 class="text-[#F78D1E] text-3xl md:text-4xl font-medium mb-4">Investors</h3>
            <p class="text-[#939393]">Experience the breadth and depth of the Emerald, with the professional services,
                infrastructure, support,
                and security that a large business needs.
            </p>
        </div>

        <div class="w-full">
            <div
                class="investors-tab-navigation w-max mx-auto bg-[#99a1af63] backdrop-filter backdrop-blur-sm bg-opacity-10 font-medium space-x-2 mb-6">
                <button class="investors-tab-btn active" data-target="policies">Policies</button>
                <button class="investors-tab-btn" data-target="annual-return">Annual Return</button>
                <button class="investors-tab-btn" data-target="fixed-deposit">Fixed Deposit Scheme</button>
            </div>

            <div class="investors-tab-content-container mx-auto">

                <div id="policies" class="investors-tab-panel text-white text-center" style="display: block;">
                    <h2 class="text-[#636367] font-semibold text-2xl mb-4">Policies</h2>
                    <?php if (have_rows('policies_docs')): ?>
                        <?php while (have_rows('policies_docs')):
                            the_row();
                            $doc_name = get_sub_field('doc_name');
                            $file_url = get_sub_field('file_upload');
                            $action_type = get_sub_field('action_type');
                            ?>
                            <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2 items-center">
                                <span class="text-left"><?php echo esc_html($doc_name); ?></span>

                                <?php if ($action_type === 'view'): ?>
                                    <button type="button" class="text-[#F78D1E] font-medium open-pdf-modal-btn"
                                        data-filepath="<?php echo esc_url($file_url); ?>">VIEW</button>
                                <?php else: ?>
                                    <a href="<?php echo esc_url($file_url); ?>" download class="text-[#F78D1E] flex items-center">
                                        <img src="http://localhost/Ejindia_Site/wp-content/uploads/2026/06/download-orange.svg"
                                            alt="Download" class="mr-2 w-4">DOWNLOAD
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-gray-400 py-4">No policy documents available at this time.</p>
                    <?php endif; ?>
                </div>

                <div id="annual-return" class="investors-tab-panel text-white text-center" style="display: none;">
                    <h2 class="text-[#636367] font-semibold text-2xl mb-4">Annual Return</h2>
                    <?php if (have_rows('annual_return_docs')): ?>
                        <?php while (have_rows('annual_return_docs')):
                            the_row();
                            $doc_name = get_sub_field('doc_name');
                            $file_url = get_sub_field('file_upload');
                            $action_type = get_sub_field('action_type');
                            ?>
                            <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2 items-center">
                                <span class="text-left"><?php echo esc_html($doc_name); ?></span>

                                <?php if ($action_type === 'view'): ?>
                                    <button type="button" class="text-[#F78D1E] font-medium open-pdf-modal-btn"
                                        data-filepath="<?php echo esc_url($file_url); ?>">VIEW</button>
                                <?php else: ?>
                                    <a href="<?php echo esc_url($file_url); ?>" download class="text-[#F78D1E] flex items-center">
                                        <img src="http://localhost/Ejindia_Site/wp-content/uploads/2026/06/download-orange.svg"
                                            alt="Download" class="mr-2 w-4">DOWNLOAD
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-gray-400 py-4">No annual returns available at this time.</p>
                    <?php endif; ?>
                </div>

                <div id="fixed-deposit" class="investors-tab-panel text-white text-center" style="display: none;">
                    <h2 class="text-[#636367] font-semibold text-2xl mb-4">Fixed Deposit Scheme</h2>
                    <?php if (have_rows('fixed_deposit_docs')): ?>
                        <?php while (have_rows('fixed_deposit_docs')):
                            the_row();
                            $doc_name = get_sub_field('doc_name');
                            $file_url = get_sub_field('file_upload');
                            $action_type = get_sub_field('action_type');
                            ?>
                            <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2 items-center">
                                <span class="text-left">
                                    <?php echo esc_html($doc_name); ?>
                                </span>

                                <?php if ($action_type === 'view'): ?>
                                    <button type="button" class="text-[#F78D1E] font-medium open-pdf-modal-btn"
                                        data-filepath="<?php echo esc_url($file_url); ?>">VIEW</button>
                                <?php else: ?>
                                    <a href="<?php echo esc_url($file_url); ?>" download class="text-[#F78D1E] flex items-center">
                                        <img src="http://localhost/Ejindia_Site/wp-content/uploads/2026/06/download-orange.svg"
                                            alt="Download" class="mr-2 w-4">DOWNLOAD
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-gray-400 py-4">No fixed deposit documents available at this time.</p>
                    <?php endif; ?>
                </div>

            </div>
        </div>

    </div>
</section>

<dialog id="pdf-dialog"
    class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
    <div class="fixed inset-0 bg-gray-900/50 dialog-overlay-closer"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center focus:outline-none">
        <div
            class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl sm:my-8 sm:w-full sm:max-w-4xl w-11/12">
            <div class="dialog-header flex justify-between items-center p-4 border-b border-gray-700">
                <h3 class="text-white font-medium">Document Viewer</h3>
                <button type="button" id="close-dialog-btn"
                    class="rounded-md bg-white/10 px-3 py-2 text-white hover:bg-white/20 transition">
                    Close
                </button>
            </div>

            <div class="dialog-body h-[70vh] w-full bg-white">
                <iframe id="pdf-frame" src="about:blank" width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</dialog>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const dialog = document.getElementById('pdf-dialog');
        const iframe = document.getElementById('pdf-frame');
        const closeBtn = document.getElementById('close-dialog-btn');

        document.querySelectorAll('.open-pdf-modal-btn').forEach(btn => {

            btn.addEventListener('click', function () {
                const pdfUrl = this.dataset.filepath;
                console.log(pdfUrl);
                iframe.src = pdfUrl;
                dialog.showModal();
            });
        });

        closeBtn.addEventListener('click', function () {
            dialog.close();
            iframe.src = '';
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.investors-tab-btn');
        const tabPanels = document.querySelectorAll('.investors-tab-panel');

        // Function to update URL slug
        function updateURLSlug(tabName) {
            const url = new URL(window.location);
            url.searchParams.set('tab', tabName.toLowerCase().replace(/\s+/g, '-'));
            window.history.pushState({}, '', url);
        }

        // Function to get tab name from URL
        function getTabFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            const tabParam = urlParams.get('tab');
            if (tabParam) {
                // Find button with matching data-slug or convert param back to original name
                let matchedButton = null;
                tabButtons.forEach(button => {
                    const buttonSlug = button.getAttribute('data-slug') ||
                        button.innerText.trim().toLowerCase().replace(/\s+/g, '-');
                    if (buttonSlug === tabParam) {
                        matchedButton = button;
                    }
                });
                return matchedButton;
            }
            return null;
        }

        // Function to activate a specific tab
        function activateTab(button) {
            if (!button) return;

            // 1. Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));

            // 2. Hide all content panels
            tabPanels.forEach(panel => panel.style.display = 'none');

            // 3. Add active class to the clicked button
            button.classList.add('active');

            // 4. Show the targeted content panel
            const targetId = button.getAttribute('data-target');
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.style.display = 'block';
            }

            // 5. Update URL slug
            const tabName = button.innerText.trim();
            updateURLSlug(tabName);
        }

        // Add click event listeners to tab buttons
        tabButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                activateTab(this);
            });
        });

        // Check URL on page load and activate corresponding tab
        const tabFromURL = getTabFromURL();
        if (tabFromURL) {
            activateTab(tabFromURL);
        } else {
            // If no tab in URL, activate the first tab by default
            if (tabButtons.length > 0) {
                activateTab(tabButtons[0]);
            }
        }
    });
</script>

<?php get_footer(); ?>