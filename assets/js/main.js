$(document).ready(function () {
    slideFocus('#aboutBtn', '#about')
    slideFocus("#contactBtn", "#contact");
    slideFocus('#skillBtn', '#skills')
    slideFocus("#projectBtn", "#projects");
    slideFocus('#experienceBtn', '#experience')
})

function slideFocus(id, section) {
    $(id).on("click", function () {
        $("html, body").animate({
            scrollTop: $(section).offset().top - 200
        }, 600, function () {
            $(section).focus();

            // highlight the active link
            $(".nav-link").removeClass("active");
            $(id).addClass("active");
        });
    });
}