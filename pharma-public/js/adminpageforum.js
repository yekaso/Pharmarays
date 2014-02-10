/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$(function() {

    function resetForm($form) {
        $form.find('input:text, input:password, input:file, select, textarea').val('');
        $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
    }

    function computeForumFieldReadiness() {
        var descCharLimit = 10000000;
        var titleCharLimit = 1000;
        var descRemaining = descCharLimit - $("#forum_description").val().length;
        var titleRemaining = titleCharLimit - $("#forum_title").val().length;

        if (descRemaining === descCharLimit || titleRemaining === titleCharLimit) {
            // No characters entered so disable the button
            $(".submit_forum").hide();

        } else if (descRemaining < 0 || titleRemaining < 0) {
            // remaining = 0; // Prevents the counter going into negative numbers
            $(".submit_forum").hide();
        } else {
            $(".submit_forum").show();
        }
    }

    $('#forum_description').on("propertychange input textInput", function() {
        computeForumFieldReadiness();
    });
    $('#forum_title').on("propertychange input textInput", function() {

        computeForumFieldReadiness();
    });

    function computeTopicFieldReadiness() {
        var descCharLimit = 10000000;
        var titleCharLimit = 1000;
        var descRemaining = descCharLimit - $("#topic_description").val().length;
        var titleRemaining = titleCharLimit - $("#topic_title").val().length;

        if (descRemaining === descCharLimit || titleRemaining === titleCharLimit) {
            // No characters entered so disable the button
            $(".topic_submit").hide();

        } else if (descRemaining < 0 || titleRemaining < 0 || $("#forumid").val() < 1 || $("#forumcategoryid").val() < 1) {
            // remaining = 0; // Prevents the counter going into negative numbers
            $(".topic_submit").hide();
        } else {
            $(".topic_submit").show();
        }
    }

    $('#topic_description').on("propertychange input textInput", function() {
        computeTopicFieldReadiness();
    });
    $('#topic_title').on("propertychange input textInput", function() {

        computeTopicFieldReadiness();
    });
    $('#forumid').change(function() {
        computeTopicFieldReadiness();
    });
    $('#forumcategoryid').change(function() {
        computeTopicFieldReadiness();
    });


    $(".submit_forum").on('click', function() {
        var serverurl = $("#serverurl").val();
        var title = $("#forum_title").val();
        var description = $("#forum_description").val();
        var subforum = $("#subforumid").val();
        var memberid = $("#memberid").val();

        $(".saving_forum_icon").show();
        $(".saved_forum_icon").hide();
        $(".submit_forum").hide();
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/createforum",
            data: {"memberid": memberid, "title": title, "description": description, "subforum": subforum},
            cache: false,
            success: function(data) {
                if (data.length > 0) {
                    data = $.parseJSON(data);
                    $(".saving_forum_icon").hide();
                    $(".saved_forum_icon").show();
                    resetForm($('#masterdata_forum_form'));
                    var forumName = word_trim(title, 30, true).toLowerCase();
                    $("#subforumid").append('<option value="' + data.forum_id + '">' + forumName + '</option>');
                    $("#forumid").append('<option value="' + data.forum_id + '">' + forumName + '</option>');

                    setTimeout(function() {
                        $(".saved_forum_icon").hide();
                    }, 3000);
                }
            }

        });

        return false;
    });
    $(".topic_submit").on('click', function() {
        var serverurl = $("#serverurl").val();
        var title = $("#topic_title").val();
        var description = $("#topic_description").val();
        var forumid = $("#forumid").val();
        var categoryforumid = $("#forumcategoryid").val();
        var memberid = $("#memberid").val();

        $(".saving_topic_icon").show();
        $(".saved_topic_icon").hide();
        $(".topic_submit").hide();
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/createtopic",
            data: {"memberid": memberid, "title": title, "description": description, "forumid": forumid, "categoryforumid": categoryforumid},
            cache: false,
            success: function(data) {

                $(".saving_topic_icon").hide();
                $(".saved_topic_icon").show();
                resetForm($('#masterdata_topic_form'));
                setTimeout(function() {
                    $(".saved_topic_icon").hide();
                }, 3000);
            }

        });

        return false;
    });
});