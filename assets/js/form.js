$(function() {
    $(".contact").on("submit", function(e) {

        e.preventDefault();

        var error = false; var message = '';

        var ppi_captcha = $(this).find("input[name='ppi_captcha']").val();
        var input_captcha = $(this).find("input[name='input_captcha']").val();
        var name = $(this).find("input[name=name]").val();
        var cp = $(this).find("input[name=cp]").val();
        var messages = $(this).find("input[name=messages]").val();
        var email = $(this).find("input[name=email]").val();
        
        if (ppi_captcha != input_captcha) {
            error = true;
            message = 'Please Retype the captcha correctly';
        }
        if (name== "" ||cp== "" || messages == ""){
          error = true;
          message = 'Please fill up required field!';
        }
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
                backgroundColor: "#c46868",
                opacity:"0!important"
              }).showToast();
            return
        }
            
            
        $(".contact, body").css({
            opacity: "0.5",
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
            $(".contact, body").css({
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
                
                if (data.toLowerCase().trim() == "action complete") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.onmouseenter = Swal.stopTimer;
                          toast.onmouseleave = Swal.resumeTimer; 
                        }
                      });
                      Toast.fire({
                        icon: "success",
                        title: data,
                      });
                      setTimeout(function() {
                      window.location.href="/panamed/thank-you/";
                    },3000);
                    }
                      else {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                              toast.onmouseenter = Swal.stopTimer;
                              toast.onmouseleave = Swal.resumeTimer; 
                            }
                          });
                          Toast.fire({
                            icon: "error",
                            title: data,
                          });
                          
                          setTimeout(function() {
                            location.reload();
                          },1500);
                      }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    
});
});