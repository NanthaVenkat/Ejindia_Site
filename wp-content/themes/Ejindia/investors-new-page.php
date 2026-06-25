<?php
/*
Template Name: Investors New
*/

get_header();
?>

<style>
    /* custom overrides & tab styles */
    .companies-tab-btn {
        transition: all 0.2s ease;
    }

    .companies-tab-btn.active {
        background-color: #F78D1E;
        color: #000;
    }

    .download-row {
        transition: background 0.15s;
    }

    .download-row:hover {
        background: #1e1e1e;
    }

    /* side menu overlay for mobile */
    .mobile-menu-overlay {
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* subtle scroll for tall content */
    .tab-panel-scroll {
        max-height: 70vh;
        overflow-y: auto;
    }

    /* dialog backdrop fix */
    dialog::backdrop {
        background: rgba(0, 0, 0, 0.5);
    }

    /* selected state for side menu */
    .nav-item-active {
        background-color: #F78D1E !important;
        color: #000 !important;
    }
</style>

<!-- ========== MAIN WRAPPER (dashboard style) ========== -->
<div class="min-h-screen bg-black py-6 md:py-10 px-4 md:px-8">

    <!-- header -->
    <div class="max-w-7xl mx-auto mb-8 text-center md:text-left">
        <h1 class="text-[#F78D1E] text-3xl md:text-4xl font-medium tracking-tight">
            GROUP COMPANIES
        </h1>
    </div>

    <!-- ===== DASHBOARD LAYOUT: sidebar + content ===== -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-6 relative">

        <!-- ===== SIDE MENU (desktop static, mobile toggle) ===== -->
        <div id="sideMenu" class="
      lg:relative lg:block 
      fixed top-20 lg:top-0 left-0 z-40 h-full w-[280px] 
      bg-[#111] border-r border-gray-800 
      transform -translate-x-full lg:translate-x-0 
      transition-transform duration-300 ease-in-out
      overflow-y-auto pt-6 pb-10 px-4
    ">
            <!-- close button (mobile) -->
            <button id="closeMenuBtn" class="lg:hidden absolute top-0 right-0">
                <img src="https://stagingejindia.brightbridge.co/wp-content/uploads/2026/06/close-x-svg.svg" alt="close"
                    class="mr-2 w-6">
            </button>

            <div class="space-y-1 mt-2">
                <button
                    class="companies-tab-btn w-full text-left px-4 py-3 rounded-lg text-sm font-medium flex items-center gap-3 text-white bg-[#1f1f1f] hover:bg-[#2a2a2a] active"
                    data-target="ijc">
                    Indiania Jewellery
                </button>
                <button
                    class="companies-tab-btn w-full text-left px-4 py-3 rounded-lg text-sm font-medium flex items-center gap-3 text-white bg-[#1f1f1f] hover:bg-[#2a2a2a]"
                    data-target="ejdmcc">
                    Emerald Jewellers DMCC
                </button>
                <button
                    class="companies-tab-btn w-full text-left px-4 py-3 rounded-lg text-sm font-medium flex items-center gap-3 text-white bg-[#1f1f1f] hover:bg-[#2a2a2a]"
                    data-target="epc">
                    Emerald Precious Chains
                </button>
                <button
                    class="companies-tab-btn w-full text-left px-4 py-3 rounded-lg text-sm font-medium flex items-center gap-3 text-white bg-[#1f1f1f] hover:bg-[#2a2a2a]"
                    data-target="ggr">
                    Green Gem Renewables
                </button>
                <button
                    class="companies-tab-btn w-full text-left px-4 py-3 rounded-lg text-sm font-medium flex items-center gap-3 text-white bg-[#1f1f1f] hover:bg-[#2a2a2a]"
                    data-target="joj">
                    Jewel One Jewellery
                </button>
            </div>

        </div>

        <!-- ===== MOBILE MENU TOGGLE (fixed) ===== -->
        <div class="lg:hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50">
            <button id="openMenuBtn"
                class="bg-[#F78D1E] text-black px-6 py-3 rounded-full shadow-lg font-semibold flex items-center gap-3 text-sm">
                <img src="https://stagingejindia.brightbridge.co/wp-content/uploads/2026/06/menu-svg.svg" alt="Download"
                    class="mr-2 w-4"> Companies
            </button>
        </div>

        <!-- ===== CONTENT PANEL (dashboard cards) ===== -->
        <div class="lg:col-span-1 bg-[#0d0d0d] rounded-2xl border border-gray-800 p-4 md:p-6 shadow-xl text-white">

            <!-- Tab panels -->
            <div class="companies-tab-content-container tab-panel-scroll">

                <!-- IJC -->
                <div id="ijc" class="companies-tab-panel space-y-0" style="display: block;">
                    <div class="flex items-center gap-3 border-b border-gray-700 pb-3 mb-4">
                        <span class="font-medium text-white">Indiania Jewellery Company Pvt Ltd</span>
                    </div>
                    <div
                        class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                        <span class="text-sm md:text-base"> Indiania
                            FY 25</span>
                        <a href="#" class="text-[#F78D1E] flex items-center gap-2 text-sm font-medium hover:underline">
                            <img src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4"> DOWNLOAD
                        </a>
                    </div>
                </div>

                <!-- EJDMCC -->
                <div id="ejdmcc" class="companies-tab-panel space-y-0" style="display: none;">
                    <div class="flex items-center gap-3 border-b border-gray-700 pb-3 mb-4">
                        <span class="font-medium text-white">Emerald Jewellers DMCC</span>
                    </div>
                    <!-- list -->
                    <div class="space-y-1">
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">FY 2025</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">CFS FY 25</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">FY 2024</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">CFS FY 24</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">CFS FY 23</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">FY 2023</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                    </div>
                </div>

                <!-- EPC -->
                <div id="epc" class="companies-tab-panel" style="display: none;">
                    <div class="flex items-center gap-3 border-b border-gray-700 pb-3 mb-4">
                        <span class="font-medium text-white">Emerald Precious Chains Ltd</span>
                    </div>
                    <div
                        class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                        <span class="text-sm">EPC FY 25</span><a href="#"
                            class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                    </div>
                </div>

                <!-- GGR -->
                <div id="ggr" class="companies-tab-panel" style="display: none;">
                    <div class="flex items-center gap-3 border-b border-gray-700 pb-3 mb-4">
                        <span class="font-medium text-white">Green Gem Renewables Pvt Ltd</span>
                    </div>
                    <div
                        class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                        <span class="text-sm">GGRPL CFS FY
                            25</span><a href="#" class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                    </div>
                    <div
                        class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                        <span class="text-sm">GGRPL FY 25</span><a href="#"
                            class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                    </div>
                </div>

                <!-- JOJ -->
                <div id="joj" class="companies-tab-panel" style="display: none;">
                    <div class="flex items-center gap-3 border-b border-gray-700 pb-3 mb-4">
                        <span class="font-medium text-white">Jewel One Jewellery LLC</span>
                    </div>
                    <div class="space-y-1">
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">FY 2025</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">FY 2024</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                        <div
                            class="download-row flex justify-between items-center border-b border-[#2a2a2a] py-4 px-2 rounded-lg">
                            <span class="text-sm">FY 2023</span><a href="#"
                                class="text-[#F78D1E] flex items-center gap-2 text-sm"><img
                                    src="http://ea.brightbridge.co/wp-content/uploads/2026/06/download-orange.svg"
                                    alt="Download" class="mr-2 w-4">DOWNLOAD</a>
                        </div>
                    </div>
                </div>

            </div> <!-- end tab panels -->
        </div>
    </div>
</div>

<!-- ===== PDF DIALOG (minimal) ===== -->
<dialog id="pdf-dialog"
    class="rounded-xl backdrop:bg-black/60 w-11/12 max-w-4xl p-0 bg-[#1a1a1a] border border-gray-700">
    <div class="flex justify-between items-center p-4 border-b border-gray-700">
        <h3 class="text-white font-medium"><i class="fas fa-file-pdf text-[#F78D1E] mr-2"></i>Document Viewer</h3>
        <button id="close-dialog-btn"
            class="bg-white/10 hover:bg-white/20 text-white px-4 py-1.5 rounded-md text-sm"><img
                src="https://stagingejindia.brightbridge.co/wp-content/uploads/2026/06/close-x-svg.svg" alt="close"
                class="mr-2 w-4">Close</button>
    </div>
    <div class="h-[70vh] w-full bg-white">
        <iframe id="pdf-frame" src="about:blank" width="100%" height="100%" frameborder="0"
            class="w-full h-full"></iframe>
    </div>
</dialog>



<!-- ===== JAVASCRIPT ===== -->
<script>
    (function () {
        "use strict";

        // DOM elements
        const tabs = document.querySelectorAll('.companies-tab-btn');
        const panels = document.querySelectorAll('.companies-tab-panel');
        const sideMenu = document.getElementById('sideMenu');
        const openBtn = document.getElementById('openMenuBtn');
        const closeBtn = document.getElementById('closeMenuBtn');

        // dialog elements
        const dialog = document.getElementById('pdf-dialog');
        const iframe = document.getElementById('pdf-frame');
        const closeDialogBtn = document.getElementById('close-dialog-btn');

        // ---------- TAB LOGIC ----------
        function activateTab(button) {
            if (!button) return;
            // remove active class from all
            tabs.forEach(btn => btn.classList.remove('active', 'nav-item-active'));
            // hide all panels
            panels.forEach(p => p.style.display = 'none');

            button.classList.add('active', 'nav-item-active');
            const target = button.getAttribute('data-target');
            const panel = document.getElementById(target);
            if (panel) panel.style.display = 'block';

            // update URL param (optional)
            try {
                const url = new URL(window.location);
                url.searchParams.set('tab', target);
                window.history.pushState({}, '', url);
            } catch (e) { }
        }

        // click listeners
        tabs.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                activateTab(this);
                // close mobile menu after selection (optional)
                if (window.innerWidth < 1024) {
                    sideMenu.classList.remove('translate-x-0');
                    sideMenu.classList.add('-translate-x-full');
                }
            });
        });

        // read URL param on load
        function initTabFromURL() {
            const params = new URLSearchParams(window.location.search);
            const tabParam = params.get('tab');
            if (tabParam) {
                let matched = null;
                tabs.forEach(btn => {
                    if (btn.getAttribute('data-target') === tabParam) {
                        matched = btn;
                    }
                });
                if (matched) {
                    activateTab(matched);
                    return;
                }
            }
            // default first tab
            if (tabs.length) activateTab(tabs[0]);
        }
        initTabFromURL();

        // ---------- MOBILE SIDE MENU TOGGLE ----------
        function toggleMenu(open) {
            if (open === true) {
                sideMenu.classList.remove('-translate-x-full');
                sideMenu.classList.add('translate-x-0');
            } else {
                sideMenu.classList.remove('translate-x-0');
                sideMenu.classList.add('-translate-x-full');
            }
        }

        if (openBtn) {
            openBtn.addEventListener('click', function () {
                toggleMenu(true);
            });
        }
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                toggleMenu(false);
            });
        }
        // close on outside click (optional) - click on backdrop? we use overlay but not needed.

        // close menu on resize to desktop
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 1024) {
                sideMenu.classList.remove('-translate-x-full');
                sideMenu.classList.add('translate-x-0');
            } else {
                // keep mobile state but if menu is open we keep it.
                // we can leave it as is.
            }
        });

        // ---------- PDF DIALOG ----------
        // using data attributes for demo: we attach to download links? but we use open-pdf-modal-btn class if needed.
        // since the original code uses .open-pdf-modal-btn we keep it, but we simulate with click on download links (prevent default)
        document.querySelectorAll('.download-row a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                // get the pdf path from href (fake)
                const href = this.getAttribute('href');
                if (href && href !== '#') {
                    iframe.src = href;
                    dialog.showModal();
                } else {
                    // demo: load a dummy pdf (sample)
                    iframe.src = 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf';
                    dialog.showModal();
                }
            });
        });

        // close dialog
        if (closeDialogBtn) {
            closeDialogBtn.addEventListener('click', function () {
                dialog.close();
                iframe.src = 'about:blank';
            });
        }
        // click on backdrop closes
        dialog.addEventListener('click', function (e) {
            if (e.target === dialog) {
                dialog.close();
                iframe.src = 'about:blank';
            }
        });

        console.log('Investor Dashboard ready.');

    })();
</script>

<?php get_footer(); ?>