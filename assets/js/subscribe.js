$(".subscribe-btn").click(function(){
    $.post("php/subscribe/querys.php?q=i", {email: $(".subscribe-inp").val()}, function(data){
        if(data){
            $(".subscribe-inp").css("display", "none");
            $(".subscribe-btn").css("display", "none");
            $(".suscribe-form").html("<div class='subscribe__success'><i class='fas fa-check'></i></div>");
        }
    });
});