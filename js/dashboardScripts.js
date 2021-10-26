$(document).ready(function(){
    $('#minimizeSidebar').on('click', function(){
        $('#sidebar').toggleClass('stretch');
        $('#logo-normal').toggleClass('hidden');
        $('#toggle-close').toggleClass('off');
        $('#toggle-open').toggleClass('on');
    });
    $('#sidebar').hover(function(){
        $('#sidebar').toggleClass('stretch');
    })
});

$(document).ready(function(){

});