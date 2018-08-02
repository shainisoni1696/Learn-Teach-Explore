$(document).ready(function(){
    var scrollTop = 0;
    $(window).scroll(function(){
      scrollTop = $(window).scrollTop();
       $('.counter').html(scrollTop);
      
      if (scrollTop >= 100) {
        $('#global-nav').addClass('scrolled-nav');
        document.getElementById("nitk-logo").src="nitktnpo.png";
        document.getElementById("nitk-logo").style.width="20%";
        document.getElementById("navbar").style.height="60px";
      } else if (scrollTop < 100) {
        $('#global-nav').removeClass('scrolled-nav');
        document.getElementById("nitk-logo").src="nitk-logo.png";
        document.getElementById("nitk-logo").style.width="50%";
        document.getElementById("navbar").style.height="120px";
      } 
      
    }); 
    
  });