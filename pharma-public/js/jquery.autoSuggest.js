/*
 * PHP Ajax AutoSuggest Jquery Plugin
 * http://www.amitpatil.me/
 *
 * @version
 * 1.0 (Dec 20 2010)
 * 
 * @copyright
 * Copyright (C) 2010-2011 
 *
 * @Auther
 * Amit Patil (amitpatil321@gmail.com)
 * Maharashtra (India) m
 *
 * @license
 * This file is part of PHP Ajax AutoSuggest Jquery Plugin.
 * 
 * PHP Ajax AutoSuggest Jquery Plugin is freeware script. you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * PHP Ajax AutoSuggest Jquery Plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this script.  If not, see <http://www.gnu.org/copyleft/lesser.html>.
 */
function retrievedrug(drugid, start, desiredPosts) {
    //   alert($("#start_comment").val());
    $("#start_comment").val('10');
    // alert($("#start_comment").val());
    var serverurl = $("#serverurl").val();
    var alerts = {
        requestFailure: $('<div class="alert alert-error">Could not get the data. Try again!</div>')
    }
    var newtemplate = '<div class="row-fluid"><div class="span12"><div class="editor-label"><img class="commentimg"/>'
            + '<div><div id="comment_username">'
            + '</div><br/><div id="user_comment">'
            + '</div><div class="timestamp"></div></div></div></div></div>';
    var morebuttontemplate = '<button class="more btn btn-block">'
            + ' More <span class="caret"></span>'
            + '</button>';
    var newstemplate = '<div class="eventslist">'
            + '<ul><li><a class="article_title news_title" target="_top" href="#"></a>'
            + '<div class="comment-description"></div></li></ul></div>';
    var pharmacytemplate = '<li><a id="" href="#" ><?php echo $name ?></a></li>';
    var newsletterheading = ' <div class="alert alert-info alert-login heading">Related articles and journals...<br/></div>';
    var newsheading = ' <div class="alert alert-info alert-login heading">Related news and events...<br/></div>';
    var commentsummarytemplate = '<a class="comment" href="#" target="_top"></a>';
    var user_id = $("#memberid").val();
    $(document).ajaxStop();
    $.ajax({
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/retrievedrug",
        // We do not want IE to cache the result
        cache: false,
        // data: dataString
        data: {"start": start, "desiredPosts": desiredPosts, "drug_id": drugid, "limit": 15, "user_id": user_id}
    }).success(function(data, text) {
        //alert(data);
        if (data.length > 0) {
            data = $.parseJSON(data);
            $('#drugid').val(drugid);
            $('#searchresult h3.heading').html(data.drug_name);
            $('#searchresult h6').html(' By <a href="#">' + data.drug_brandname+'</a>');
            $('#formSep div.comment-description').html(data.drug_description);
        //    $("#relateditems #generic").val(data.category_id);
            $("#relateditems #brandname").val(data.brandname_id);
            var count = data.comment_count;
            //    alert(count);
            $('div#widget').html('');
            if (count > 10) {
                $('div#widget').html(morebuttontemplate);
            }
            //  alert('wait here');
            var posts = data.comments;
            var serverurl = $("#serverurl").val();
            posts = $.parseJSON(posts);
            $("div.comment_section").html('');
            for (post in posts) {
                var $post = $(newtemplate).clone();
                //  alert(posts);
                $post.attr('id', 'post-' + posts[post].id);
                $post.find('.commentimg').attr('src', serverurl + 'images/' + posts[post].membertypeimage + '.png');
                $post.find('#comment_username').html('Pharmacist ' + posts[post].membername);
                $post.find('#user_comment').html(posts[post].comment);
                $post.find('.timestamp').html(posts[post].time_created);
                //  alert(posts);
                $("div.comment_section").prepend($post);
            }
            var posts_grp = data.comment_counts;
            //          alert(posts_grp);
            posts_grp = $.parseJSON(posts_grp);
            $("div#comments_summary").html('');
            //    alert('empty count');
            for (post in posts_grp) {
                var $post = $(commentsummarytemplate).clone();
                //  alert(posts);
                $post.attr('id', posts_grp[post].member_type_id);
                $post.html(posts_grp[post].comment_count + ' ' + posts_grp[post].membertype_name + 's\'');
                //  alert(posts);
                $("div#comments_summary").append($post);
            }
            var news = data.related_news;
            //   alert(news+ ' before parsing');
            news = $.parseJSON(news);
            // /     alert(news+ ' after parsing');
            $("#articlesandjournal").html(newsheading);
            if (typeof news[0] !== 'undefined' && news.length > 0) {
                for (new_news in news) {
                    var $post = $(newstemplate).clone();
                    //  alert(posts);
                    $post.attr('id', 'post-' + news[new_news].id);
                    $post.find('.comment-description').html(word_trim(news[new_news].news_description, 147, true));
                    $post.find('.article_title').attr('id', news[new_news].id);
                    $post.find('.news_title').html(word_trim(news[new_news].news_title, 42, true));
                    //  alert(posts);
                    $("#articlesandjournal").append($post);
                }
            } else {
                $("#articlesandjournal").append('<div class="eventslist"><ul> <li><a class="news_title" target="_top" href="#">No related news</a></li></ul></div>');
            }



            var pharmacy = data.related_pharmacy;
            //    alert(newsletter+' before parsing');
            pharmacy = $.parseJSON(pharmacy);
            //   alert(newsletter+' newsletter after parsing');
            $("#pharmacy ul").html('');
            // alert(pharmacy.length);
            if (typeof pharmacy[0] !== 'undefined' && pharmacy.length > 0) {
                for (new_pharmacy in pharmacy) {
                    var $post = $(pharmacytemplate).clone();
                    //  alert(posts);
                    $post.find('a').attr('id', pharmacy[new_pharmacy].id_pharmacy);
                    $post.find('a').attr('href', serverurl + 'sys_admin/user_authorization/redirect_to_displaypharm?pharmacyid=' + pharmacy[new_pharmacy].id_pharmacy);
                    $post.find('a').html(word_trim(pharmacy[new_pharmacy].name, 30, true));
                    //  alert(posts);
                    $("#pharmacy ul").append($post);
                }
            } else {
                $("#pharmacy ul").append('<li><a  target="_top" href="#">Not available in any pharmacy</a></li>');
            }
            $('input[class=related_items]').each(function() {
                $(this).attr("checked", false);
            });
            $("#related_drugs ul").html('<li><a  target="_top" href="#">No criteria selected yet</a></li>');
        }
        else {
        }
        setTimeout($.unblockUI, 0);
        createSearchResult(drugid, user_id, serverurl);
    }).error(function(request, status, error) {
        $("#widget").prepend(alerts.requestFailure);
    });
}
function createSearchResult(drugid, user_id, serverurl) {
  //  alert(drugid + " drug id and user id " + user_id);
    $.ajax({
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/createdrugsearchresult",
        // We do not want IE to cache the result
        cache: false,
        // data: dataString
        data: {"drug_id": drugid, "user_id": user_id}
    }).success(function(data, text) {
    //         alert(data+ "Done!!!");
    }).error(function(request, status, error) {
        //didn't complete the task
        //     alert(request + "------error writing search=======" + error);
    });
}
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
                match: "starts"
            };
            options = $.extend(defaults, options);
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
                                    data: "data=" + keyword + "&limit=" + limit + "&match=" + match + "&" + ajaxParams + "&getId=1" + "&drug_id=" + $("#drugid").val(),
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
                                                        optionList += "<li><a href=\"javascript:void(0);\" id=\"" + myId + "\">" + myText + "</a></li>";
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
                $(".list li").live("click", function() {
                    $.blockUI({message: '<h5><img src="' + $("#serverurl").val() + 'images/loading_icon.gif" /> Please wait...</h5>'});
                    str = $(".list li[class='selected']").text();
                    obj.val(str);
                    var selectedid = $("li[class='selected'] a").attr("id");
                    retrievedrug(selectedid, 0, 10);
                    // store id of the selected option
                    if (idHolder != "" && idHolder != null)
                        $("#" + idHolder).val(selectedid);
                    $(".list").fadeOut("fast");
                });
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