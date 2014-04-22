$(function() {
    $(".apply_intern").live("click", function() {
        //  alert("Apply >>>" +"#applyintern_" + $(this).attr('name'));
        $("#applyintern_" + internshipId).hide();
        $("#apply_loading" + internshipId).show();
        var internshipId = $(this).attr('name');
        var memberid = $("#memberid").val();
        var status = "active";
        $.ajax({/* post the values using AJAX */
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/apply_internship",
            data: {"internship_id": internshipId, "memberid": memberid, "status": status},
            async: false,
            cache: false,
            success: function(data) {
                if (data.length > 0) {
//    alert(data);
                    data = $.parseJSON(data);
                    //  alert(data);
                    if (typeof data[0] !== 'undefined' && data.length > 0) {

                        $("#apply_loading" + $(this).attr('name')).hide();
                        $("#unapplyintern_" + $(this).attr('name')).show();
                        //             alert(posts)
                    }
                }
            }
        });


    });
    $(".unapply_intern").live("click", function() {
        //   alert("Unapply");
        $("#applyintern_" + $(this).attr('name')).show();
        $("#apply_loading" + $(this).attr('name')).show();
        var internshipId = $(this).attr('name');
        var memberid = $("#memberid").val();
        var status = "inactive";
        $.ajax({/* post the values using AJAX */
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/apply_internship",
            data: {"internship_id": internshipId, "memberid": memberid, "status": status},
            async: false,
            cache: false,
            success: function(data) {
                if (data.length > 0) {
//    alert(data);
                    data = $.parseJSON(data);
                    //  alert(data);
                    if (typeof data[0] !== 'undefined' && data.length > 0) {

                        $("#apply_loading" + $(this).attr('name')).hide();
                        $("#unapplyintern_" + $(this).attr('name')).hide();
                        //             alert(posts)
                    }
                }
            }
        });



    });
    $("#searchInternships").live("click", function() {
// alert("hello select location");
        var serverurl = $("#serverurl").val();
        var specialization_id = $("#specialization_select").val();
        var duration_id = $("#duration_select").val();
        var firm_id = $("#firm_select").val();
        var location_id = $("#location_select").val();
        var lastinternship_id = 0;
        //  alert(specialization_id + "...spec..." + duration_id + "...duration.." + firm_id + "...firm..." + location_id);
        $.blockUI({message: '<h5><img src="' + $("#serverurl").val() + 'images/loading_icon.gif" /> Please wait...</h5>'});
        $("#horizontal_pos").val('0');
        $("#vertical_pos").val('0');
        var limit = 5;
        $.ajax({/* post the values using AJAX */
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/retrieveinternship_byparams",
            data: {"lastinternship_id": lastinternship_id, "locationid": location_id, "limit": limit, "firmid": firm_id, "durationid": duration_id, "specializationid": specialization_id},
            async: false,
            cache: false,
            success: function(data) {
                if (data.length > 0) {
//    alert(data);
                    data = $.parseJSON(data);
                    //  alert(data);
                    if (typeof data[0] !== 'undefined' && data.length > 0) {

                        var posts = data;
                        //      alert(posts);
                        //     posts = $.parseJSON(posts);
                        $(".internship_list").html('');
                        //makes loading button appear
                        $("#empty_data").val('false');
                        display_internships(posts);
                        //             alert(posts)
                    } else {

                        $(".internship_list").html('<div><img src="' + serverurl + 'images/nosearch1.jpg"/></div>');
                    }

                }
            }
        });
        setTimeout($.unblockUI, 0);
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
    $("#empty_data").val('false');
    var serverurl = $("#serverurl").val();
    var nextrequest = 'true';
    var internship_template = '<div class="row-fluid internship_title" id="">' +
            '<div class="span12">' +
            '<div class="internship-row">' +
            '<div id="firm_name"></div>' +
            '<div id="location_name"></div>' +
            '<div id="slots_available"></div>' +
            '<div id="duration"></div>' +
            '<div id="specialization"></div>' +
            '<div><input type="submit" value=" Apply " class="snazzy_button" id="apply_intern" name="apply_intern" /></div>' +
            '</div>' +
            '<div style="border-top: 1px solid #2F96B4; clear:both"></div>' +
            '</div>' +
            '</div>';
    function formatSpecialization(specializationList) {
        var specialization = '';

        var split_specialization = specializationList.split(",");
        var unique = split_specialization.filter(function(itm, i, split_specialization) {
            return i == split_specialization.indexOf(itm);
        });
        // alert(unique);
        //unique makes the brandnames display just one per compapny name irrespective of the fact that the different brand names listed might have been made by one company.
        for (split_spec in unique) {
            //   alert(split_spec);
            //    alert(unique[split_spec]);
            specialization += unique[split_spec] += '<br/>';
        }
        return specialization;
    }

    function display_internships(posts) {
        var internship_id = '';
        var specializtionList = '';
        // alert("inside display internship centers"+posts);
        for (post in posts) {
            var $post = $(internship_template).clone();
            internship_id = posts[post].id;
            $post.attr('id', internship_id);
            $post.find('#firm_name').html(word_trim(posts[post].firm, 30));
            $post.find('#location_name').html(word_trim(posts[post].location, 30)); //  
            $post.find('#slots_available').html(posts[post].slots + ' Slots Available');
            $post.find('#duration').html(posts[post].duration + ' Months'); //  
            $post.find('#specialization').html(formatSpecialization(posts[post].specialization));
            $(".internship_list:last").append($post);
            //    alert($(".internship_list:last").val());
        }
        nextrequest = 'true';
    }

    $(window).scroll(function() { /* window on scroll run the function using jquery and ajax */
        var WindowHeight = $(window).height(); /* get the window height */
        if ($(window).scrollTop() + 1 >= $(document).height() - WindowHeight) {
//        alert('scroll vertical '+vertical_pos+'>>>horizontal '+horizontal_pos);/* check is that user scrolls down to the bottom of the page */
            var empty_data = $("#empty_data").val();
            var serverurl = $("#serverurl").val();
            var specialization_id = $("#specialization_select").val();
            var duration_id = $("#duration_select").val();
            var firm_id = $("#firm_select").val();
            var location_id = $("#location_select").val();
            // alert("apex!!!");
            if (empty_data == 'false') {
                $("#loader").html("<img src='" + serverurl + "images/loading_icon.gif' alt='loading'/>"); /* displa the loading content */
                $("#loader").attr('style', 'display:block'); // var LastDiv = $(".title_body:last"); /* get the last div of the dynamic content using ":last" */
                var lastinternship_id = $(".internship_title:last").attr("id");
                //        alert(lastnews_id + ' <<<<<>>>>>> ' + lastnewsletter_id);
                /* get the id of the last div */
                // var ValueToPass = "lastid=" + LastId; /* create a variable that containing the url parameters which want to post to getdata.php file */
                var limit = 4;
                //limit of the number of news/news letter retrieved.
                //    alert(nextrequest);
                if (nextrequest == 'true') {
                    nextrequest = 'false';
                    var lastinternship_id = 0;
                    if (typeof $(".internship_title:last").attr("id") !== 'undefined') {
                        lastinternship_id = $(".internship_title:last").attr("id");
                    }
                    $.ajax({/* post the values using AJAX */
                        type: "POST",
                        url: serverurl + "sys_admin/user_authorization/retrieveinternship_byparams",
                        data: {"lastinternship_id": lastinternship_id, "locationid": location_id, "limit": limit, "firmid": firm_id, "durationid": duration_id, "specializationid": specialization_id},
                        async: false,
                        cache: false,
                        success: function(data) {
//    window.setTimeout(function() {
//    $("#loader").html("");
//    }, 4000);
//  alert(data);
                            if (data.length > 0) {
                                data = $.parseJSON(data);
                                if (typeof data[0] !== 'undefined' && data.length > 0) {
//   LastDiv.after(html); /* get the out put of the getdata.php file and append it after the last div using after(), for each scroll this function will execute and display the results */
//$("#loader").html("");

                                    var posts = data;
                                    // posts = $.parseJSON(posts);
                                    //  alert(posts);
                                    //  var data_type = 'news_title';
                                    display_internships(posts);
                                    /*
                                     var posts = data.newsletter;
                                     alert(posts)
                                     posts = $.parseJSON(posts);
                                     data_type = 'newsletter_title';
                                     //        alert('before displaying....')
                                     display_rays(posts, data_type);
                                     //        alert('after displaying ....');
                                     */
                                    nextrequest = 'true';
                                } else {
                                    $("#empty_data").val('true');
                                }
                            }
//     window.setTimeout(function() {
//   $("#loader").html("");

                            //       }, 4000);

                        }
                    });
                }
                $("#loader").attr('style', 'display:none');
            }
        }
    });
});