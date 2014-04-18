/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$(function() {
var serverurl = $("#serverurl").val();
    function resetForm($form) {
        $form.find('input:text, input:password, input:file, select, textarea').val('');
        $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
    }

    function computeFieldReadiness() {
        var descCharLimit = 10000000;
        var titleCharLimit = 1000;
        var descRemaining = descCharLimit - $("#pharmacy_address").val().length;
        var titleRemaining = titleCharLimit - $("#pharmacy_name").val().length;

        if (descRemaining === descCharLimit || titleRemaining === titleCharLimit) {
            // No characters entered so disable the button
            $(".submit").hide();

        } else if (descRemaining < 0 || titleRemaining < 0 || $("#location_select").val() < 1) {
            // remaining = 0; // Prevents the counter going into negative numbers
            $(".submit").hide();
        } else {
            $(".submit").show();
        }
    }

    $('#pharmacy_address').on("propertychange input textInput", function() {
        computeFieldReadiness();
    });
    $('#pharmacy_name').on("propertychange input textInput", function() {

        computeFieldReadiness();
    });
    $('#location_select').change(function() {
        computeFieldReadiness();
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
                 $post.attr('id', locationid);
                $("#" + selected_select).append($post);
            }
        }
    }

    $(".submit").on('click', function() {
        var serverurl = $("#serverurl").val();
        var name = $("#pharmacy_name").val();
        var address = $("#pharmacy_address").val();
        var location = $("#location_select").val();
        var telephone = $("#pharmacy_telephone").val();

        $(".saving_icon").show();
        $(".saved_icon").hide();
        $(".submit").hide();
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/createpharmacy",
            data: {"name": name, "address": address, "location": location, "telephone": telephone},
            cache: false,
            success: function(data) {

                $(".saving_icon").hide();
                $(".saved_icon").show();
                resetForm($('#masterdata_form'));
                setTimeout(function() {
                    $(".saved_icon").hide();
                }, 3000);
            }

        });

        return false;
    });
});