$('#btn-save').on('click', function() {
    var id = $('#id').val();
    var title = $('#title').val();
    var content = $('#news-content').val();
    var status = $('#status').val();

    if(title == "" || $('#news-content').summernote('isEmpty')){
         errorAlert();
    } else {
     submit(id, title,content, status);
    }
 })

 function submit(id, title,content, status) {
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