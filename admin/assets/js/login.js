$(function() {
  $(".login").on("submit", function(e) {
    e.preventDefault();
    
  var error = false;
  var message = '';
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
  return;
  }
    $(".login-dashboard").css({
    opacity: "0.5",
    cursor: "wait"
});
    var $inputs = $(this).find("input, select, button, textarea");
    $inputs.prop("disabled", true);
    function submit(user_email, user_password) {
      $.ajax ({
      type:'POST',
      url:'controller/controller.login.php?mode=login',
      data:{
        user_email:user_email,
        user_password:user_password,
      },
      beforeSend: function() {
        $("input").prop("disabled", true);
        $(".login-dashboard").css({
            transition: "opacity 0.5s",
            cursor: "wait"
        });
    },
      cache: false,
      success:function(response) {
      $inputs.val("");
      $inputs.prop("disabled", false);
        window.onbeforeunload = null;
        var resValue = jQuery.parseJSON(response);
        if(resValue['message'] == "Success Found") {
          const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
              opacity: "1",
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
          },2000);
          $inputs.prop("disabled", false);
        }
        else {
          const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
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
            // location.reload();
            $(".login-dashboard").css({
              opacity: "1",
              cursor: "default"
          });
          },2000);
        }
      } 
      });
    }
  });
});
