$(document).ready(function()
{
    var pharmacyid = $("#pharmacyid").val();
    var serverurl = $("#serverurl").val();
    var userid = $("#memberid").val();
    if (typeof pharmacyid !== 'undefined') {
        createSearchResult(pharmacyid, userid, serverurl);
    }

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
function createSearchResult(pharmacyid, user_id, serverurl) {
    // alert(serverurl+" server url>>>>" + pharmacyid+" pharmacy id and user id " + user_id);
    $.ajax({
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/createpharmacysearchresult",
        // We do not want IE to cache the result
        cache: false,
        // data: dataString
        data: {"pharmacyid": pharmacyid, "user_id": user_id}
    }).success(function(data, text) {
        //     alert(data);
    }).error(function(request, status, error) {
        //didn't complete the task
        //    alert(request + "------error writing search=======" + error);
    });
}
function do_modal(serverurl, pharmacy_id) {
    /* $("#dialog-modal").dialog({
     /* create: function(event, ui) {
     var widget = $(this).dialog("widget");
     $(".ui-dialog-titlebar-close span", widget).removeClass("ui-icon-closethick").addClass("ui-icon-minusthick")
     },*/
    /*    minHeight: 400,
     title: "Loading...",
     minWidth: 900,
     modal: true,
     maxHeight: 500,
     maxWidth: 1000,
     });*/
    alert('before redirecting...');
    $.ajax({/* post the values using AJAX */
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/redirect_to_displaypharm",
        // url: serverurl + "sys_admin/user_authorization/retrievepharmacy_byid",
        data: {"pharmacyid": pharmacy_id},
        async: false,
        cache: false,
        success: function(data) {
            alert("after redirecting....");
            /* alert(data);
             if (data.length > 0) {
             data = $.parseJSON(data);
             if (typeof data.id !== 'undefined' && data.id > 0) {
             $("#dialog-modal").dialog('option', 'title', data.name);
             var structure = "<table width='100%'><tr><td>Name:</td><td>" + data.name
             + "</td></tr><tr style='background-color:rgb(233,233,233)'><td>Telephone:</td><td>"
             + data.telephone + "</td></tr><tr><td>Location:</td><td>" + data.location
             + "</td></tr><tr style='background-color:rgb(233,233,233)'><td>Address:</td><td>"
             + data.address + "</tr><tr id='mapdetails'></tr></table>";
             $("#dialog-modal p").html(structure);
             $("#dialog-modal div.loadingmap").html("<img src='" + serverurl + "images/loading1.gif'>"
             + "<span >Loading Map...</span>");
             $(".loading").show();
             
             //     alert(posts)
             }
             
             }*/
        }
    });
}

function display_pharmacy(posts, serverurl) {
    var compharmtemplate = ' <a class="pharm-swatch" target="_top" href="#"><div>'
            + ' <div class="pharm_name"></div><br/>'
            + '<div class="contact_details pharm_phone"></div><div class="contact_details pharm_address"></div>'
            + '<div class="contact_details pharm_email"></div></div></a>';
    var horizontal_pos = parseInt($("#horizontal_pos").val());
    var vertical_pos = parseInt($("#vertical_pos").val());
    var pharmacy_id = '';
    //  alert('horizontal>>' + horizontal_pos + ' vertical>>>>' + vertical_pos);
    for (post in posts) {
        var $post = $(compharmtemplate).clone();
        pharmacy_id = posts[post].id;
        // if (data_type == 'news_title') {
        //      alert("before typeof");
        //  alert("this...." + posts[post].newsletter_description);
        $post.find('.pharm_name').html(word_trim(posts[post].name, 30, true));
        $post.attr('href', serverurl + 'sys_admin/user_authorization/redirect_to_displaypharm?pharmacyid=' + pharmacy_id);
        $post.find('.pharm_phone').html('<img src="' + serverurl + 'images/telephone.png"/>' + word_trim(posts[post].telephone, 40, true));
        $post.find('.pharm_address').html('<img src="' + serverurl + 'images/icon_home.gif"/>' + word_trim(posts[post].address, 40, true));
        $post.find('.pharm_email').html('<img src="' + serverurl + 'images/icon_mail.gif"/>info@pharmarays.com');
        $post.attr('style', "position:absolute; top: " + vertical_pos + "px; left: " + horizontal_pos + "px;");
        //  news_reference = serverurl + 'sys_admin/user_authorization/newslist?article_id=' + newsletter_id + '&article_type=news_title';

        $post.attr('id', pharmacy_id);
        $(".commpharm:last").append($post);
        if (horizontal_pos >= 900) {
            vertical_pos += 130;
            horizontal_pos = 0;
        } else {
            horizontal_pos += 300;
        }
    }

}
function display_map(serverurl) {
    var address = "7B raimi marsha,surulere,lagos,nigeria";
    $.ajax({/* post the values using AJAX */
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/retrievemapdetail",
        data: {"address": address},
        async: false,
        cache: false,
        success: function(data) {
            alert("retrieving map info" + data);
            if (data.length > 0) {
                //  alert('here' + (typeof data[0]));
                if (typeof data[0] !== 'undefined' && data.length > 2) {
                    data = $.parseJSON(data);
                    //    alert('after parse ' + (typeof data[0]));
                    //   alert(data.js);
                    //  alert(data.html);
                    $("#dialog-modal div#mapframe").attr('style', 'display:block');
                    //    alert('the type of js is >>>'+typeof data.js + ' and the type of html is >>>> '+ typeof data.html);
                    $("#dialog-modal div#mapframe").html(data.html + 'kachi\n\t\t is a goat');
                    alert('done');
                    //      alert(posts);
                    //     posts = $.parseJSON(posts);
                    /*   $("#dialog-modal iframe#mapframe").attr('style','display:block');
                     //  var modal_window =  $("#dialog-modal iframe#mapframe");
                     modal_window = document.getElementById("mapframe");
                     alert(modal_window);
                     modal_window.contentWindow.document.open();
                     modal_window.contentWindow.document.write(data.js + data.html);
                     //     modal_window.contentWindow.document.write(data.html);
                     modal_window.contentWindow.document.close();
                     //   $("head").append(data.js);
                     alert(data.html);
                     */
                    //makes loading button appear
                    //    $("#dialog-modal div#mapdetails").html(data.html);
                    //             alert(posts)
                } else {
                    alert('wrong data');
                }

            } else {
                alert('no data....');
            }
        }
    });
}

$("#ias_trigger").hide();
$(window).scroll(function() { /* window on scroll run the function using jquery and ajax */
    var WindowHeight = $(window).height(); /* get the window height */
    if ($(window).scrollTop() + 1 >= $(document).height() - WindowHeight) {
        var empty_data = $("#empty_data").val();
        if (empty_data == 'false') {
            $("#ias_trigger").show();
        }
    }
});
$("#select_by_location").live("click", function() {
    alert("hello");
    var serverurl = $("#serverurl").val();
    var location_id = $(this).attr("value");
    $.blockUI({message: '<h5><img src="' + $("#serverurl").val() + 'images/loading_icon.gif" /> Please wait...</h5>'});
    $("#horizontal_pos").val('0');
    $("#vertical_pos").val('0');
    var limit = 20;
    $.ajax({/* post the values using AJAX */
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/retrievepharmacy_bylocation",
        data: {"locationid": location_id, "limit": limit},
        async: false,
        cache: false,
        success: function(data) {
            if (data.length > 0) {
                data = $.parseJSON(data);
                if (typeof data[0] !== 'undefined' && data.length > 0) {

                    var posts = data;
                    //      alert(posts);
                    //     posts = $.parseJSON(posts);
                    $(".commpharm").html('');
                    //makes loading button appear
                    $("#empty_data").val('false');
                    display_pharmacy(posts, serverurl);
                    //             alert(posts)
                } else {
                    $(".commpharm").html('<div><img src="' + serverurl + 'images/nosearch1.jpg"/></div>');
                }

            }
        }
    });
    setTimeout($.unblockUI, 0);
});
$("#country_select").live("onchange",function(){
    alert("Country clicked");
});
/*  $(".pharm-swatch").live("click", function(e) {
 var serverurl = $("#serverurl").val();
 var pharmacy_id = $(this).attr("id");
 do_modal(serverurl, pharmacy_id);
 display_map(serverurl);
 $("#dialog-modal div.loadingmap").html('');
 });*/
$(".ias_trigger").live("click", function() {
    var serverurl = $("#serverurl").val();
    var loading_icon = $("#loader img");
    var loading_button = $("#ias_trigger");
    loading_button.hide();
    loading_icon.show();
    var swatch_size = $('.pharm-swatch').size();
    var remainder = swatch_size % 4;
    var horizontal_pos = remainder * 300;
    var location_id = $("#location_select").val();
    $("#horizontal_pos").val(horizontal_pos);
    var vertical_pos = ((swatch_size - remainder) / 4) * 130;
    $("#vertical_pos").val(vertical_pos);
    var pharmacyid = $(".pharm-swatch:last").attr("id");
    var limit = 20;
    $.ajax({/* post the values using AJAX */
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/retrievepharmacy",
        data: {"pharmacyid": pharmacyid, "limit": limit, "locationid": location_id},
        async: false,
        cache: false,
        success: function(data) {
            if (data.length > 0) {
                if (typeof data[0] !== 'undefined' && data.length > 2) {
                    var posts = data;
                    posts = $.parseJSON(posts);
                    display_pharmacy(posts, serverurl);
                    //     alert(posts)
                } else {
                    $("#empty_data").val('true');
                }

            }
        }
    });
    loading_icon.hide();
});
var serverurl = $("#serverurl").val();
$('#inputBox').val('');
$("#inputBox").autoSuggest({
    ajaxFilePath: serverurl + "sys_admin/user_authorization/autosuggest_pharmacy",
    ajaxParams: "dummydata=dummyData",
    autoFill: "false",
    iwidth: "auto",
    opacity: "0.9",
    ilimit: "10",
    idHolder: "id-holder",
    match: "contains"
});
(function($) {
    $.fn.extend({
        autoSuggest: function(options) {


            var defaults = {
                ajaxFilePath: "",
                ajaxParams: "",
                autoFill: false,
                iwidth: "auto",
                opacity: "0.9",
                ilimit: "10",
                idHolder: "",
                match: "starts",
                location: "0"
            };
            options = $.extend(defaults, options);
            var serverurl = $("#serverurl").val();
            var ajaxFilePath = options.ajaxFilePath;
            var ajaxParams = options.ajaxParams;
            var autoFill = options.autoFill;
            var width = options.iwidth;
            var opacity = options.opacity;
            var limit = options.ilimit;
            var idHolder = options.idHolder;
            var match = options.match;
            return this.each(function() {
                var obj = $(this);
                obj.keyup(function(event) {
                    var location_id = $("#location_select").val();
                    var p = obj;
                    var offset = p.offset();
                    var keyword = obj.val();
                    if (keyword.length)
                    {
                        if (event.keyCode != 40 && event.keyCode != 38 && event.keyCode != 13)
                        {
                            if (ajaxFilePath != "")
                            {
                                $.ajax({
                                    type: "POST",
                                    url: ajaxFilePath,
                                    data: "data=" + keyword + "&location=" + location_id + "&limit=" + limit + "&match=" + match + "&" + ajaxParams + "&getId=1",
                                    success: function(responce) {
                                        if (responce != 0)
                                        {
                                            var vals = responce.split("|");
                                            if (vals.length)
                                            {
                                                optionList = "<ul class=\"list\">";
                                                for (i = 0; i < vals.length; i++)
                                                {
                                                    valuenid = vals[i].split("-");
                                                    myText = valuenid[1];
                                                    myId = valuenid[0];
                                                    // trim string to remove extra white spaces around the text
                                                    myText = myText.replace(/^\s+|\s+$/g, "");
                                                    if (match == "starts")
                                                        // check if string starts with given characters
                                                        myText = myText.replace(myText.match("^" + keyword), '<span class="highlighted">' + keyword + '</span>');
                                                    else if (match == "ends")
                                                        //alert(myText.replace(/(.*)keyword/, "<b>hi</b>"));
                                                        myText = myText.replace(new RegExp(keyword + '$'), '<span class="highlighted">' + keyword + '</span>');
                                                    else if (match == "contains")
                                                        myText = myText.replace(new RegExp(keyword, "i"), '<span class="highlighted">' + keyword + '</span>');
                                                    if (idHolder != "" && idHolder != null)
                                                        optionList += '<li><a href=\"' + serverurl + 'sys_admin/user_authorization/redirect_to_displaypharm?pharmacyid=' + myId + "\" id=\"" + myId + "\">" + myText + "</a></li>";
                                                    else
                                                        optionList += "<li><a href=\"javascript:void(0);\">" + myText + "</a></li>";
                                                }
                                                optionList += "</ul>";
                                            }
                                            if ($(".ajax_response").html() == null)
                                            {
                                                var id = obj.attr("id");
                                                // initialization
                                                $("<div class='ajax_response'></div>").insertAfter(obj)
                                                        .css("left", parseInt($("#" + id).offset().left))
                                                        .css("top", parseInt(offset.top + obj.height() + 3))
                                                        .css("opacity", opacity)
                                                        .html(optionList).css("display", "block");
                                                // set responce div width
                                                if (width == "auto")
                                                    $(".ajax_response").css("width", parseInt(obj.width()) + 2);
                                                else
                                                    $(".ajax_response").css("width", parseInt(width + 2));
                                            }
                                            else
                                                $(".ajax_response").html(optionList).css("display", "block");
                                        }
                                        else
                                            $(".list").css("display", "none");
                                    }
                                });
                            }
                            else
                                alert("Ajax file path not provided");
                        }
                        else
                        {
                            $(".list li .selected").removeClass("selected");
                            switch (event.keyCode)
                            {
                                case 40:
                                    {
                                        found = 0;
                                        $(".list li").each(function() {
                                            if ($(this).attr("class") == "selected")
                                                found = 1;
                                        });
                                        if (found == 1)
                                        {
                                            var sel = $(".list li[class='selected']");
                                            // check if his is a last element in the list
                                            // if so then add selected class to the first element in the list
                                            if (sel.next().text() == "")
                                                $(".list li:first").addClass("selected");
                                            else
                                                sel.next().addClass("selected");
                                            // remove class selected from previous item
                                            sel.removeClass("selected");
                                        }
                                        else
                                            $(".list li:first").addClass("selected");
                                    }
                                    break;
                                case 38:
                                    {
                                        found = 0;
                                        $(".list li").each(function() {
                                            if ($(this).attr("class") == "selected")
                                                found = 1;
                                        });
                                        if (found == 1)
                                        {
                                            var sel = $(".list li[class='selected']");
                                            // check if his is a last element in the list
                                            // if so then add selected class to the first element in the list
                                            if (sel.prev().text() == "")
                                                $(".list li:last").addClass("selected");
                                            else
                                                sel.prev().addClass("selected");
                                            // remove class selected from previous item
                                            sel.removeClass("selected");
                                        }
                                        else
                                            $(".list li:last").addClass("selected");
                                    }
                                    break;
                                case 13:
                                    str = $(".list li[class='selected']").text();
                                    obj.val(str);
                                    // store id of the selected option
                                    if (idHolder != "" && idHolder != null)
                                        $("#" + idHolder).val($(".list li[class='selected'] a").attr("id"));
                                    $(".list").fadeOut("fast");
                                    break;
                            }
// if autoFill option is true then fill selected value in textbox
                            if (autoFill)
                            {
                                str = $(".list li[class='selected']").text();
                                obj.val(str);
                            }
                        }
                    }
                    else
                        // if there is no character in the text field then remove the suggestion box 
                        $(".list").fadeOut("fast");
                });
                // prevent form submission on enter key press
                obj.keypress(function(event) {
                    if (event.keyCode == "13")
                        return false;
                });
                $(".list li").live("mouseover", function() {
                    $(".list li[class='selected']").removeClass("selected");
                    $(this).addClass("selected");
                    // if autoFill option is true then fill selected value in textbox
                    if (autoFill)
                    {
                        str = $(".list li[class='selected']").text();
                        obj.val(str);
                    }
                });
                /* $(".list li").live("click", function() {
                 str = $(".list li[class='selected']").text();
                 obj.val(str);
                 var article_id = $("li[class='selected'] a").attr("id");
                 //    alert(article_id);
                 do_modal(serverurl, article_id);
                 // store id of the selected option
                 if (idHolder != "" && idHolder != null)
                 $("#" + idHolder).val(article_id);
                 $(".list").fadeOut("fast");
                 });*/
                $(document).click(function() {
                    if ($(".list").css("display") == "block")
                        $(".list").fadeOut("fast");
                });
                $(document).keyup(function(event) {
                    if (event.keyCode == 9)
                    {
                        str = $(".list li[class='selected']").text();
                        obj.val(str);
                        // store id of the selected option
                        if (idHolder != "" && idHolder != null)
                            $("#" + idHolder).val($(".list li[class='selected'] a").attr("id"));
                        $(".list").fadeOut("fast");
                    }
                });
            });
        }
    });
})(jQuery);