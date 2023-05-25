$(document).ready(function() {
    $("#search").keyup(function(e) {
        $("#card").html("");
        var search_query = $(this).val();
        if (search_query != "") {
            $.ajax({
                url: "includes/ReturnList.inc.php",
                type: "POST",
                data: {
                    search: search_query
                },
                success: function($data) {
                    $("#list").fadeIn('fast').html($data);
                    
                }
            });
        } else {
            $("#list").fadeOut();
        }
    });
});


