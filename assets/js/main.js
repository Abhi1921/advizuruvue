//For Tootlip

$("#jquery").intlTelInput({
 
});
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
// For choose btn file name
const actualBtn = document.getElementById('actual-btn');
const fileChosen = document.getElementById('file-chosen');
actualBtn.addEventListener('change', function () {
    fileChosen.textContent = this.files[0].name
})

$(document).ready(function () {
    // For Sidebar Filter toggle
    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });
    // For Range Slider
    $("#experience, #cost").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    });
    // For sidebar make mobile menu
    $('.btn_filter').click(function () {
        $('.mobile-filter').toggleClass('open');
    });
    $('.search-btn').click(function () {
        $('.search-bar input').toggleClass('search-flex');
    });
    // For service Slider
    $('.service_slider').slick({
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 1000,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1060,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    // For Project Slider
    $('.project_slider').slick({
        dots: true,
        vertical: true,
        autoplay: true,
        loop: true,
        arrows: false,
        speed: 1000,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    vertical: false,
                }
            }
        ]
    });
})