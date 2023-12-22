
function submitdata() { 
    var error = false; var message = '';
    var user_email = $('#ic_user').val();
    var user_password = $('#ic_pass').val();
    
    if ((user_email  == "") || (user_password  == "")) {
        error = true;
        message = '';
    }
     else {
      submit(user_email, user_password)
  }
}
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
        beforeSend:function(){
          $(".login-form, body").css({
            opacity: "0.5",
            cursor: "wait"
        });
        },
        success:function(response) {
          var responseVal = jQuery.parseJSON(response);

          if (responseVal["message"] == "Success") {
            Swal.fire({
              title: 'Successfully Login!',
              text: 'Welcome Back '+ user_email,
              icon: 'success',
              confirmButtonColor: '#3085d6'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href="dashboard/";
              } else {
                  window.location.href="logout/";
              }
          })
              }
           else {
        //  console.log(response);
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: 'error',
            title: 'Username and Password not Match!'
          })
          }

    
        }
        }
        )};
  

