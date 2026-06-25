<?php
/*
Template Name: Investors New
*/

get_header();
?>

<style>
    .companies-tab-navigation .companies-tab-btn {
        color: #fff;
        background-color: #262626;
        /* border-radius: 15px; */
        padding: 8px 14px;
        margin: 0px !important;
    }

    .companies-tab-navigation .companies-tab-btn-wrr {
        color: #fff;
        background-color: #262626;
        /* border-radius: 15px; */
        padding: 8px 14px;
        margin: 0px !important;
    }

    @media screen and (min-width: 1020px) {
        .companies-tab-navigation .companies-tab-btn:not(:last-child) {
            border-bottom: 1px solid #ffffff85;
        }

        .companies-tab-navigation .companies-tab-btn-wrr:not(:last-child) {
            border-bottom: 1px solid #ffffff85;
        }
    }

    @media screen and (max-width: 1020px) {
        .companies-tab-navigation .companies-tab-btn {
            min-width: 240px;
        }

        .companies-tab-navigation .companies-tab-btn-wrr {
            min-width: 240px;
        }
    }

    .companies-tab-navigation .companies-tab-btn.active {
        background-color: #F78D1E;
        color: #000;
    }

    .companies-tab-navigation .companies-tab-btn-wrr.active {
        background-color: #F78D1E;
        color: #000;
    }
</style>

<section class="py-12 px-4 bg-black">
    <div class="w-full xl:max-w-[1440px] mx-auto">
        <div class="max-w-xl mx-auto mb-10 text-center">
            <h3 class="!text-[#F78D1E] !text-3xl md:!text-4xl font-medium mb-4">OUR GROUP COMPANIES</h3>
        </div>

        <div class="grid lg:grid-cols-[40%_60%]">
            <div
                class="companies-tab-navigation flex lg:flex-col overflow-auto rounded-lg lg:overflow-hidden lg:max-w-[340px] w-full lg:w-max h-max mx-auto mb-6 font-medium">
                <button class="companies-tab-btn active" data-target="ijc">Indiania Jewellery Company Pvt
                    Ltd</button>
                <button class="companies-tab-btn" data-target="ejdmcc">Emerald Jewellers DMCC</button>
                <button class="companies-tab-btn" data-target="epc">Emerald Precious Chains Ltd</button>
                <button class="companies-tab-btn" data-target="ggr">Green Gem Renewables Pvt Ltd</button>
                <button class="companies-tab-btn" data-target="joj">Jewel One Jewellery LLC</button>

                <!-- Accordion Item 1 -->
                <!-- <div class="companies-tab-btn-wrr">
                        <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center">
                            <span>What is Material Tailwind?</span>
                            <span id="icon-1" class="transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                </svg>
                            </span>
                        </button>
                        <div id="content-1"
                            class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out absolute lg:relative top-full left-0">
                            <button class="companies-tab-btn active" data-target="ijc">Indiania Jewellery Company Pvt
                                Ltd</button>
                        </div>
                    </div> -->

                <!-- Accordion Item 2 -->
                <!-- <div class="border-b border-slate-200">
                        <button onclick="toggleAccordion(2)"
                            class="w-full flex justify-between items-center py-5 text-slate-800">
                            <span>How to use Material Tailwind?</span>
                            <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                </svg>
                            </span>
                        </button>
                        <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="pb-5 text-sm text-slate-500">
                                You can use Material Tailwind by importing its components into your Tailwind CSS project.
                            </div>
                        </div>
                    </div> -->
            </div>

            <div class="companies-tab-content-container mx-auto w-full">

                <div id="ijc" class="companies-tab-panel text-white text-center w-full" style="display: block;">
                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Indiania FY 25</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Indiania-FY-25.pdf" download
                            class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>
                </div>

                <div id="ejdmcc" class="companies-tab-panel text-white text-center w-full" style="display: none;">

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Emerald Jewellers DMCC FY 2025</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Emerald-Jewellers-DMCC-FY-2025.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Emerald Jewellers DMCC CFS FY 25</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Emerald-Jewellers-DMCC-CFS-FY-25.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Emerald Jewellers DMCC FY 2024</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Emerald-Jewellers-DMCC-FY-2024.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Emerald Jewellers DMCC CFS FY 24</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Emerald-Jewellers-DMCC-CFS-FY-24.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>


                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Emerald Jewellers DMCC CFS FY 23</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Emerald-Jewellers-DMCC-CFS-FY-23.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Emerald Jewellers DMCC FY 2023</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Emerald-Jewellers-DMCC-FY-2023.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>
                </div>

                <div id="epc" class="companies-tab-panel text-white text-center w-full" style="display: none;">
                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>EPC FY 25</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/EPC-FY-25.pdf" download
                            class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>
                </div>

                <div id="ggr" class="companies-tab-panel text-white text-center w-full" style="display: none;">
                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>GGRPL CFS FY 25</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/GGRPL-CFS-FY-25.pdf" download
                            class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>
                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>GGRPL FY 25</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/GGRPL-FY-25.pdf" download
                            class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>
                </div>

                <div id="joj" class="companies-tab-panel text-white text-center w-full" style="display: none;">

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Jewelone Jewellery LLC FY 2025</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Jewelone-Jewellery-LLC-FY-2025.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Jewelone Jewellery LLC FY 2024</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Jewelone-Jewellery-LLC-FY-2024.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
                    </div>

                    <div class="download-row flex justify-between border-b border-[#5A5A5A] py-4 px-2">
                        <span>Jewelone Jewellery LLC FY 2023</span>
                        <a href="http://ea.brightbridge.co/wp-content/uploads/2026/06/Jewelone-Jewellery-LLC-FY-2023.pdf"
                            download class="!text-[#F78D1E] flex">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD
                        </a>
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
        const tabButtons = document.querySelectorAll('.companies-tab-btn');
        const tabPanels = document.querySelectorAll('.companies-tab-panel');

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

    function toggleAccordion(index) {
        const content = document.getElementById(`content-${index}`);
        const icon = document.getElementById(`icon-${index}`);

        // SVG for Minus icon
        const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

        // SVG for Plus icon
        const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

        // Toggle the content's max-height for smooth opening and closing
        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            content.style.maxHeight = '0';
            icon.innerHTML = plusSVG;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.innerHTML = minusSVG;
        }
    }
</script>

<?php get_footer(); ?>