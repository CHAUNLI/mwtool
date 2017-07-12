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
                    $this.attr('disabled', true);

                }
            });
            /* }else{
             $this.html("Fail");
             $this.attr('disabled',false);
             }*/





    });
});
