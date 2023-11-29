$(document).ready(function() {
    $("#topbar .user_menu>a").on("click", function(e) {
        e.preventDefault();
        $("#topbar .user_menu .dropdown").toggle();
    })
})
