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

//   $(".login, body").css({
//     opacity: "0.5",
//     cursor: "wait"
// });

    function submit(user_email, user_password) {
      window.onbeforeunload = null;
      $.ajax ({
      type:'POST',
      url:'controller/controller.login.php?mode=login',
      data:{
        // submitdata:"submitdata",
        user_email:user_email,
        user_password:user_password,
      },
      beforeSend: function() {
        $("body").css({
            opacity: "0.5",
            cursor: "wait"
        });
    },
      cache: false,
      success:function(response) {
        window.onbeforeunload = null;
      //   $(".login body").css({
      //     opacity: "1",
      //     cursor: "auto"
      // });
        var resValue = jQuery.parseJSON(response);
        if(resValue['message'] == "Success Found") {
          const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
              opacity: "1!important",
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer; 
            }
          });
          Toast.fire({
            icon: "success",
            title: "Succesfully Login",
          });
          setTimeout( function() {
            window.location.href="dashboard";
          },3000);
        }
        else {
          const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
              opacity: "1!important",
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer; 
            }
          });
          Toast.fire({
            icon: "error",
            title: "Authentication Failed",
          });
          setTimeout(function() {
            location.reload();
          },1500);
        }
      } 
      });
    }
      });
    });

