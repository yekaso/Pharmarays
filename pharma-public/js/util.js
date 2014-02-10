/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $("#forum_list").treeview({
        animated: "fast",
        collapsed: true,
        toggle: function() {
            window.console && console.log("%o was toggled", this);
        }
    });
});
function word_trim(str, maxlen, ellipsis) {
//    alert("ellipsis is " + ellipsis);
    if (str.length > maxlen) {
        str = str.substring(0, str.substring(0, maxlen).lastIndexOf(' '));
        if (ellipsis) {
            str += '&hellip;';
        }
    }
    return str;
}
function createArticleSearchResult(articleid, user_id, serverurl) {
  //  alert(serverurl + " server url>>>>" + articleid + " pharmacy id and user id " + user_id);
    var userid = 0;
    if (typeof user_id == "undefined") {
        userid = 0;
    } else {
        userid = user_id;
    }
    $.ajax({
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/createarticlesearchresult",
        data: {"articleid": articleid, "userid": userid},
        async: false,
        cache: false,
        success: function(data) {
        //    alert(data);
        }
    });

}
function do_modal(serverurl, article_id) {
    $("#dialog-modal").dialog({
        /* create: function(event, ui) {
         var widget = $(this).dialog("widget");
         $(".ui-dialog-titlebar-close span", widget).removeClass("ui-icon-closethick").addClass("ui-icon-minusthick")
         },*/
        minHeight: 400,
        title: "Loading...",
        minWidth: 900,
        modal: true,
        maxHeight: 500,
        maxWidth: 1000,
    });
    var userid = $("#memberid").val();
    $.ajax({/* post the values using AJAX */
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/retrievearticle",
        data: {"article_id": article_id},
        async: false,
        cache: false,
        success: function(data) {
            // alert(data);
            if (data.length > 0) {
                data = $.parseJSON(data);
                if (typeof data.id !== 'undefined' && data.id > 0) {
                    $("#dialog-modal").dialog('option', 'title', data.title);
                    $("#dialog-modal p").html(data.description);
                    $("#dialog-modal .store-label").html(data.author_name);
                    $("#dialog-modal .stats-block").html(data.time_created);
                    //     alert(posts)
                }

            }
            createArticleSearchResult(article_id, userid, serverurl);
        }
    });
}
