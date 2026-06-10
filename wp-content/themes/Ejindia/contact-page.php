<?php
/*
Template Name: Contact us
*/
get_header();
?>

<style>
    .investors-table td {
        padding: 12px 16px;
        /* background-color: #544f4c; */
        text-align: center;
        color: #C6C6C6;
        border: 1px solid #FFFFFF88;
        background: rgba(255, 255, 255, 0.26);
        backdrop-filter: blur(0px);
        -webkit-backdrop-filter: blur(0px);
    }

    .investors-table td:nth-child(3) {
        width: 400px;
    }

    .investors-table th {
        white-space: nowrap;
        padding: 12px 16px;
        border: 1px solid #FFFFFF88;
        background: rgba(255, 255, 255, 0.49);
        backdrop-filter: blur(1.9px);
        -webkit-backdrop-filter: blur(1.9px);
        text-transform: uppercase;
        /* color: #C6C6C6; */
        color: #fff;
    }
</style>

<section class="py-5 px-4 sm:px-6 xl:px-4">
    <div
        class="w-full xl:max-w-[1440px] mx-auto flex items-center justify-center md:justify-between flex-wrap md:flex-nowrap gap-y-12">
        <div class="md:max-w-[620px] text-center md:text-left">
            <h2 class="text-white text-3xl sm:text-5xl font-medium">Let’s build something awesome <span
                    class="text-[#F78D1E]">together</span></h2>
            <p class="text-base md:text-xl text-[#C6C6C6] mt-6">You can always send us a message or email. We’d be happy
                to help you out. Support hours: <span class="font-medium text-white">9:30am to 6:10pm</span></p>
        </div>

        <div>
            <img src="http://localhost/Ejindia_Site/wp-content/uploads/2026/06/career-banner.png" alt="">
        </div>
    </div>

    <div class="container mx-auto grid sm:grid-cols-2 lg:grid-cols-3 text-white text-xl font-medium py-6 gap-y-8">
        <div class="flex gap-6 justify-center w-max px-6 py-4 mx-auto">
            <img src="http://localhost/Ejindia_Site/wp-content/uploads/2026/06/mial-fff.svg" alt="" class="w-[40px]">
            <div>
                <h3>Shoot us an email</h3>
                <a href="mailto:info@ejindia.com" class="font-normal text-[#A7A7A7]">info@ejindia.com</a>
            </div>
        </div>

        <div class="flex gap-6 justify-center w-max px-6 py-4 mx-auto">
            <img src="http://localhost/Ejindia_Site/wp-content/uploads/2026/06/phone-fff.svg" alt="" class="w-[40px]">
            <div>
                <h3>Phone Call</h3>
                <a href="tel:0422-4222200" class="font-normal text-[#A7A7A7]">0422-4222200</a>
            </div>
        </div>

        <div
            class="flex group gap-6 justify-center border border-gray-500 rounded-xl w-max px-6 py-4 mx-auto hover:bg-[#3DB04B]">
            <img src="http://localhost/Ejindia_Site/wp-content/uploads/2026/06/whatsapp-fff.svg" alt=""
                class="w-[40px]">
            <div>
                <h3>Whatsapp</h3>
                <a href="tel:+91 9791714333" class="font-normal text-[#A7A7A7] group-hover:text-white">+91
                    9791714333</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="w-full xl:max-w-[1440px] mx-auto px-4">
        <div class="py-12">
            <h4 class="bg-[#f99227] px-6 py-4 text-black font-medium text-2xl text-center rounded-t-md">Investor
                Grievance Escalation
                Matrix</h4>

            <div class="overflow-auto">
                <table class="investors-table w-full overflow-auto">
                    <thead>
                        <tr>
                            <th>Details of</th>
                            <th>Contact Person</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email ID</th>
                            <th>Working Hours</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>CEO</td>
                            <td>Mr. K. Srinivasan </td>
                            <td>230, Thiruvenkatasamy Road, R.S. Puram, Coimbatore – 641002.</td>
                            <td><a href="tel:9952199935">9952199935</a></td>
                            <td><a href="mailto:ks@ejindia.com" class="text-nowrap">ks@ejindia.com</a></td>
                            <td class="text-nowrap">
                                <p>09:30 am to 1:30 pm</p>
                                <p>02:30 pm to 6:10 pm</p>
                            </td>
                        </tr>

                        <tr>
                            <td>Compliance Officer</td>
                            <td>Mr. K. Srinivasan </td>
                            <td>230, Thiruvenkatasamy Road, R.S. Puram, Coimbatore – 641002.</td>
                            <td><a href="tel:8056758444">8056758444</a></td>
                            <td><a href="mailto:pradeep.t@ejindia.com" class="text-nowrap">pradeep.t@ejindia.com</a>
                            </td>
                            <td class="text-nowrap">
                                <p>09:30 am to 1:30 pm</p>
                                <p>02:30 pm to 6:10 pm</p>
                            </td>
                        </tr>

                        <tr>
                            <td>Customer Care</td>
                            <td>Ms. S. Pavithra Devi </td>
                            <td>230, Thiruvenkatasamy Road, R.S. Puram, Coimbatore – 641002.</td>
                            <td><a href="tel:0422-4222200 Extn - 146">0422-4222200 Extn - 146</a></td>
                            <td><a href="mailto:billion.backoffice@ejindia.com"
                                    class="text-nowrap">billion.backoffice@ejindia.com</a></td>
                            <td class="text-nowrap">
                                <p>09:30 am to 1:30 pm</p>
                                <p>02:30 pm to 6:10 pm</p>
                            </td>
                        </tr>

                        <tr>
                            <td>Head of Customer Care</td>
                            <td>Mr. SRS. Rajesh Awasthte </td>
                            <td>230, Thiruvenkatasamy Road, R.S. Puram, Coimbatore – 641002.</td>
                            <td><a href="tel:9952199541">9952199541</a></td>
                            <td><a href="mailto:srsrajesh@ejindia.com" class="text-nowrap">srsrajesh@ejindia.com</a>
                            </td>
                            <td class="text-nowrap">
                                <p>09:30 am to 1:30 pm</p>
                                <p>02:30 pm to 6:10 pm</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>