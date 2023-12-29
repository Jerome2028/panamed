$(document).ready(function () {
  $(#login).on("submit", function (e) {
      e.preventDefault();
// function submitdata() { 
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
        submitdata:"submitdata",
        user_email:user_email,
        user_password:user_password,
      },
      cache: false,
      success:function(data) {

        alert(data);
      } 
      }
      )};
      });
    });

