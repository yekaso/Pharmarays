$(function() {
    
    $("#empty_data").val('false');
    var serverurl = $("#serverurl").val();
    var nextrequest = 'true';
    var newlettertemplate = '<a onclick="return false;">'
            + '<div class="image-scope">'
            + '<img class="image-box" style="width:200px; height:200.0px" src="">'
            + '<div class="image-actions" style="display: none;">'
            + '<div class="image-mask"></div></div></div>'
            + '<h5 class="title"></h5>'
            + '<div class="store-label"></div>'
            + '<div class="stats-block"></div></a>';
    $('.private-product').live('click', function(e) {
        $('#modal #content .red').attr("href", "#" + $(this).attr("id"));// Button which will activate our modal
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
    function display_rays(posts) {
        var count = $("#count").val();
        var horizontal_pos = parseInt($("#horizontal_pos").val());
        var vertical_pos = parseInt($("#vertical_pos").val());
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
            //  alert("this...." + posts[post].newsletter_description);
            $post.find('.title').html(word_trim(posts[post].newsletter_title, 42, true) + '<br/><div class="swatch_text"><small></small></div>');
            $post.find('.title .swatch_text small').html(word_trim(posts[post].newsletter_description, 147, true));
            data_type = 'newsletter_title';
            //      alert('after type of');
            full_class_name = data_type;


            //  news_reference = serverurl + 'sys_admin/user_authorization/newslist?news_id=' + newsletter_id + '&article_type=' + data_type;

            if (posts[post].guestonly == 0) {
                full_class_name += ' private-product';
                news_reference = '#' + newsletter_id;
            } else {
                full_class_name += ' article_title';
            }

            $post.attr('id', newsletter_id);
            $post.attr('href', news_reference);
            $post.attr('class', 'mason-tile product masonry-brick swatch-display ' + full_class_name);
            $post.find('.image-box').attr('src', serverurl + 'images/back' + count + '.jpg');
            $post.attr('style', "position: absolute;" + " top: " + vertical_pos + "px; left: " + horizontal_pos + "px;");

            $post.find('.store-label').html(word_trim(posts[post].author_name, 30));
            $post.find('.stats-block').html(posts[post].time_created);//  
            $(".title_body:last").append($post);
            if (horizontal_pos >= 904) {
                vertical_pos += 430;
                horizontal_pos = 0;
            } else {
                horizontal_pos += 230;
            }
        }
        $("#count").val(count);
        $("#horizontal_pos").val(horizontal_pos);
        $("#vertical_pos").val(vertical_pos);
    }
    $(window).scroll(function() { /* window on scroll run the function using jquery and ajax */
        var WindowHeight = $(window).height(); /* get the window height */
        if ($(window).scrollTop() + 1 >= $(document).height() - WindowHeight) {
            var swatch_size = $('.product').size();
            var remainder = swatch_size % 5;
            var horizontal_pos = remainder * 230;
            $("#horizontal_pos").val(horizontal_pos);
            var vertical_pos = ((swatch_size - remainder) / 5) * 430;
            $("#vertical_pos").val(vertical_pos);
            //        alert('scroll vertical '+vertical_pos+'>>>horizontal '+horizontal_pos);/* check is that user scrolls down to the bottom of the page */
            var empty_data = $("#empty_data").val();
            if (empty_data == 'false') {
                $("#loader").html("<img src='" + serverurl + "images/loading_icon.gif' alt='loading'/>"); /* displa the loading content */
                $("#loader").attr('style', 'display:block');// var LastDiv = $(".title_body:last"); /* get the last div of the dynamic content using ":last" */
                var lastnews_id = $(".news_title:last").attr("id");
                var lastnewsletter_id = $(".newsletter_title:last").attr("id");
                //        alert(lastnews_id + ' <<<<<>>>>>> ' + lastnewsletter_id);
                /* get the id of the last div */
                // var ValueToPass = "lastid=" + LastId; /* create a variable that containing the url parameters which want to post to getdata.php file */
                var limit = 10;
                //limit of the number of news/news letter retrieved.
                //   alert(nextrequest);
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
                    //     alert('free to execute');
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
                                    //    alert(posts);
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