!function($){
$('a').click(function (e) {
    e.preventDefault();                   // prevent default anchor behavior
    var scroll = this.getAttribute("href"); // store anchor href

    $('.mdl-layout__tab-bar').children().each(function(){
  
      $(this).on('click', function(){

        setTimeout(function(){
            $(window).scrollTop(0);
          
        });
  }); 

    setTimeout(function(){
         window.location = scroll;
    });       
}); 
});
}(window.jQuery);
