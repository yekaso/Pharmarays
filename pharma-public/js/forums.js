//Manages the treeview section of the forum topics


function display_forum_topics(topicid, start, desiredPosts) {
    $("#start_comment").val('10');
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
    var commentsummarytemplate = '<a class="comment" href="#" target="_top"></a>';
    $.ajax({
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/retrievetopic",
        // We do not want IE to cache the result
        cache: false,
        // data: dataString
        data: {"start": start, "desiredPosts": desiredPosts, "topic_id": topicid, "limit": 15}
    }).success(function(data, text) {
//  alert(data);
        if (data.length > 0) {
            data = $.parseJSON(data);
            $('#topicid').val(topicid);
            $('#searchresult h3.heading').html(data.name);
            $('#formSep div.comment-description').html(data.description);
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
        }
        else {
        }
        setTimeout($.unblockUI, 0);
    }).error(function(request, status, error) {
        $("#widget").prepend(alerts.requestFailure);
    });
}

$(function() {
    $('#comment').val('');
    //resets the search text box after page reload
    $('#inputBox').val('');

    var memberid = $("#memberid").val();
    var serverurl = $("#serverurl").val();
    //  alert(serverurl);
    var membertypeimage = $("#membertype").val();
    var membername = $("#membername").val();
    var membertypeid = $("#membertypeid").val();
    $("#start_comment").val('10');
    $("#topic_id").val('1');
    // var start = parseInt($("#start_comment").val());
    var desiredPosts = 10;
    $(".forum_topic_title").live("click", function() {
        $.blockUI({message: '<h5><img src="' + $("#serverurl").val() + 'images/loading_icon.gif" /> Please wait...</h5>'});
        var selectedid = $(this).attr('id');
        display_forum_topics(selectedid, 0, 10);
    });

    // either null or contains the mustache template
    var newtemplate = '<div class="row-fluid"><div class="span12"><div class="editor-label"><img class="commentimg"/>'
            + '<div><div id="comment_username">'
            + '</div><br/><div id="user_comment">'
            + '</div><div class="timestamp"></div></div></div></div></div>';

    var widget = $('#widget'),
            // Element to load the posts
            content = widget.find('.comment_section'),
            // the more button
            more = widget.find('.more');
    // the post counter
    //   counter = widget.find('.badge');

    // Create alerts elements (Display Success or Failure)
    var alerts = {
        requestEmpty: $('<div class="alert alert-info">No more older comments</div>'),
        requestFailure: $('<div class="alert alert-error">Could not get the data. Try again!</div>')
    }
    var progressElement = $('<div class="progress" style="margin-bottom:0"><div class="bar"></div></div>');
    var progressBar = progressElement.find('.bar');

    // function that handle posts
    var postHandler = function(posts) {
        // Set the progress bar to 100%
        progressBar.css('width', '100%');
        // Delay the normal more button to come back for a better effect
        window.setTimeout(function() {
            more.html('More <span class="caret"></span>')
        }, 500);
        // insert childrens at the end of the content element
        for (post in posts) {
            // Clone the element
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
        // Scroll to the first element loaded
        content.animate({
            scrollTop: $('#post-' + posts[0].ID).offset().top + (content.scrollTop() - content.offset().top)
        }, 200);
    }

    // place the initial posts in the page
    //   postHandler(initialPosts);

    // add the click event to the more button
    more.live('click', function() {
        // Set the progress bar to 0%
        start = parseInt($("#start_comment").val());
        // alert('more clicked' + start);
        more = widget.find('.more');
        var topicid = $("#topicid").val();
        progressBar.css('width', '0%');
        // remove the more button innerHTML and insert the progress bar
        more.empty().append(progressElement);
        // AJAX REQUEST
        //dataString = '{"start":' + start + ',"desiredPosts":' + desiredPosts + '}';
        dataString = '&start=' + start + '&desiredPosts=' + desiredPosts + '&topic_id=' + topicid + '&result=';
        // alert(dataString);
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/retrievetopiccomment",
            // We do not want IE to cache the result
            cache: false,
            // data: dataString
            data: {"start": start, "desiredPosts": desiredPosts, "topic_id": topicid}
        }).success(function(data, text) {
            // parse the response (typeof data == String)
            //  alert("success" + data);
            data = $.parseJSON(data);
            //  $.each(data,function(i,item){
            //     alert('i ......'+i);
            //     alert('item ....'+item.comment);
            //  });
            if (data.length > 0) {
                // Update the total number of items
                //   alert("data > 0");
                start += data.length;
                $("#start_comment").val(start);
                // Update the counter
                //   counter.html(start);
                // load items on the page
                postHandler(data);
            }
            else {
                //        alert("data < 0");
                $alert = alerts.requestEmpty;
                // insert the empty message
                widget.prepend($alert);
                // Set the progress bar to 100%
                progressBar.css('width', '100%');
                // Remove the more button
                window.setTimeout(function() {
                    more.remove()
                }, 500);
                // remove the empty message after 4 seconds
                window.setTimeout(function() {
                    $alert.remove()
                }, 4000);
            }
        }).error(function(request, status, error) {
            $alert = alerts.requestFailure;
            // insert the failure message
            widget.prepend($alert);
            // Set the progress bar to 100%
            progressBar.css('width', '100%');
            // Delay the normal more button to come back for a better effect
            window.setTimeout(function() {
                more.html('More <span class="caret"></span>')
            }, 500);
        });
    });
    $(".submit").on('click', function() {
        var memberid = $("#memberid").val();
        var topicid = $("#topicid").val();
        var comment = $("#comment").val();
        var commenthtml = "<div class='row-fluid'><div class='span12'><div class='editor-label'><img src='" + serverurl + "images/" + membertypeimage + ".png' /><div><div id='comment_username'>Pharmacist " + membername + "</div><br/><div id='user_comment'>" + comment + "</div></div></div></div></div>"

        var newtemplate = '<div class="row-fluid"><div class="span12"><div class="editor-label"><img class="commentimg"/>'
                + '<div><div id="comment_username">'
                + '</div><br/><div id="user_comment">'
                + '</div><div class="timestamp"></div></div></div></div></div>';

        var commentsummarytemplate = '<a class="comment" href="#" target="_top"></a>';

        //   var dataString = '&memberid=' + memberid + '&drugid=' + topicid + '&comment=' + comment + '&membertypeid=' + membertypeid + '&commenthtml=' + commenthtml;
        var lastcomment_id = $("#lastcommentid").val();
        if (comment == '')
        {
            alert('Please Give Valid Comment');
        }
        else
        {
            $(".flash").show();
            $(".submit").hide();
            $.ajax({
                type: "POST",
                url: serverurl + "sys_admin/user_authorization/" + $(this).attr('name'),
                data: {"memberid": memberid, "topic_id": topicid, "comment": comment, "membertypeid": membertypeid, "lastcomment_id": lastcomment_id},
                cache: false,
                success: function(data) {
                    //  alert(data);
                    if (data.length > 0) {
                        data = $.parseJSON(data);
                        var posts = data.comments;
                        //    alert(posts);
                        var serverurl = $("#serverurl").val();
                        posts = $.parseJSON(posts);
                        var lastcomment_id = '';
                        for (post in posts) {
                            var $post = $(newtemplate).clone();
                            //  alert(posts);
                            $post.attr('id', 'post-' + posts[post].id);
                            $post.find('.commentimg').attr('src', serverurl + 'images/' + posts[post].membertypeimage + '.png');
                            $post.find('#comment_username').html('Pharmacist ' + posts[post].membername);
                            $post.find('#user_comment').html(posts[post].comment);
                            $post.find('.timestamp').html(posts[post].time_created);//  alert(posts);
                            lastcomment_id = posts[post].id;
                            $("div.comment_section").append($post);
                        }
                        //updates last comment id
                        $("#lastcommentid").val(lastcomment_id);
                        //    alert('adding comment count');
                        //   var commenthtml = dataString.substr(dataString.indexOf("<div class='row-fluid'>", 1), (dataString.length - dataString.indexOf("<div class='row-fluid'>", 1)));
                        //  $("div.comment_section").append(commenthtml);
                        var posts_grp = data.comment_counts;
                        //      alert(posts_grp);
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
                        //      alert('done!!!');
                        $("div.comment_section div:last").fadeIn("slow");
                        $('#comment').val('');
                        $("#comment").focus();

                        /*    setTimeout(function() {
                         $(".flash").hide();
                         $(".submit").show();
                         }, 3000);
                         */
                        $(".flash").hide();
                    }
                    //   $(".submit").show();

                }
            });
        }
        return false;
    });

    $('.comment-input-field').on("propertychange input textInput", function() {
        var charLimit = 10000;
        var remaining = charLimit - $(this).val().length;

        if (remaining === charLimit) {
            // No characters entered so disable the button
            $(".submit").hide();

        } else if (remaining < 0) {
            // remaining = 0; // Prevents the counter going into negative numbers
            $(".submit").hide();
        } else {
            $(".submit").show();
        }
    });
    var serverurl = $("#serverurl").val();
    $("#forum_list").treeview({
        animated: "fast",
        collapsed: true,
        url: serverurl + "sys_admin/user_authorization/retrieveforum",
        toggle: function() {
            window.console && console.log("%o was toggled", this);
        }
    });





    $('#inputBox').val('');
    $("#inputBox").autoSuggest({
        ajaxFilePath: serverurl + "sys_admin/user_authorization/autosuggest_forumtopics",
        ajaxParams: "dummydata=dummyData",
        autoFill: "false",
        iwidth: "auto",
        opacity: "0.9",
        ilimit: "15",
        idHolder: "id-holder",
        match: "contains"
    });

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
                                    data: "data=" + keyword + "&limit=" + limit + "&match=" + match + "&" + ajaxParams + "&getId=1",
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
                    display_forum_topics(selectedid, 0, 10);
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