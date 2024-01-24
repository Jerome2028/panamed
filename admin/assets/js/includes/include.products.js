$(function() {
   $('#btn-save').on('click', function() {
      var id = $('#id').val();
      var title = $('#title').val();
      var content = $('#news-content').val();
      var status = $('#status').val();

      if(title == "" || content == ""){
           errorAlert();
      } else {
       submit(id, title, content, status);
      }
   })

   $('#addPosition').on('click', function() {
       $('#staticBackdrop').addClass('addPositionModal').modal('show');
       $('#modalTitle').html('<i class="fas fa-plus"></i> Add New Position');

      //  $('#news-id"').val('');
       $('#news-title').val('');
       $('#news-content').val('');
       $('#sort_by').val(0);
       $("select option:checked").val();

       $('.submit-btn').on('click', function() {
         // var id = $('#news-id').val();
          var title = $('#news-title').val();
          var content = $('#news-content').val();
          var sort_by = $('#sort_by').val();
          var status = $('#status').val();

          if(title == "" || content == null) {
            //    errorAlert();
            alert("walang laman!");
          } else {
               addCourse(title, content, sort_by, status);
          }
       })

       $('.closeBtn').on('click', function() {
           window.location.href="";
       });
   })

   var status_module = window.localStorage.getItem("stat");
   if (status_module == "success") {
    //    sucessAlert();
    alert ("tagumpay!!");
       localStorage.clear();
   }

})

function submit(id, title, content, status) {
   $.ajax({
       url: '../controller/controller.news-events.php?mode=updateContent',
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

function addCourse(title, content, sort_by, status){
   $.ajax({
       url: '../controller/controller.news-events.php?mode=addCourse',
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
        //    window.location.href="communication_arts.php";
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
        url: '../controller/controller.news-events.php?mode=deleteCourse',
        method: 'POST',
        data: {
            id:id
        },
        success: function(response) {
            var resValue = jQuery.parseJSON(response);

            if(resValue['message'] == "Delete Success") {
            var resValue = jQuery.parseJSON(response);
                alert (resValue);
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
