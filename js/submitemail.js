/**
 * Created by MW Toolbox on 10/05/2017.
 */
$(function () {
    $("#sub").click(function (e) {






        e.preventDefault();
        $this=$(this);
        $this.html("Sending");
        $this.attr('disabled',true);

        var namev=$("#call-name").val();
        var emailv=$("#email").val();
        var phonev=$("#phone").val();
        var messagev=$("#message").val();


        if(!namev || namev.length === 0) {
            message = "All fields are mandatory\\nFirst Name is required";
            messageDialog("Warning", message, "warning", 2);
            return false;
        }

        if( !namev.match(letters) ) {
            message = "Invalid name";
            messageDialog("Warning", message, "warning", 2);
            return false;
        }else {

            /* if($("md-form").validate()){*/
            var datapost = {
                name: namev,
                email: emailv,
                phone: phonev,
                message: messagev

            };

            $.ajax({
                type: "POST",
                url: "send_email.php",
                data: datapost,
                success: function (msg) {

                    $this.html("Success");
                    $this.attr('disabled', false);

                }
            });
            /* }else{
             $this.html("Fail");
             $this.attr('disabled',false);
             }*/


        }


    });
});
