$(function() {
    $(".plusOne").bind("click", function() {
        $.ajax({
            type: "GET",
            data: "v="+$(this).attr("id"),
            url: "search.php",
            success: function(data) {
                // Whatever you want to do after the PHP Script returns.
            }
        });
    });
});