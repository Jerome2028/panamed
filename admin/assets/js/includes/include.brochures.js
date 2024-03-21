$(function() {
    var status_module = window.localStorage.getItem("stat");
    localStorage.clear();
    if (status_module == "success") {
     Toastify({
         text: "Success",
         duration: 3000,
         newWindow: true,
         close: true,
         gravity: "top",
         positionRight: true,
         backgroundColor: "#198754",
         opacity:"0!important"
       }).showToast();
    }

    $("#brochureImg").change(function() {
        if (this.files && this.files[0]) {
    
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#brochurePreview').attr('src', e.target.result);
        }
    
        reader.readAsDataURL(this.files[0]);
        }
    });
    $('#staticBackdrop').on('hidden.bs.modal', function (e) {
        $('.closeBtn').on('click', function() {
        $("#brochuresAdd").trigger("reset");

        });      
    }); 
});

$('.addBrochures').on('submit', function(e) {
e.preventDefault();
var title = $('#brochure-name').val();
var thumbnail = $('#brochureImg')[0].files.length;
var pdf = $('#pdf-upload')[0].files.length;
if(title == "") {
    Toastify({
    text: "input Field Required!",
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
if((thumbnail === 0) || (pdf === 0)) {
    Toastify({
    text: "Image and Files Required!",
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
var formData = new FormData(this);
$.ajax({
    type: "POST",
    url: "../controller/controller.brochures.php?mode=addBrochure",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success:function(data){
    console.log(data);
    var resValue = jQuery.parseJSON(data);
        if(resValue['message'] == "Insert Success") {

        window.localStorage.setItem("stat", "success");
        window.location.reload();
    }
    else {
        alert("Oops! Something went wrong!");
    }
}
});
});

$('.updateBrochures').on('submit', function(e) {
e.preventDefault();
var titlee = $('#title').val();

if(titlee == "") {
Toastify({
text: "input Field Required!",
duration: 3000,
newWindow: true,
close: true,
gravity: "top",
positionRight: true,
backgroundColor: "#c46868",
opacity:"0!important"
}).showToast();
return;
} 

var types = $(this).attr("method");
var formData = new FormData(this);
// $inputs.prop("disabled", true);

    $.ajax({
        type: types,
        url: "../controller/controller.brochures.php?mode=updateContent",
        data: formData,
        datatype: "JSON",
        cache: false,
        contentType: false,
        processData: false,
        success:function(data){
        var resValue = jQuery.parseJSON(data);
            if(resValue['message'] == "Update Success") {
            window.localStorage.setItem("stat", "success");
            window.location.reload();
        }
        else {
            // alert("Oops! File missing!");
            Toastify({
                text: "Oops!You need to upload files and Image",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                positionRight: true,
                backgroundColor: "#c46868",
                opacity:"0!important"
            }).showToast();
        }
    }
});
});

function deleteBrochures(id) {
Swal.fire({
  title: "Please confirm to Delete",
  icon: 'warning',
  showDenyButton: true,
  confirmButtonText: "Confirm"
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: '../controller/controller.brochures.php?mode=deleteBrochures',
        method: 'POST',
        data: {
            id:id
        },
        success: function(response) {
            var resValue = jQuery.parseJSON(response);

            if(resValue['message'] == "Success Delete") {
            var resValue = jQuery.parseJSON(response);
                Swal.fire("Saved!", "", "success");
                Swal.fire(
                    'Deleted Successfully!',
                    '',
                    'success'
                ).then(function(){
                 //    $('#preloader').show();
                 window.location.reload();
                });
            } else  {
                Swal.fire(
                    'Error!',
                    'Opps! Something went wrong.',
                    'error'
                ).then(function(){
                 //    $('#preloader').show();
                 window.location.reload();
                });
            }

        }
    })

  }
});
}

