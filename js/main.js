$(document).ready(function(){
$('.nav_item_link').on('click', function(e) {
  e.preventDefault();

  showSection($(this).attr('href'), true);
});
showSection(window.location.hash, false);
});

$(window).scroll(function(){

checkSection();
});
function showSection(section, isAnimate){
  var
  direction = section.replace(/#/,''),
  regSection = $('.section').filter('[data-section="' + direction +'"]'),
  regSectionPos = regSection.offset().top;

  if (isAnimate) {
    $('body, html').animate({scrollTop: regSectionPos}, 500);
  }
    else {
      $('body, html').scrollTop(regSectionPos);
    }
  }

function checkSection(){
  $('.section').each(function(){
    var
    $this = $(this),
    topEdge = $this.offset().top+200,
    bottomEdge = topEdge + $this.height(),
    wScroll = $(window).scrollTop();

    if (topEdge < wScroll && bottomEdge > wScroll) {
      var
      currentId = $this.data('.section'),
      regLink = $('.nav_item_link').filter('[href="#' + currentId +'"]');
      regLink.closest('.nav_item').addClass('active')
      .siblings().removeClass('active');
      window.location.hash = currentId;
    }

  });
}
