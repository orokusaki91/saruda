$(document).ready(function () {
    $("select").click(function () {
        $(".select-div").toggleClass("active");
    });
    $("select").blur(function () {
        $(".select-div").removeClass("active");
    });

    $(document).on('click', '.has-confirm', function (e) {
    	e.preventDefault(); 

    	if (confirm('Are you sure?')) {
    		$(this).closest('form').submit();
    	}
    });

    var tooltips = $('.image-tooltip span');
    window.onmousemove = function (e) {
        var x = (e.clientX + 20) + 'px',
        y = (e.clientY + 20) + 'px';
        for (var i = 0; i < tooltips.length; i++) {
            tooltips[i].style.top = y;
            tooltips[i].style.left = x;
        }
    };
});
