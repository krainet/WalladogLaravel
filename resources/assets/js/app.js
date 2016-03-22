/**
 * Created by hadock on 21/03/16.
 */

$(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
});