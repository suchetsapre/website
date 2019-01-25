<?php
	$page_title = "TJ REVERB - Media";
?>

<!DOCTYPE html>
<html lang="en">

<?php require("inc/head.php"); ?>

<body>
<div id="page">
<div class="site-wrapper">

    <?php require("inc/header.php"); ?>
    
	<section class="media-container container py-4">
        <div class="row py-2">
            <div class="col-md-4">
                <img class="media-image img-fluid img-thumbnail" src="assets/img/DesignProcess/Design.PNG">
                <p class="media-img-caption text-light">Design</p>
            </div>
            <div class="col-md-4">
                <img class="media-image img-fluid img-thumbnail" src="assets/img/DesignProcess/FeasibilityPres.jpg">
                <p class="media-img-caption text-light">Feasibility Presentation</p>
            </div>
            <div class="col-md-4">
                <img class="media-image img-fluid img-thumbnail" src="assets/img/balloon/BalloonLaunchNew.png">
                <p class="media-img-caption text-light">Balloon Test Launch</p>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-12">
                <video width="100%" autoplay loop>
                    <source src="assets/img/SubSystemImgs/CAD/GCADVid.mp4" type="video/mp4">
                </video>
                <p style="margin-left: -5px;" class="media-img-caption text-light">Design Video</p>
            </div>
        </div>
    </section>
    
    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
            <div class="mdl-card__supporting-text">

                <h4>Important Documents</h4>
                <ul class="bigUL">
                    <li> The Merit Review, which contains the outline and specifications of TJREVERB, can be found
                        <a href="assets/pdf/merit-review.pdf" rel="nofollow" target="_blank">here</a>. </li>
                    <li>The Feasibility Review, which outlines the logistics and overall feasibility of the TJREVERB project, can
                        be found
                        <a href="assets/pdf/feasibility-review.pdf" rel="nofollow" target="_blank">here</a>. </li>
                    <li> The APRS Radio Guide which details the process of setting up the APRS radio, can be found
                        <a href="https://docs.google.com/document/d/1EdsT4j9h4Mfo8XkUpSk1f3b30yDYg-lx9Cxqp7mObMY/edit?usp=sharing">here</a>.
                    </li>
                </ul>
            </div>
        </div>
    </section>
	
	<?php require("inc/footer.php"); ?>

</div>
</div>

<?php require("inc/imports-js.php"); ?>
	
</body>

</html>