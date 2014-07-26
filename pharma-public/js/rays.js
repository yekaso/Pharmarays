$(function() {
    $("#empty_data").val('false');
    var serverurl = $("#serverurl").val();
    var nextrequest = 'true';
    /* var newlettertemplate = '<a onclick="return false;">'
     + '<div class="image-scope">'
     + '<img class="image-box" style="width:200px; height:200.0px" src="">'
     + '<div class="image-actions" style="display: none;">'
     + '<div class="image-mask"></div></div></div>'
     + '<h5 class="title"></h5>'
     + '<div class="store-label"></div>'
     + '<div class="stats-block"></div></a>';
     */
    var newlettertemplate = '<div class="productboxcat_inner">'
            + '<div class="productboxcat_inner_img">'
            + '<img width="155" height="100" alt="indi remy" />'
            + '</div><div class="productboxcat_inner_text"><h3></h3><p></p>'
            + '<div class="productboxcat_inner_buy_btne">'
            + '<a class="buynowButton"  onclick="return false;">Read more</a></div></div>'
            + '<div class="productboxcat_inner_author"></div>'
            + '<div class="productboxcat_inner_date"></div></div>';
    $('.private-product').live('click', function(e) {
        $('#modal #content .red').attr("href", "#" + $(this).attr("id")); // Button which will activate our modal
        $('#modal').reveal({// The item which will be opened with reveal
            animation: 'fade', // fade, fadeAndPop, none
            animationspeed: 600, // how fast animtions are
            closeonbackgroundclick: true, // if you click background will modal close?
            dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
        });
        return false;
    });
    $(".article_title").live("click", function(e) {
        var article_id = $(this).attr("id");
        do_modal(serverurl, article_id);
    });
    $(".newsletter_signup").live("click", function(e) {
        var newsubscriber = $("#newsubscriber").val();
        $("#newslettersub_msg").html('');
        var button_clicked = $(this);
        if (validateEmail(newsubscriber)) {
            button_clicked.hide();
            $("#newsletter_loading").show();
            $.ajax({
                type: "POST",
                url: serverurl + "sys_admin/user_authorization/newsletter_subscription",
                data: {"emailaddress": newsubscriber},
                async: false,
                cache: false,
                success: function(data) {
                    var status_msg = '';
                    //   alert(data);
                    if (data.length > 0) {
                        data = $.parseJSON(data);
                        //   alert("formatted data >>>>" + data);
                        if (typeof data.status !== 'undefined') {
                            if (data.status == 'success') {
                                status_msg = 'Subscribed successfully. Will recieve subsequent newsletters'
                                //       alert(status_msg);
                            } else {
                                status_msg = newsubscriber + ' has already subscribed to newsletters';
                            }
                        } else {
                            status_msg = 'Unknown error occured';
                            //     alert(status_msg);
                        }
                    } else {
                        status_msg = 'This is currently unavailable.';
                        //     alert(status_msg);
                    }
//     window.setTimeout(function() {
//   $("#loader").html("");
//  $("#loader").attr('style', 'display:none');
                    $("#newsletter_loading").hide();
                    button_clicked.show();
                    $("#newslettersub_msg").html(status_msg);
                    $("#newsubscriber").val('');
                    //       }, 4000);
                }

            });
        } else {
            var status_msg = 'Enter a valid email address';
            $("#newslettersub_msg").html(status_msg);
        }
    });
    function display_rays(posts) {
        var count = $("#count").val();
        //   var horizontal_pos = parseInt($("#horizontal_pos").val());
        //   var vertical_pos = parseInt($("#vertical_pos").val());
        var full_class_name = '';
        //     alert('vertical '+vertical_pos+'>>>horizontal '+horizontal_pos);
        var newsletter_id = '';
        var news_reference = '';
        for (post in posts) {
            count++;
            if (count >= 9) {
                count = 1;
            }
            var data_type = '';
            var $post = $(newlettertemplate).clone();
            newsletter_id = posts[post].id;
            // if (data_type == 'news_title') {
            //      alert("before typeof");
            //    alert("this...." + posts[post].newsletter_description);
            $post.find('.productboxcat_inner_text h3').html(word_trim(posts[post].newsletter_title, 42, true));
            $post.find('.productboxcat_inner_text p').html(word_trim(posts[post].newsletter_description, 347, true));
            data_type = 'newsletter_title';
            //     alert('after type of');
            full_class_name = data_type;
            //  news_reference = serverurl + 'sys_admin/user_authorization/newslist?news_id=' + newsletter_id + '&article_type=' + data_type;

            if (posts[post].guestonly == 0) {
                full_class_name += ' private-product';
                news_reference = '#' + newsletter_id;
            } else {
                full_class_name += ' article_title';
            }

            $post.find('.buynowButton').attr('id', newsletter_id);
            $post.find('.buynowButton').attr('href', news_reference);
            $post.find('.buynowButton').attr('class', 'buynowButton ' + full_class_name);
            $post.find('.productboxcat_inner_img img').attr('src', serverurl + 'images/back' + count + '.jpg');
            //  $post.attr('style', "position: absolute;" + " top: " + vertical_pos + "px; left: " + horizontal_pos + "px;");

            $post.find('.productboxcat_inner_author').html(word_trim(posts[post].author_name, 30));
            $post.find('.productboxcat_inner_date').html(posts[post].time_created); //  
            $(".title_body:last").append($post);
            /*  if (horizontal_pos >= 904) {
             vertical_pos += 430;
             horizontal_pos = 0;
             } else {
             horizontal_pos += 230;
             }*/
        }
        $("#count").val(count);
        //   $("#horizontal_pos").val(horizontal_pos);
        // $("#vertical_pos").val(vertical_pos);
    }
    $(".healthtip").scroll(function() { /* window on scroll run the function using jquery and ajax */
        var WindowHeight = $(".healthtip").height(); /* get the window height */
        var name = 'kachi';
        //   alert("here now");
        //  alert("therere"+document.getElementById("healthtip").clientHeight);
        //   if ($(".healthtip").scrollTop() + 1 >= $(".healthtip_wrapper").height() - WindowHeight) {
        var scrollHeight = document.getElementById("healthtip_wrapper").scrollHeight
        if ($(".healthtip").scrollTop() + 1 >= (scrollHeight - WindowHeight)) {
//     alert("Hello");
//  alert($(".healthtip").scrollTop() + " Scroll top and " + document.getElementById("healthtip_wrapper").scrollHeight + " and document height >>" + $(document).height() + " window height>>" + $(window).height());

//   var swatch_size = $('.product').size();
//   var remainder = swatch_size % 5;
//   var horizontal_pos = remainder * 230;
//  $("#horizontal_pos").val(horizontal_pos);
// var vertical_pos = ((swatch_size - remainder) / 5) * 430;
//  $("#vertical_pos").val(vertical_pos);
//        alert('scroll vertical '+vertical_pos+'>>>horizontal '+horizontal_pos);/* check is that user scrolls down to the bottom of the page */
            var empty_data = $("#empty_data").val();
            if (empty_data == 'false') {
                $("#articles_loading").show();
                $("#loader").html("<img src='" + serverurl + "images/loading_icon.gif' alt='loading'/>"); /* displa the loading content */
                $("#loader").attr('style', 'display:block'); // var LastDiv = $(".title_body:last"); /* get the last div of the dynamic content using ":last" */
                var lastnews_id = $(".news_title:last").attr("id");
                var lastnewsletter_id = $(".newsletter_title:last").attr("id");
                //  alert(lastnews_id + ' <<<<<>>>>>> ' + lastnewsletter_id);
                /* get the id of the last div */
                // var ValueToPass = "lastid=" + LastId; /* create a variable that containing the url parameters which want to post to getdata.php file */
                var limit = 3;
                //limit of the number of news/news letter retrieved.
                // alert(nextrequest);
                if (nextrequest == 'true') {
                    nextrequest = 'false';
                    var lastnews_id = 0;
                    var lastnewsletter_id = 0;
                    if (typeof $(".news_title:last").attr("id") !== 'undefined') {
                        lastnews_id = $(".news_title:last").attr("id");
                    }
                    if (typeof $(".newsletter_title:last").attr("id") !== 'undefined') {
                        lastnewsletter_id = $(".newsletter_title:last").attr("id");
                    }
//   alert(lastnews_id + ' and ' + lastnewsletter_id);
//  alert('free to execute');
                    $.ajax({/* post the values using AJAX */
                        type: "POST",
                        url: serverurl + "sys_admin/user_authorization/retrieve_rays",
                        data: {"lastnews_id": lastnews_id, "lastnewsletter_id": lastnewsletter_id, "limit": limit},
                        async: false,
                        cache: false,
                        success: function(data) {
//    window.setTimeout(function() {
//    $("#loader").html("");
//    }, 4000);
// alert(data);
                            if (data.length > 0) {
                                data = $.parseJSON(data);
                                if (typeof data.news[0] !== 'undefined' && data.news.length > 2) {
//   LastDiv.after(html); /* get the out put of the getdata.php file and append it after the last div using after(), for each scroll this function will execute and display the results */
//$("#loader").html("");

                                    var posts = data.news;
                                    //       alert(posts);
                                    posts = $.parseJSON(posts);
                                    //  var data_type = 'news_title';
                                    display_rays(posts);
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
//   window.setTimeout(function() {
//   $("#loader").html("");
//  $("#loader").attr('style', 'display:none');
                            $("#articles_loading").hide();
                            //       }, 4000);

                        }
                    });
                }
            }
        }
    });
});