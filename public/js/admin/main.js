$(document).ready(function () {
    $("select").click(function () {
        $(".select-div").toggleClass("active");
    });
    $("select").blur(function () {
        $(".select-div").removeClass("active");
    });
});
