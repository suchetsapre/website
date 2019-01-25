<?php
	$page_title = "TJ REVERB - Updates";
?>

<!DOCTYPE html>
<html lang="en">

<?php require("inc/head.php"); ?>

<body>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div id="page">
<div class="site-wrapper">

	<?php require("inc/header.php"); ?>

	<section class="updates-container container py-4">
        <div class="row">
            <div class="col-md-6 py-2">
                <h1>Facebook</h1>
                <div class="fb-page mx-auto" 
                    data-href="https://www.facebook.com/TJCubeSat/" 
                    data-tabs="timeline" 
                    data-small-header="false" 
                    data-adapt-container-width="true" 
                    data-hide-cover="false" 
                    data-show-facepile="true"
                    data-width="1000"
                    data-height="70vh">
                    <blockquote cite="https://www.facebook.com/TJCubeSat/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/TJCubeSat/">
                            Posts by TJREVERB
                        </a>
                    </blockquote>
                </div>
            </div>
            <div class="col-md-6 py-2">
                <h1>Twitter</h1>
                <a class="twitter-timeline" 
                    href="https://twitter.com/TJ_REVERB?ref_src=twsrc%5Etfw"
                    data-height="70vh">
                    Tweets by TJREVERB
                </a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
	</section>

	<?php require("inc/footer.php"); ?>

</div>
</div>

<?php require("inc/imports-js.php"); ?>
	
</body>

</html>
