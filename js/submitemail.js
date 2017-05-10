/**
 * Created by MW Toolbox on 10/05/2017.
 */
$(function () {
    $("#sub").click(function (e) {
        e.preventDefault();
        var form_data = $("#call-name").val()+$("#email").val();
        $.ajax({
            type: "POST",
            url: "send_email.php",
            dataType: "json", // Add datatype
            data: form_data
        }).done(function (data) {
            console.log(data);
            alert("It's OK!");
        }).fail(function (data) {
            console.log(data);
        });
    });
});
