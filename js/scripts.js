
var navBtn = document.getElementById('navbar-toggler');

navBtn.addEventListener('click', function() {
        $('.form-ctr').toggleClass("dimmed");
        $('.ctr').toggleClass("darken");
        $('.navbar-collapse').toggleClass("bg");
});
    console.log();