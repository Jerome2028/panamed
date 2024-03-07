$(function() {
    $("#productsImg").change(function() {
        if (this.files && this.files[0]) {
    
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#productsPreview').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(this.files[0]);
        }
    });

    $('#products-content').summernote({
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

   $('#addPosition').on('click', function() {
       $('#staticBackdrop').addClass('addPositionModal').modal('show');
       $('#modalTitle').html('<i class="fas fa-plus"></i> Add New Product');

      //  $('#news-id"').val('');
       $('#products-title').val('');
       $('#products-content').val('');
       $("select option:checked").val();

       $('.submit-btn').on('click', function() {

         var id = $('#news-id').val();
          var title = $('#products-title').val();
          var content = $('#products-content').val();
        //   var image = $('#productsImg').val();
        //   var sort_by = $('#sort_by').val();
          var status = $('#status').val();

          if(title == "" || content == "") {
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
               addProduct(title, content, image, status);
          }
       })

       $('.closeBtn').on('click', function() {
            window.location.reload();
       });
   });

   var status_module = window.localStorage.getItem("stat");
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
       localStorage.clear();
   }
});

$('.updateProducts').on('submit', function(e) {
    e.preventDefault();
var title = $('#productName').val();
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
var formData = new FormData(this);
$.ajax({
    type: "POST",
    url: "../controller/controller.products.php?mode=updateProducts",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success:function(data){
    console.log(data);
    var resValue = jQuery.parseJSON(data);
        if(resValue['message'] == "Update Success") {
            // alert("Update Success");
        // window.localStorage.setItem("stat", "success");
        window.location.reload();
    }
    else {
        alert("failed");
    }
}
});
});


function deleteLink(id) {
Swal.fire({
  title: "Please confirm to Delete",
  icon: 'warning',
  showDenyButton: true,
  confirmButtonText: "Save"
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: '../controller/controller.products.php?mode=deleteProduct',
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
function productsTable() {
    $('#products-table').DataTable({
        // responsive:true;
        columns: [null,{ width: '20%' }, { width: '12%' }, null, null, { width: '14%' }]
    });
    $('#productsSearch').on('keyup', function () {
    table.search(this.value).draw();
    });

  }
