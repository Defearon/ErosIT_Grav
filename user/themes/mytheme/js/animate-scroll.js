var animations = [
  "fadeInLeft",
  "fadeInUp",
  "fadeInDown",
  "fadeInRight",
  "tada",
  "headshake",
  "wobble",
  "zoomIn",
  "jackInTheBox",
  "flash",
  "bounceInLeft",
  "bounceInRight",
  "rubberBand",
];

$(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(element, fullyInView = false)
  {

    var pageTop = $(window).scrollTop();
    var pageBottom = pageTop + $(window).height();
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).height();
    if (fullyInView === true) {
      return ((pageTop < elementTop) && (pageBottom > elementBottom));
    } else {
      return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
    }
   }

   function animateMe(object, animation) {
    if (isScrolledIntoView($(object), $(object).hasClass('fully-in-view')) === true) {
        if ($(object).hasClass('hidden-before') === true) {
            $(object).removeClass('hidden-before');
        }
        $(object).addClass('animate__animated' + ' ' + animation);
    }
   else {
     if ($(object).hasClass('every-scroll') === true) {
        $(object).removeClass('animate__animated' + ' ' + animation);
        $(object).addClass('hidden-before');
      }
   }

   }

  $(window).scroll(function() {
    $.each(animations, function(index, value){
      $('.scroll-'+value).each(function() {
            animateMe(this, 'animate__'+value);
        });
    });
  });
});
