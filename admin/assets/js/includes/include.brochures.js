$(function() {
    var status_module = window.localStorage.getItem("stat");
    localStorage.clear();
    if (status_module == "success") {
     Toastify({
         text: "Content Update",
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
});

   $('.updateBrochures').on('submit', function(e) {
    e.preventDefault();
    var title = $('#title').val();

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
        return;
    } 

      var $inputs = $(this).find("input, select, button, textarea");
      var actions = $(this).attr("action");
      var types = $(this).attr("method");
      var formData = new FormData(this);
      $inputs.prop("disabled", true);

          $.ajax({
              type: types ,
              url: actions,
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
                alert("failed to Update");
            }
          }
      });
   });

   $('#addPosition').on('click', function() {
       $('#staticBackdrop').addClass('addPositionModal').modal('show');
       $('#modalTitle').html('<i class="fas fa-plus"></i> Add New Brochures');

      //  $('#news-id"').val('');
    //    $('#brochure-name').val('');
    //    $('#sort_by').val(0);
    //    $("select option:checked").val();

       $('.submit-btn').on('click', function(e) {
            e.preventDefault();
          var title = $('#brochure-name').val();

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

            var $inputs = $(this).find("input, select, button, textarea");
            var action = $(this).attr("action");
            var type = $(this).attr("method");
            var formData = new FormData(this);
            $inputs.prop("disabled", true);
            
                $.ajax({
                    type: type ,
                    url: action,
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
                        alert("failed");
                    }
                }
            });
          
       });

       $('.closeBtn').on('click', function() {
            window.location.reload()
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
        url: '../controller/controller.brochures.php?mode=deleteContent',
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

