jQuery(document).ready(function(){
  console.log('jquery loaded');

  jQuery('.mobile-menu').click(function() {
    jQuery('.mobile-menu').toggleClass('change');
    jQuery('.mobile-nav').slideToggle(300);
  });

  jQuery('.mobile-nav .menu-item-has-children').click(function(e) {
    e.preventDefault();
    jQuery('.mobile-nav .sub-menu').slideToggle(300);
    jQuery('.mobile-nav .menu-item-has-children').unbind('click').click();
  });

  jQuery('.site-header .menu-item-has-children').hover(function() {
    jQuery('.site-header .sub-menu').slideToggle(100);
  });

  jQuery('.intro').fadeIn(1000);
 });