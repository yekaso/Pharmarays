$(function() {
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
            '</div>'
    function display_internships(posts) {
        var internship_id = '';
        for (post in posts) {
            var $post = $(internship_template).clone();
            internship_id = posts[post].id;

            $post.attr('id', internship_id);

            $post.find('#firm_name').html(word_trim(posts[post].firm, 30));
            $post.find('#location_name').html(word_trim(posts[post].location, 30));//  
            $post.find('#slots_available').html(posts[post].slots + ' Slots Available');
            $post.find('#duration').html(posts[post].duration + ' Months');//  
            $post.find('#specialization').html(word_trim(posts[post].specialization, 30));
            $(".internship_list:last").append($post);

        }
    }

    $(window).scroll(function() { /* window on scroll run the function using jquery and ajax */
        var WindowHeight = $(window).height(); /* get the window height */
        if ($(window).scrollTop() + 1 >= $(document).height() - WindowHeight) {
            //        alert('scroll vertical '+vertical_pos+'>>>horizontal '+horizontal_pos);/* check is that user scrolls down to the bottom of the page */
            var empty_data = $("#empty_data").val();
            if (empty_data == 'false') {
                $("#loader").html("<img src='" + serverurl + "images/loading_icon.gif' alt='loading'/>"); /* displa the loading content */
                $("#loader").attr('style', 'display:block');// var LastDiv = $(".title_body:last"); /* get the last div of the dynamic content using ":last" */
                var lastinternship_id = $(".internship_title:last").attr("id");
                //        alert(lastnews_id + ' <<<<<>>>>>> ' + lastnewsletter_id);
                /* get the id of the last div */
                // var ValueToPass = "lastid=" + LastId; /* create a variable that containing the url parameters which want to post to getdata.php file */
                var limit = 20;
                //limit of the number of news/news letter retrieved.
                //   alert(nextrequest);
                if (nextrequest == 'true') {
                    nextrequest = 'false';
                    var lastinternship_id = 0;
                    if (typeof $(".internship_title:last").attr("id") !== 'undefined') {
                        lastinternship_id = $(".internship_title:last").attr("id");
                    }
                    $.ajax({/* post the values using AJAX */
                        type: "POST",
                        url: serverurl + "sys_admin/user_authorization/retrieve_internships",
                        data: {"lastinternship_id": lastinternship_id, "limit": limit},
                        async: false,
                        cache: false,
                        success: function(data) {
                            //    window.setTimeout(function() {
                            //    $("#loader").html("");
                            //    }, 4000);
                            // alert(data);
                            if (data.length > 0) {
                                data = $.parseJSON(data);
                                if (typeof data.internships[0] !== 'undefined' && data.internships.length > 2) {
                                    //   LastDiv.after(html); /* get the out put of the getdata.php file and append it after the last div using after(), for each scroll this function will execute and display the results */
                                    //$("#loader").html("");

                                    var posts = data.internships;
                                    //    alert(posts);
                                    posts = $.parseJSON(posts);
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
                            $("#loader").attr('style', 'display:none');
                            //       }, 4000);

                        }
                    });
                }
            }
        }
    });
});