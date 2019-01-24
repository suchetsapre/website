!function($){

        $("#dropComms").click(function() {
            var drpSrc = $(this).attr("src")
            if (drpSrc=="images/dropdown.png"){
              var newSrc = "images/dropup.png"
              $('img#dropComms[src="' + drpSrc + '"]').attr('src', newSrc);
              $("#commsText").fadeIn(0)
            }
            else if(drpSrc=="images/dropup.png"){
              var newSrc = "images/dropdown.png"
              $('img#dropComms[src="' + drpSrc + '"]').attr('src', newSrc);
              $("#commsText").fadeOut(0)
            }
        });
        $("#dropSoft").click(function() {
            var drpSrc = $(this).attr("src")
            if (drpSrc=="images/dropdown.png"){
              var newSrc = "images/dropup.png"
              $('img#dropSoft[src="' + drpSrc + '"]').attr('src', newSrc);
              $("#softText").fadeIn(0)
            }
            else if(drpSrc=="images/dropup.png"){
              var newSrc = "images/dropdown.png"
              $('img#dropSoft[src="' + drpSrc + '"]').attr('src', newSrc);
              $("#softText").fadeOut(0)
            }
        });


}(window.jQuery);
