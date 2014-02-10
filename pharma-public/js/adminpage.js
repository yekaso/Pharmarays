/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$(function() {
    var files;

// Add events
    $("#uploadBtn").on('change', prepareUpload);
// Grab the files and set them to our variable
    function prepareUpload(event)
    {alert(files);
        files = event.target.files;
        alert(files);
        $("#imagename").val($(this).val());
        alert($.parseJSON(files));
    }
    function resetForm($form) {
        $form.find('input:text, input:password, input:file, select, textarea').val('');
        $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
    }


    function computeFieldReadiness() {
        var descCharLimit = 10000000;
        var titleCharLimit = 1000;
        var descRemaining = descCharLimit - $("#article_description").val().length;
        var titleRemaining = titleCharLimit - $("#article_title").val().length;

        if (descRemaining === descCharLimit || titleRemaining === titleCharLimit) {
            // No characters entered so disable the button
            $(".submit").hide();

        } else if (descRemaining < 0 || titleRemaining < 0 || $("#drugcategoryid").val() < 1) {
            // remaining = 0; // Prevents the counter going into negative numbers
            $(".submit").hide();
        } else {
            $(".submit").show();
        }
    }

    $('#article_description').on("propertychange input textInput", function() {
        computeFieldReadiness();
    });
    $('#article_title').on("propertychange input textInput", function() {

        computeFieldReadiness();
    });
    $('#drugcategoryid').change(function() {
        computeFieldReadiness();
    })


    $(".submit").on('click', function() {
        var serverurl = $("#serverurl").val();
        var title = $("#article_title").val();
        var description = $("#article_description").val();
        var guestonly = $("#guestonly:checked").length;
        var author = $("#author").val();
        var drugcategory = $("#drugcategoryid").val();
        var imagename = $("#imagename").val();
        var memberid = $("#memberid").val();

        $(".saving_icon").show();
        $(".saved_icon").hide();
        $(".submit").hide();
        alert(files);
        var data = new FormData();
	$.each(files, function(key, value)
	{
		data.append(key, value);
	});

        alert(data);
       var fd = $.parseJSON(data);
        alert(fd + " Second phase");
        $.ajax({
            type: "POST",
            url: serverurl + "sys_admin/user_authorization/createarticle",
        //    data: {"memberid": memberid, "title": title, "description": description, "guestonly": guestonly, "author": author, "drugcategory": drugcategory, "imagename": imagename, "file": fd},
          data: data,
          cache: false,
            success: function(data) {
                alert(data);
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