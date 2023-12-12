$( function() {
    $.get( "http://localhost/dev_site/controller/controller.search.php?mode=products", function(data) {
        var res = JSON.parse(data);
        console.log(res);
        $( "#search" ).autocomplete({
            source: res
        });
    });

    $("#search_btn").click(function() {
        var tags = $("#search").val();
        window.location.replace("https://inmed.com.ph/direct/index.php?route=product/search&search=" + tags);
    })

    // $.get( "https://inmed.com.ph/dev_site/controller/controller.search.php?mode=manuals", function(data) {
        $.get( "http://localhost/dev_site/controller/controller.search.php?mode=manuals", function(data) {
        var res = JSON.parse(data);
        console.log(res);
        $( "#manuals" ).autocomplete({
            source: res
        });
    });

    $("#search_manuals").click(function() {
        var tags = $("#manuals").val();
        window.location.replace("https://localhost/dev_site/assets/static/Manuals/" + tags);
    })
});
var input = document.getElementById("search");
var input = document.getElementById("manuals");
input.addEventListener("keypress", function(event) {

    if (event.key === "Enter") {
      event.preventDefault();

      document.getElementById("search_btn").click();
    }
    if (event.key === "Enter") {
        event.preventDefault();
  
        document.getElementById("search_manuals").click();
      }
  });