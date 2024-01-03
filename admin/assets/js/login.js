$(function() {
  $(".login").on("submit", function(e) {
    e.preventDefault()
  var error = false; var message = '';
  var user_email = $('#user_email').val();
  var user_password = $('#user_password').val();
  
  if ((user_email  == "") || (user_password  == "")) {
      error = true;
      message = 'Authentication failed.';
  }
  else {
    submit(user_email, user_password)
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

  $(".login-form, body").css({
    opacity: "0.5",
    cursor: "wait"
});

    function submit(user_email, user_password) {
      $.ajax ({
      type:'POST',
      url:'controller/controller.login.php?mode=login',
      data:{
        // submitdata:"submitdata",
        user_email:user_email,
        user_password:user_password,
      },
      cache: false,
      success:function(response) {
        var resValue = jQuery.parseJSON(response);
        if(resValue['message'] == "Success Found") {
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
            title: response,
          });
          setTimeout(function() {
            // window.location.href="thank-you";
            location.reload();
          },3000);;
        }
        else {
          alert("failed");
          location.reload();
        }
      } 
      });
    }
      });
    });

