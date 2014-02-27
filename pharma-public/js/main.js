/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(function() {

    //This section is for related drugs
    $('input[class=related_items]').each(function() {
        $(this).attr("checked", false);
    });
    //This is for displaying news articles on modal form
    $(".article_title").live("click", function(e) {
        var article_id = $(this).attr("id");
        //      alert(article_id);
        do_modal(serverurl, article_id);
    });
    //resets the comment text area on page reload
    $('#comment').val('');
    $("#start_comment").val('10');
    //resets the search text box after page reload
    $('#inputBox').val('');
    //retrieves the master data used in retrieving other information
    var memberid = $("#memberid").val();
    var drugid = $("#drugid").val();
    var serverurl = $("#serverurl").val();
    //  alert(serverurl);
    var membertypeimage = $("#membertype").val();
    var membername = $("#membername").val();
    var membertypeid = $("#membertypeid").val();
    //template used to repopulate the related drugs section
    var relateddrugstemplate = '<li><a id="0" ></a></li>';
    //resets the hidden drug id to 1 which is default
    $("#drugid").attr("value", "1");
    //Reloads the drugs information when the drugs in related items are clicked
    $("#related_drugs ul li a,#toptendrugs ul li a").live("click", function() {
        $.blockUI({message: '<h5><img src="' + $("#serverurl").val() + 'images/loading_icon.gif" /> Please wait...</h5>'});
        var selectedid = $(this).attr('id');
        retrievedrug(selectedid, 0, 10);

        //    alert($(this).attr('id') + " is the id of the clicked anchor");
    });
    //Retrieves the drugs when any of the checkboxes of the related categories is clicked
    $("#relateditems .related_items").live("click", function() {
        $('#related_drugs').scrollTop(0);
        //  alert("check box clicked");
        $.blockUI({message: '<h5><img src="' + $("#serverurl").val() + 'images/loading_icon.gif" /> Please wait...</h5>'});
        var class_id = 0, brandname_id = 0, company_id = 0, indication_id = 0;
        $('input[class=related_items]:checked').each(function() {
            if ($(this).attr("name") == 'class') {
                class_id = $("#relateditems #class").val();
                //         alert("class");
            }
            if ($(this).attr("name") == 'brandname') {
                brandname_id = $("#relateditems #brandname").val();
          //            alert("generic>>>>>>>>>>>>>>"+category_id);
            }
            if ($(this).attr("name") == 'company') {
                company_id = $("#relateditems #company").val();
                //        alert("brandname");
            }
            if ($(this).attr("name") == 'indication') {
                indication_id = $("#relateditems #indication").val();
          //          alert("indication>>>>>>>>>"+indication_id);
            }
        });
        var drugid = $("#drugid").val();
        //     alert("class id " + class_id + " category id " + category_id + " brand id " + brand_id);

        if (class_id == 0 && brandname_id == 0 && company_id == 0 && indication_id == 0) {
            $("#related_drugs ul").html('<li><a id="0" href="#" onclick="return false;">No criteria selected yet</a></li>');
        } else {
            $.ajax({
                type: "POST",
                url: serverurl + "sys_admin/user_authorization/repopulate_drug_relations",
                // We do not want IE to cache the result
                cache: false,
                // data: dataString
                data: {"class_id": class_id, "brandname_id": brandname_id, "company_id": company_id, "indication_id": indication_id, "drug_id": drugid}
            }).success(function(data, text) {
                // parse the response (typeof data == String)
              ///        alert("success" + data);
                related_drugs = $.parseJSON(data);
                /*     $.each(data,function(i,item){
                 alert('i ......'+i);
                 alert('item ....'+item.comment);
                 });*/
                $("#related_drugs ul").html('');
                // alert(pharmacy.length);
                if (typeof related_drugs[0] !== 'undefined' && related_drugs.length > 0) {
                    for (new_related_drug in related_drugs) {
                        var $post = $(relateddrugstemplate).clone();
                        //  alert(posts);
                        $post.find('a').attr('id', related_drugs[new_related_drug].id_drug);
                        $post.find('a').attr('href', '#');
                        $post.find('a').attr('onclick', 'return false;');
                        $post.find('a').html(word_trim(related_drugs[new_related_drug].name, 30, true));
                        //  alert(posts);
                        $("#related_drugs ul").append($post);
                    }
                } else {
                    $("#related_drugs ul").append('<li><a  target="_top" href="#">No drug in selected category yet</a></li>');
                }
            }).error(function(request, status, error) {
                alert("error");
                $alert = '';
            });
        }
        setTimeout($.unblockUI, 0);
    });
    $('#pharmacy').scrollTop(0);
    $('#pharmacy').perfectScrollbar({
        wheelSpeed: 20,
        wheelPropagation: false
    });
    $('#related_drugs').perfectScrollbar({
        wheelSpeed: 20,
        wheelPropagation: false,
        minScrollbarLength: 20
    });

    //Auto retrieves drug information when searched from the search text bar
    $("#inputBox").autoSuggest({
        ajaxFilePath: serverurl + "sys_admin/user_authorization/autosuggest",
        ajaxParams: "dummydata=dummyData",
        autoFill: "false",
        iwidth: "auto",
        opacity: "0.9",
        ilimit: "15",
        idHolder: "id-holder",
        match: "contains"
    });
    /* DEMO */
    // initialize variables
    var start = parseInt($("#start_comment").val());
    var desiredPosts = 10;
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
        var drugid = $("#drugid").val();
        progressBar.css('width', '0%');
        // remove the more button innerHTML and insert the progress bar
        more.empty().append(progressElement);
        // AJAX REQUEST
        //dataString = '{"start":' + start + ',"desiredPosts":' + desiredPosts + '}';
        dataString = '&start=' + start + '&desiredPosts=' + desiredPosts + '&drug_id=' + drugid + '&result=';
        //      alert(dataString);
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/retrievecomment",
            // We do not want IE to cache the result
            cache: false,
            // data: dataString
            data: {"start": start, "desiredPosts": desiredPosts, "drug_id": drugid}
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
        var drugid = $("#drugid").val();
        var topicid = $("#topicid").val();
        var comment = $("#comment").val();
        var commenthtml = "<div class='row-fluid'><div class='span12'><div class='editor-label'><img src='" + serverurl + "images/" + membertypeimage + ".png' /><div><div id='comment_username'>Pharmacist " + membername + "</div><br/><div id='user_comment'>" + comment + "</div></div></div></div></div>"

        var newtemplate = '<div class="row-fluid"><div class="span12"><div class="editor-label"><img class="commentimg"/>'
                + '<div><div id="comment_username">'
                + '</div><br/><div id="user_comment">'
                + '</div><div class="timestamp"></div></div></div></div></div>';

        var commentsummarytemplate = '<a class="comment" href="#" target="_top"></a>';

        var dataString = '&memberid=' + memberid + '&drugid=' + drugid + '&comment=' + comment + '&membertypeid=' + membertypeid + '&commenthtml=' + commenthtml;
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
                data: {"memberid": memberid, "drug_id": drugid, "topic_id": topicid, "comment": comment, "membertypeid": membertypeid, "lastcomment_id": lastcomment_id},
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



});

// Do stuff when there is textarea activity
