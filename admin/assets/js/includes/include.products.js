$(function() {
   $('#btn-save').on('click', function() {
      var id = $('#id').val();
      var title = $('#title').val();
      var image = $('#ppi-img').val();
      var content = $('#products-content').val();
      var status = $('#status').val();

      if(title == "" || content == ""){
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
       submit(id, title, image, content, status);
      }
   })

   
    // $(function(){
    //     Test = {
    //         UpdatePreview: function(obj){
    //           // if IE < 10 doesn't support FileReader
    //           if(!window.FileReader){
    //              // don't know how to proceed to assign src to image tag
    //           } else {
    //              var reader = new FileReader();
    //              var target = null;
                 
    //              reader.onload = function(e) {
    //               target =  e.target || e.srcElement;
    //                $("img").prop("src", target.result);
    //              };
    //               reader.readAsDataURL(obj.files[0]);
    //           }
    //         }
    //     };
    // });

   $('#addPosition').on('click', function() {
       $('#staticBackdrop').addClass('addPositionModal').modal('show');
       $('#modalTitle').html('<i class="fas fa-plus"></i> Add New Product');

      //  $('#news-id"').val('');
       $('#products-title').val('');
       $('#products-content').val('');
    //    $('#productsImg').val('');

    //    $('#sort_by').val(0);
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
   })

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

// })

// $('#myform').on('submit', function(e){
//     e.preventDefault();
//         var formData = new FormData(this);

//         // var img = img.substring(img.lastIndexOf("\\") + 1, img.length);
//         $.ajax({
//             type: "POST",
//             url: 'controller/controller.communication_arts.php?mode=updateContent',
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             success:function(data){
//                 $('#preloader').show();
//                 window.localStorage.setItem("stat", "success");
//                 window.location.href="communication_arts.php";
          
//                 findImage(data);
           
//             }
//         });
//     });
})
function  submit(id, title, image, content, status) {
   $.ajax({
       url: '../controller/controller.products.php?mode=updateProducts',
       method: 'POST',
       data: {
           id:id, 
           title:title, 
           image:image,
           content:content, 
           status:status
       },
       success:function() {
           $('#preloader').show();
           window.localStorage.setItem("stat", "success");
          //  window.location.href="";
       }
   });
}

// function updateLink(id, course, sort_by, status) {
//    $('#staticBackdrop').addClass('updateModal').modal('show');
//    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> ' + course);

//    $('#course_id').val(id);
//    $('#course').val(course);
//    $('#sort_by').val(sort_by);
//    $('#status').val(status);

//    $('.submit-btn').on('click', function() {
//       var course_id = $('#course_id').val();
//       var course = $('#course').val();
//       var sort_by = $('#sort_by').val();
//       var status = $('#status').val();

//       if(course == "" || course == null) {
//            errorAlert();
//       } else {
//            updateCourse(course_id, course, sort_by, status);
//       }
//    })

//    $('.closeBtn').on('click', function() {
//        window.location.href="communication_arts.php";
//    });
// }

function  addProduct(title, content, image, status){
   $.ajax({
       url: '../controller/controller.products.php?mode=addProduct',
       method: 'POST',
       data: {
         //   id:id,
           title:title,
           content:content,
           image:image,
        //    sort_by:sort_by,
           status:status,
       },
       cache: false,
       contentType: false,
       processData: false,

       success:function() {
        //    $('#preloader').show();
           window.localStorage.setItem("stat", "success");
        //    window.location.href="";
       }
   });
}

function updateCourse(course_id, course, sort_by, status) {
   $.ajax({
       url: 'controller/controller.news-events.php?mode=updateCourse',
       method: 'POST',
       data: {
           course_id:course_id,
           course:course,
           sort_by:sort_by,
           status:status
       },
       success:function() {
           $('#preloader').show();
           window.localStorage.setItem("stat", "success");
           window.location.href="communication_arts.php";
       }
   })
}

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

// function deleteLink(id) {

//    Swal.fire({
//    title: 'Please confirm to Delete',
//    text: "You won't be able to revert this!",
//    icon: 'warning',
//    showCancelButton: true,
//    confirmButtonColor: '#3085d6',
//    cancelButtonColor: '#d33',
//    allowOutsideClick: false,  
//    confirmButtonText: 'Confirm'
//    }).then((result) => {
//        if (result.isConfirmed) {
//            $.ajax({
//                url: 'controller/controller.news-events.php?mode=deleteCourse',
//                method: 'POST',
//                data: {
//                    id:id
//                },
//                success: function(response) {
//                    var resValue = jQuery.parseJSON( response );

//                    if(resValue['message'] == "Delete Success") {
//                        Swal.fire(
//                            'Deleted Successfully!',
//                            '',
//                            'success'
//                        ).then(function(){
//                         //    $('#preloader').show();
//                         //    window.location.href = "news-events/";
//                        });
//                     alert("deleted");
//                    } else  {
//                        Swal.fire(
//                            'Error!',
//                            'Opps! Something went wrong.',
//                            'error'
//                        ).then(function(){
//                         //    $('#preloader').show();
//                         //    window.location.href = "news-events/";
//                        });
//                    }

//                }
//            })
//         }
//     })

// }
