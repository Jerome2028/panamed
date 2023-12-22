$(function() {
    $(".email").on("submit", function(e) {

        e.preventDefault();

        var error = false; var message = '';
        var email = $(this).find("input[name=femail]").val();
        
        if (email == "") {
            error = true;
            message = 'Email Required';
        }
    
        if (error) {
            Toastify({
                text: message,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                positionRight: true,
                backgroundColor: "#c46868"
              }).showToast();
            return
        }
            
            
        $(".email, body").css({
            opacity: "0.3",
            cursor: "wait"
        });

        var $inputs = $(this).find("input, select, button, textarea");
        var action = $(this).attr("action");
        var type = $(this).attr("method");
        var formData = new FormData(this);

        $inputs.prop("disabled", true);
        window.onbeforeunload = function() {
            return "Are you sure you want to navigate away from this page?";
        };
          
        $.ajax({
            url: action,
            type: type,
            data: formData,
            
            beforeSend: function() {
            $("body").css({
                opacity: "0.5",
                cursor: "wait"
            });
        },
            success: function(data) {
                
                window.onbeforeunload = null;

                $("body").css({
                    opacity: "1",
                    cursor: "auto"
                });

                $inputs.val("");
                $inputs.prop("disabled", false);
                $(":submit").val("submit");
                
                if (data.toLowerCase().trim() == "email sent") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.onmouseenter = Swal.stopTimer;
                          toast.onmouseleave = Swal.resumeTimer;
                          window.location.href="thank-you";
                        }
                      });
                      Toast.fire({
                        icon: "success",
                        title: data,
                      });
                      setTimeout(function() {
                        window.location.href="thank-you";
                      },5000);
                      }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    
});
});