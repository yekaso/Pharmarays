/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$(function() {

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

        } else if (descRemaining < 0 || titleRemaining < 0 || $("#pharmacy_location").val() < 1) {
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
    $('#pharmacy_location').change(function() {
        computeFieldReadiness();
    });


    $(".submit").on('click', function() {
        var serverurl = $("#serverurl").val();
        var name = $("#pharmacy_name").val();
        var address = $("#pharmacy_address").val();
        var location = $("#pharmacy_location").val();
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