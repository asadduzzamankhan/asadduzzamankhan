//login
$(document).ready(function() {
        var $form = $("#login-form");
        $form.validate({
          rules: {
            email: {
              required: true,
              email: true
            },
            password: {
              required: true,
            }
          },
          messages: {
            email: "Please specify a valid email address"
          },
          submitHandler: function() {
                $email = $("input[name=email]").val();
                $password = $("input[name=password]").val();
                $.post("includes/form_handlers/login_handler.php", {email: $email, password: $password}, function(response) {
                        if(response == 1) {
                            $(".error[data-error=EMAIL_PASSWORD_INCORRECT").addClass("hide");
                            window.location = "home.php";
                        } else {
                            $(".error[data-error=EMAIL_PASSWORD_INCORRECT").removeClass("hide");
                        }
                });
          }
        });
});
