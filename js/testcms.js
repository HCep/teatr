var $j = jQuery.noConflict();


$j(document).keydown(
  function(e)
  {    
      if (e.keyCode === 39) {      
          $j('.theatre-tab-link:focus').next().focus();
 
      }
      if (e.keyCode === 37) {      
          $j('.theatre-tab-link:focus').prev().focus();
 
      }
  }
);

$j(function() {                       
  $j(".navbar-toggle").click(function() {  
    $j(".slideleft").addClass("show-menu"); 
    $j(".slideleft").removeClass("red-nav");
   
  });
  $j(".red-navbar-toggle").click(function() {  
    $j(".slideleft").addClass("show-menu"); 
    $j(".slideleft").removeClass("red-nav");
       
  });});


  $j(document).keydown(function(e){
    if (e.keyCode === 27){
      $j(".navbar-close").click();
    
    }
    
});
  $j(function(){
$j(".navbar-close").click(function(){
  $j(".slideleft").removeClass("show-menu");
  $j(".slideleft").addClass("red-nav");
  
})
  });

  $j("#vid").prop('muted', true);
  $j("#mute-video").click( function (){
      if( $j("#vid").prop('muted') )
      {
          $j("#vid").prop('muted', false);
      }
  
      else {
      $j("#vid").prop('muted', true);
      }
  
  });

  $j(document).keydown(function(e){
    if(e.keyCode === 13){
      $j('.theatre-tab-link').click();
    }
  });

  $j(document).ready(function() {   
 
    $j('#tabs li a:not(:first)').addClass('inactive');
    $j('.kontainer').hide();
    $j('.kontainer:first').show();
      
    $j('#tabs li a').click(function(){
        var t = $j(this).attr('id');
      if($j(this).hasClass('inactive')){ 
        $j('#tabs li a').addClass('inactive');           
        $j(this).removeClass('inactive');
        
        $j('.kontainer').hide();
        $j('#'+ t + 'C').show();
     }
    });
    
    });
    

$j(document).ready(function() {

  $j(window).scroll(function(){
    if($j(this).scrollTop()>40){
      $j('#topBtn').fadeIn();
    } else
    {
      $j('#topBtn').fadeOut();
    }
    }
  );
$j("#topBtn").click(function(){
  $j('html, body').animate({scrollTop: 0}, 800);

});


});