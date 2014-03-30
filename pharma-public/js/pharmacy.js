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

$(function() {
    $("#location_select").live("change", function() {
        // alert("hello select location");
        var serverurl = $("#serverurl").val();
        var location_id = $(this).attr("value");
        if (location_id !== '-1') {
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
        }
    });

    $("#state_select").change(function() {
        var locationid = $("select[id='state_select'] option:selected").val();
        if (locationid !== '-1') {
            var selected_select = "location_select";
            // alert("State Clicked >>>>>" + locationid);
            $("#location_select_loading").show();
            $.ajax({/* post the values using AJAX */
                type: "POST",
                url: serverurl + "sys_admin/user_authorization/retrieve_location_ref",
                data: {"locationid": locationid},
                async: false,
                cache: false,
                success: function(data) {
                    if (data.length > 0) {
                        //   alert("success");
                        if (typeof data[0] !== 'undefined' && data.length > 2) {
                            var posts = data;
                            posts = $.parseJSON(posts);
                            //        alert(posts);
                            display_location_select(posts, selected_select);
                        } else {
                            var posts = 'empty';
                            display_location_select(posts, selected_select);
                        }

                    }
                }


            });
            $("#location_select_loading").hide();
        }
    });
    $("#country_select").change(function() {
        var locationid = $("select[id='country_select'] option:selected").val();
        var selected_select = "state_select";
        $("#state_select_loading").show();
        $.ajax({/* post the values using AJAX */
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/retrieve_location_ref",
            data: {"locationid": locationid},
            async: false,
            cache: false,
            success: function(data) {
                if (data.length > 0) {
                    //   alert("success");
                    if (typeof data[0] !== 'undefined' && data.length > 2) {
                        var posts = data;
                        posts = $.parseJSON(posts);
                        //     alert(posts);
                        display_location_select(posts, selected_select);
                    } else {
                        // alert('empty here...');
                        var posts = 'empty';
                        display_location_select(posts, selected_select);
                    }

                }
            }


        });
        $("#state_select_loading").hide();
    });
    function display_location_select(posts, selected_select) {
        var locationselecttemplate = '<option value=""></option>';
        var select_value = '';

        if (selected_select === 'state_select') {
            select_value = "State";
        } else if (selected_select === 'location_select') {
            select_value = "Location"
        }
        $("#" + selected_select).html('<option value="-1">-Choose a ' + select_value + '-</option>');
        //   alert(selected_select);
        var post = 0;
        if (posts === 'empty') {
            $("#" + selected_select).append('<option value="-1">No data available</option>');
        } else {
            for (post in posts) {
                //        alert(post + '----value.....'+posts[post]);
                var $post = $(locationselecttemplate).clone();
                var locationid = posts[post].id;
                $post.attr('value', locationid);
                $post.html(word_trim(posts[post].name, 20, true));
                //       alert(posts[post].name);
                $post.attr('id', locationid);
                $("#" + selected_select).append($post);
            }
        }
    }
    /*  $(".pharm-swatch").live("click", function(e) {
     var serverurl = $("#serverurl").val();
     var pharmacy_id = $(this).attr("id");
     do_modal(serverurl, pharmacy_id);
     display_map(serverurl);
     $("#dialog-modal div.loadingmap").html('');
     });*/
    $(window).scroll(function() { /* window on scroll run the function using jquery and ajax */
        var WindowHeight = $(window).height(); /* get the window height */
        if ($(window).scrollTop() + 1 >= $(document).height() - WindowHeight) {
            var empty_data = $("#empty_data").val();
            if (empty_data == 'false') {
                $("#ias_trigger").show();
            }
        }
    });
    $(".ias_trigger").live("click", function() {
        //alert("click load...");
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
        var limit = 100;
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
});