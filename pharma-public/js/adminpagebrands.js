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
        var titleCharLimit = 1000;
        var titleRemaining = titleCharLimit - $("#brands_name").val().length;

        if (titleRemaining === titleCharLimit) {
            // No characters entered so disable the button
            $(".submit").hide();

        } else if (titleRemaining < 0 || $(".div_druggenerics input:checkbox:checked").length < 1 || $("#drugbrandid").val() < 1) {
            // remaining = 0; // Prevents the counter going into negative numbers
            $(".submit").hide();
        } else {
            $(".submit").show();
        }

    }

    $('#brands_name').on("propertychange input textInput", function() {

        computeFieldReadiness();
    });

    $('#drugbrandid').change(function() {
        computeFieldReadiness();
    });
    $('.druggenerics').change(function() {
        computeFieldReadiness();
    });

    $(".submit").on('click', function() {
        var serverurl = $("#serverurl").val();
        var name = $("#brands_name").val();
        var chkGenericsArray = [];
        var description = $("#brands_description").val();
        var selectedbrand = $("#drugbrandid").val();
        $(".div_druggenerics input:checkbox:checked").each(function() {
            chkGenericsArray.push($(this).val());
        });
        var druggenerics = chkGenericsArray;

        $(".saving_icon").show();
        $(".saved_icon").hide();
        $(".submit").hide();
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/createdrugcategory",
            data: {"name": name, "description": description,"selectedbrand":selectedbrand,"druggenerics":druggenerics},
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