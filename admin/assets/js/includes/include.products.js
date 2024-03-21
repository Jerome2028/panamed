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

    $('.closeBtn').on('click', function() {
            window.location.reload();
    });
});

$('.addProducts').on('submit', function(e) {
    e.preventDefault();
    var thumbnail = $('#productsImg')[0].files.length;
    var title = $('#products-title').val();

    if (title == ""){
        Toastify({
        text: "Title required!",
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

    if ($('#products-content').summernote('isEmpty')){
        Toastify({
        text: "content required!",
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
    if (thumbnail === 0 ) {
        Toastify({
        text: "Image Required!",
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
    var action = $(this).attr("action");
    $.ajax({
    type: "POST",
    url: action,
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success:function(data){
    var resValue = jQuery.parseJSON(data);
    if(resValue['message']== "Success Insert"){
    window.localStorage.setItem("stat", "success");
    window.location.reload();
    }
    }
    });
});

$('.updateProducts').on('submit', function(e) {
e.preventDefault();
var title = $('#productNames').val();
if ((title == "")|| ($('#products-content').summernote('isEmpty'))) {
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
    var formData = new FormData(this);
    var actions = $(this).attr("action");
    var types = $(this).attr("method");
    $.ajax({
    type: types,
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
