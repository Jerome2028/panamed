$(window).on('scroll', function(){
    if($('.count-to').visible(false)) {
        $(window).off('scroll');
        animateCountOnScroll(true);
        
    }
})

function animateCountOnScroll(visible) {
    if(visible) {
        $('.count-to').each(function() {
            var $this = $(this),
            countTo = $this.attr('data-to');
            $({ countNum: 0}).animate({
            countNum: countTo
            },
            {
            duration: 1000,
            easing:'linear',
            step: function() {
            $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }
}

setTimeout(function(){
    $('#customer').html('20');
    $('#products').html('651');
    $('#resellers').html('888');
}, 1000);

$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});

function scaleCaptcha(elementWidth) {
    var reCaptchaWidth = 304;
      var containerWidth = $('.container').width();
    

    if(reCaptchaWidth > containerWidth) {
   
      var captchaScale = containerWidth / reCaptchaWidth;
      
      $('.g-recaptcha').css({
        'transform':'scale('+captchaScale+')'
      });
    }
  }
  // $(function() { 
  //   scaleCaptcha();
  //   $(window).resize( $.throttle( 100, scaleCaptcha ) );
    
  // });

  var rippleEffect = (function(){
    var className, ripple;
    
    className = 'btn';
    ripple = document.createElement("div")
    ripple.classList.add('ripple')
    
    document.addEventListener('mousedown', function(e) {
      if (e.target.classList.contains(className)) {
        ripple.setAttribute("style", "top: " + e.offsetY + "px; left: " + e.offsetX + "px");
        e.target.appendChild(ripple)
      }
    })
  })();

  // $(".nav-link").on("click", function(){
  //   $(".nav-link.active").removeClass("active");
  //   $(this).addClass("active");
  // });

  marker = new google.maps.Marker({
    map:map,
    // draggable:true,
    // animation: google.maps.Animation.DROP,
    position: new google.maps.LatLng(14.60582070619608, 121.08079752257223),
    icon: 'http://cdn.com/my-custom-icon.png' // null = default icon
  });

