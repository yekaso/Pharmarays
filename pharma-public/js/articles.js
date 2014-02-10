function createSearchResult(drugid, user_id, serverurl) {
    alert(drugid + " drug id and user id " + user_id);
    $.ajax({
        type: "POST",
        url: serverurl + "sys_admin/user_authorization/createarticlesearchresult",
        // We do not want IE to cache the result
        cache: false,
        // data: dataString
        data: {"drug_id": drugid, "user_id": user_id}
    }).success(function(data, text) {
        //     alert(data);
    }).error(function(request, status, error) {
        //didn't complete the task
        //     alert(request + "------error writing search=======" + error);
    });
}
$(function() {
    var newlettertemplate = '<div class="row-fluid news_title" id="">'
            + '<div class="span12">'
            + '<div class="editor-label">'
            + '<img style="width:10%; height:10%" src="<?php echo base_url() ?>images/<?php echo $default_image_name; ?>" />'
            + '<div>'
            + '<a class="article_title" href="#" onclick="return false;"></a>'
            + '<br/><div id="user_comment"></div>'
            + '<div class="timestamp"></div></div></div></div></div>';


    $(".article_title").live("click", function(e) {
        var article_id = $(this).attr("id");
        do_modal(serverurl, article_id);
    });


    function display_rays(posts) {
        var newsletter_id = '';
        var news_reference = '#';
        var count = 0;
        for (post in posts) {
            count++;
            if (count >= 9) {
                count = 1;
            }
            var $post = $(newlettertemplate).clone();
            newsletter_id = posts[post].id;
            // if (data_type == 'news_title') {
            //      alert("before typeof");
            //  alert("this...." + posts[post].newsletter_description);
            $post.find('.article_title').html(word_trim(posts[post].newsletter_title, 120, true).toUpperCase());
            $post.find('#user_comment').html(word_trim(posts[post].newsletter_description, 400, true));
            //  news_reference = serverurl + 'sys_admin/user_authorization/newslist?article_id=' + newsletter_id + '&article_type=news_title';

            $post.attr('id', newsletter_id);
            $post.find('.article_title').attr('id', newsletter_id);
            $post.find('#article_title').attr('href', news_reference);
            $post.find('img').attr('src', serverurl + 'images/back' + count + '.jpg');
            $post.find('.timestamp').html(posts[post].time_created);//  
            $(".newscategories:last").append($post);

        }
    }
    $(".ias_trigger").live("click", function() {
        var loading_icon = $("#loader img");
        var loading_button = $("#ias_trigger");
        loading_button.hide();
        loading_icon.show();


        var lastnewsletter_id = $(".news_title:last").attr("id");
        var limit = 25;
        $.ajax({/* post the values using AJAX */
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/retrieve_rays",
            data: {"lastnewsletter_id": lastnewsletter_id, "limit": limit},
            async: false,
            cache: false,
            success: function(data) {
                if (data.length > 0) {
                    data = $.parseJSON(data);
                    if (typeof data.news[0] !== 'undefined' && data.news.length > 2) {

                        var posts = data.news;
                        //    alert(posts);
                        posts = $.parseJSON(posts);
                        display_rays(posts);
                        loading_button.show();
                        //     alert(posts)
                    }

                }
            }
        });
        loading_icon.hide();

    });
    var serverurl = $("#serverurl").val();
    $('#inputBox').val('');
    $("#inputBox").autoSuggest({
        ajaxFilePath: serverurl + "sys_admin/user_authorization/autosuggest_articles",
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
                    str = $(".list li[class='selected']").text();
                    obj.val(str);
                    var article_id = $("li[class='selected'] a").attr("id");
                    //    alert(article_id);
                    do_modal(serverurl, article_id);
                    // store id of the selected option
                    if (idHolder != "" && idHolder != null)
                        $("#" + idHolder).val(article_id);
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