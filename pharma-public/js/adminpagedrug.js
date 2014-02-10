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
        var descRemaining = descCharLimit - $("#drug_description").val().length;
        var titleRemaining = titleCharLimit - $("#drug_title").val().length;

        if (descRemaining === descCharLimit || titleRemaining === titleCharLimit) {
            // No characters entered so disable the button
            $(".submit").hide();

        } else if (descRemaining < 0 || titleRemaining < 0 || $("#drugcategoryid").val() < 1 || $("#drugbrandid").val() < 1 || $(".div_drugclass input:checkbox:checked").length < 1) {
            // remaining = 0; // Prevents the counter going into negative numbers
            $(".submit").hide();
        } else {
            $(".submit").show();
        }
    }

    $('#drug_description').on("propertychange input textInput", function() {
        computeFieldReadiness();
    });
    $('#drug_title').on("propertychange input textInput", function() {

        computeFieldReadiness();
    });
    $('#drugcategoryid').change(function() {
        computeFieldReadiness();
    });
    $('#drugbrandid').change(function() {
        computeFieldReadiness();
    });
    $('.drugclass').change(function() {
        computeFieldReadiness();
    });


    $(".submit").on('click', function() {
        var serverurl = $("#serverurl").val();
        var title = $("#drug_title").val();
        var description = $("#drug_description").val();
        var chkArray = [];
        $(".div_drugclass input:checkbox:checked").each(function() {
            chkArray.push($(this).val());
        });
        var drugclass = chkArray;
        var drugcategory = $("#drugcategoryid").val();
        var drugbrandid = $("#drugbrandid").val();
        var memberid = $("#memberid").val();


        $(".saving_icon").show();
        $(".saved_icon").hide();
        $(".submit").hide();
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/createdrug",
            data: {"memberid": memberid, "title": title, "description": description, "drugclass": drugclass, "drugbrandid": drugbrandid, "drugcategory": drugcategory},
            cache: false,
            success: function(data) {
                //alert(data);
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