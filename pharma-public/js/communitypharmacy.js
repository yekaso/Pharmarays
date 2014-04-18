$(document).ready(function()
{
    var pharmacyid = $("#pharmacyid").val();
    var serverurl = $("#serverurl").val();
    var userid = $("#memberid").val();
    if (typeof pharmacyid !== 'undefined') {
        createSearchResult(pharmacyid, userid, serverurl);
    }

});
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