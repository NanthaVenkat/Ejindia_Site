jQuery(document).ready(function ($) {

    $('[data-filter]').on('click', function () {

        const filter = $(this).data('filter');

        $('[data-job]').hide();
        $('[data-job="' + filter + '"]').show();

        $('[data-filter]').removeClass('bg-[#F78D1F]');
        $('[data-filter]').addClass('bg-[#6868686B]');
        $('[data-filter]').addClass('text-white');
        $(this).addClass('bg-[#F78D1F]');
        $(this).removeClass('text-white');

        if (filter === 'all-jobs') {
            $('[data-job]').show();
            return;
        }

    });

    if (typeof Swiper !== 'undefined' && $('.heroSwiper').length) {
        new Swiper('.heroSwiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            observer: true,
            observeParents: true,
            slidesPerView: 1,
            spaceBetween: 0
        });
    }

    // Career submit button
    $(document).on('click', '.career-form-submit', function (e) {
        e.preventDefault();
        $('#wpforms-submit-1441').click();
    });

    // Career page form number input 10 Digit restriction
    document.addEventListener('DOMContentLoaded', function () {
        const careerFormNumberInput = document.getElementById('wpforms-1441-field_4');
        careerFormNumberInput.addEventListener('input', function () {
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        })
    })

});