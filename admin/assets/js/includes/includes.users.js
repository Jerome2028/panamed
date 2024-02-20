$(function() {
    $("#imgInput").change(function() {
        if (this.files && this.files[0]) {
    
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#imgPreview').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(this.files[0]);
        }
    });

    
var status_module = window.localStorage.getItem("stat");
localStorage.clear();
if (status_module == "success") {
 Toastify({
    //  text: "Content Update",
    text:'User Settings Applied!',
     duration: 3000,
     newWindow: true,
     close: true,
     gravity: "top",
     positionRight: true,
     backgroundColor: "#198754",
     opacity:"0!important"
   }).showToast();
}
});
    $('.profileForm').on('submit', function(e){
        e.preventDefault();
        var error = false; var message = '';
        var fname  = $(this).find("input[name='fname']").val();
        var lname = $(this).find("input[name='lname']").val();

        if ((fname  == "") || (lname == "")) {
            error = true;
            message = 'User info required!';
        }
        if (error){
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

        var $inputs = $(this).find("input, select, button, textarea");
        var action = $(this).attr("action");
        var type = $(this).attr("method");
        var formData = new FormData(this);

        // $inputs.prop("disabled", true);
    
			$.ajax({
				type: type,
                url: action,
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				success:function(data){
                console.log(data);
                var resValue = jQuery.parseJSON(data);
                    if(resValue['message'] == "Success") {
                        alert("okay!")
                    window.localStorage.setItem("stat", "success");
                    window.location.reload();
				}
                     else {
                alert("failed");
            }
            }
			});
		});
  

