      var isLoaded;
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '377350409365760',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v2.10'
        });
        FB.AppEvents.logPageView();
        isLoaded = true;
      };
    
      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      var token;
      

      function beepboop() {
          if (!isLoaded) {
            setTimeout("beepboop();", .1);
            return;
          } 
          else {
            FB.api(
              '/me/feed',
              'GET',
              { access_token : 'EAAFXMr0bKQABAGKKN4uP0t8vKbVLGVFzgU6FZBWeaNwq4ZBcZA1gcT0eRvkHrLPdYWNno5JKg4heh6SnZC07ywla7UimYScHNbczZCEZBoJflwzynsW7rSL3RbqHXBQs3MN8hbvEO34EXj4lc6tKl9D2YHXJCwqDb0WfowsgHnOQZDZD',
                "fields":"id"},
                function(response) {
                  //$(document).ready(function() {

                    for(var i=1; i<=12; i++){
                      //alert(upArr[i]);
                      $("#update" + i).attr('data-href', "https://www.facebook.com/" + response.data[i].id.split("_")[0] + "/posts/" + response.data[i].id.split("_")[1] + "/");
                      //alert(response.data[i].id.split("_")[0]);
                      //alert(response.data[i].id.split("_")[1]);
                      FB.XFBML.parse()
                      //https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FTJCubeSat%2Fposts%2F" + response.data[i].id.split("_")[1] + "&width=auto";
                    }
                  //});
                    
                  //}
              }
             
            
          );
          
         /* FB.api(
            '/me',
            'GET',
            {"fields":"posts{message,picture}"},
            function(response) {
              var upArr = ["update1", "update2", "update3", "update4", "update5", "update6", "update7", "update8", "update9", "update10", "update11", "update12"];
              for(var i=0; i<upArr.length; i++){ 
                document.getElementById("update1").innerHTML = response.data[i].message;
              }
                
            }
        );*/

        }


      }
      