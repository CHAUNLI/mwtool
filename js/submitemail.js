/**
 * Created by MW Toolbox on 10/05/2017.
 */
$(function () {
    $("#sub").click(function (e) {
        e.preventDefault();
        $this=$(this);
        $this.html("Sending");
        $this.attr('disabled',true);
       /* if($("md-form").validate()){*/
            var datapost ={
                name:$("#call-name").val(),
                email:$("#email").val(),

            };

            $.ajax({
                type: "POST",
                url: "send_email.php",
                data: datapost,
                success:function (msg) {

                    $this.html("Success");
                    $this.attr('disabled',false);

                }
            });
       /* }else{
            $this.html("Fail");
            $this.attr('disabled',false);
        }*/





    });
});
