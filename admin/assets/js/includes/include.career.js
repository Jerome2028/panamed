$(function() {
    $('#careers-content').summernote({
        height: 300,
        placeholder: 'Type Here...',
        disableDragAndDrop: true,
        blockqouteBreakingLevel: 2,
        fontSizeUnit: 'pt',
        lineHeight: 20,
        dialogsInBody: true,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear', 'fontname', 'fontsize', 'color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen']],
        ],
        
        popover: {
            image: [
                ['custom', ['imageAttributes']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
        },
        lang: 'en-US',
        imageAttributes:{
            icon:'<i class="fas fa-sm fa-edit"/>',
            removeEmpty:false,
            disableUpload: false
        }
    });

   $('#btn-save').on('click', function() {
      var id = $('#careers-id').val();
      var title = $('#careers-title').val();
      var content = $('#careers-content').val();
      var status = $('#status').val();

      if(title == "" || $('#careers-content').summernote('isEmpty')){
           errorAlert();
      } else {
       submit(id, title,content, status);
      }
   })

   $('#addPosition').on('click', function() {
       $('#staticBackdrop').addClass('addPositionModal').modal('show');
       $('#modalTitle').html('<i class="fas fa-plus"></i> Add New Content');

      //  $('#news-id"').val('');
       $('#careers-title').val('');
       $('#careers-content').val('');
       $('#sort_by').val(0);
       $("select option:checked").val();

       $('.submit-btn').on('click', function() {
         // var id = $('#news-id').val();
          var title = $('#careers-title').val();
          var content = $('#careers-content').val();
          var sort_by = $('#sort_by').val();
          var status = $('#status').val();

          if(title == "" || content == "") {
            // $(this).css('border-color', 'red');
            //    errorAlert();
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
          } else {
            addCareers(title, content, sort_by, status);
          }
       })

       $('.closeBtn').on('click', function() {
           window.location.href="";
       });
   })

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

})

function submit(id, title,content, status) {
   $.ajax({
       url: '../controller/controller.careers.php?mode=updateCareers',
       method: 'POST',
       data: {
           id:id, 
           title:title, 
           content:content, 
           status:status
       },
       success:function() {
           $('#preloader').show();
           window.localStorage.setItem("stat", "success");
        //    window.location.href="";
       }
   });
}

function addCareers(title, content, sort_by, status){
   $.ajax({
       url: '../controller/controller.careers.php?mode=addCareers',
       method: 'POST',
       data: {
         //   id:id,
           title:title,
           content:content,
           sort_by:sort_by,
           status:status
       },
       success:function() {
        //    $('#preloader').show();
           window.localStorage.setItem("stat", "success");
           window.location.href="";
       }
   });
}
function deleteCareers(id) {
Swal.fire({
  title: "Please confirm to Delete",
  icon: 'warning',
  showDenyButton: true,
  confirmButtonText: "Confirm"
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: '../controller/controller.careers.php?mode=deleteCareers',
        method: 'POST',
        data: {
            id:id
        },
        success: function(response) {
            var resValue = jQuery.parseJSON(response);

            if(resValue['message'] == "Delete Success") {
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