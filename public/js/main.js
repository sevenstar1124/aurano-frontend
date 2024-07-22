$(function(){
    $(".aur-sidebar-item-wrap").mCustomScrollbar({theme:"dark"});
    // $(".aur-main-content").mCustomScrollbar({theme:"dark"});
    $("body").on("click", ".aur-mobile-sidebar-show", function(){
        $(".aur-mobile-sidebar").css("left", "0px");
    })
    $("body").on("click", ".aur-mobile-sidebar-close", function(){
        $(".aur-mobile-sidebar").css("left", "-250px");
    })
    // $(".aur-main-agents-wrap").mCustomScrollbar({theme: "dark"});`
})