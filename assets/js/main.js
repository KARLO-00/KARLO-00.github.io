$(document).ready(function () {
    $("#contactBtn").on("click", function () {
        $("html, body").animate({
            scrollTop: $("#contact").offset().top
        }, 600, function () {
            $("#contact").focus(); // focus on section
            // Or focus directly on first input:
            // $("#contactSection input:first").focus();
        });
    });
})