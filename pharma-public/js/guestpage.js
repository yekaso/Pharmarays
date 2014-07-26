
$(".guest_button").live("click", function() {
    var clickedItem = $(this).attr('name');
    var serverurl = $("#serverurl").val();
    var pageurl = '';

    //   header("www.google.com");
    if (clickedItem == 'signin') {
        pageurl = "redirecttosignin";
    } else if (clickedItem == 'rays') {
        pageurl = "redirecttorays";
    } else if (clickedItem == 'onlinepharmacy') {
        pageurl = "reloadwelcomepage";
    } else if (clickedItem == 'communitypharmacy') {
        pageurl = "communitypharmacy";
    } else if (clickedItem == 'login') {
        pageurl = "redirecttologin";
    } else if (clickedItem == 'register') {
        pageurl = "redirecttoregister";
    }
    window.location.assign(serverurl + "sys_admin/user_authorization/" + pageurl);
});
