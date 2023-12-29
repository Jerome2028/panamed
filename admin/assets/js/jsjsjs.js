
function submitdata() { 
  var error = false; var message = '';
  var user_email = $('#ppi_user').val();
  var user_password = $('#ppi_pass').val();
  
  if ((user_email  == "") || (user_password  == "")) {
      error = true;
      message = 'Authentication failed.';
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
  $(".login-form, body").css({
      opacity: "0.5",
      cursor: "wait"
  });
},
      cache: false,
      beforeSend:function(){
        $(".login-form, body").css({
          opacity: "0.5",
          cursor: "wait"
      });
      },
      success:function(response) {

        if (response == "Action Complete") {
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
            title: responseVal,
          });
          // setTimeout(function() {
          //   alert("correct")
          // },3000);
            }
         else {
      //  console.log(response);
      alert("wrong");
        }

  
      }
      });
    }
