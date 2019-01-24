/* global $ */
/*
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(document).height() - $(window).height() < $(document).scrollTop() - 200) {
            $('#quote').fadeIn('fast');
        }
    });
});*/
$("#quote").textrotator({
    animation: "dissolve", //dissolve, fade, flip, flipUp, flipCube, flipCubeUp, spin.
    separator: "|",
    speed: 5000
});