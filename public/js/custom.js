$("#login").hover(function () {
    $(this).css("color", "white");
    $(this).css("background-color", "#ed6966");
    $("#signup").css("background-color", "white");
    $("#signup").css("color", "black");
    
}, function () {
    $(this).css("color", "black");
    $(this).css("background-color", "white");
    $("#signup").css("background-color", "#ed6966");
    $("#signup").css("color", "white");
}   
);