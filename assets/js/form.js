$(function() {
    $(".contact").on("submit", function(e) {

        e.preventDefault();

        var error = false; var message = '';
     
        var ppi_captcha = $(this).find("input[name='ppi_captcha']").val();
        var input_captcha = $(this).find("input[name='input_captcha']").val();
        var email = $(this).find("input[name=email]").val();
        // var name = $(this).find("input[name=name]").val();
        
        if (ppi_captcha != input_captcha) {
            error = true;
            message = 'Please Retype the captcha correctly';
        }
        if ( email == "") {
            error = true;
            message = 'Email Required';
        }

        if (error) {
            Swal.fire({
            html: message,
            position: 'top-end',
            icon: 'error',
            title: 'Incomplete fields',
            showConfirmButton: false,
            timer: 1500,
            // width: '300px'
            });
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
            success: function(data) {
                
                window.onbeforeunload = null;

                $(".contact , body").css({
                    opacity: "1",
                    cursor: "auto"
                });

                $inputs.prop("disabled", false);
                $(":submit").val("submit");

                Swal.fire({
                position: 'top-end',
                icon: 'success',
                html: data,
                title: 'match',
                showConfirmButton: false,
                timer: 1500,
                width:'300px'
                })
                
                $inputs.val("");

                if(data.toLowerCase().trim() == "action complete") {
                    console.log('success');
                    window.location.href = "thank-you";
                    return
                }

            },
            cache: false,
            contentType: false,
            processData: false
        });
    
});
});