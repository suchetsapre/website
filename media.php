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
        <div class="row">
            <div class="col-md-12">
                <h1>Images and Video</h1>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-4">
                <img class="media-image img-fluid img-thumbnail" src="assets/img/media/design.png">
                <p class="media-img-caption text-light">Design</p>
            </div>
            <div class="col-md-4">
                <img class="media-image img-fluid img-thumbnail" src="assets/img/media/feasibility-presentation.jpg">
                <p class="media-img-caption text-light">Feasibility Presentation</p>
            </div>
            <div class="col-md-4">
                <img class="media-image img-fluid img-thumbnail" src="assets/img/media/balloon-launch2.png">
                <p class="media-img-caption text-light">Weather Balloon Testing</p>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-12">
                <video width="100%" autoplay loop>
                    <source src="assets/img/subsystems/cad/gcad.mp4" type="video/mp4">
                </video>
                <p style="margin-left: -5px;" class="media-img-caption text-light">Design Video</p>
            </div>
        </div>
    </section>
    
    <section class="media-container container py-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Documents</h1>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-4">
                The Merit Review, which contains the outline and specifications of TJREVERB, can be found
                <a href="assets/pdf/merit-review.pdf" rel="nofollow" target="_blank">here</a>. 
            </div>
            <div class="col-md-4">
                The Feasibility Review, which outlines the logistics and overall feasibility of the TJREVERB project, can be found
                <a href="assets/pdf/feasibility-review.pdf" rel="nofollow" target="_blank">here</a>. 
            </div>
            <div class="col-md-4">
                The APRS Radio Guide which details the process of setting up the APRS radio, can be found
                <a href="https://docs.google.com/document/d/1EdsT4j9h4Mfo8XkUpSk1f3b30yDYg-lx9Cxqp7mObMY/edit?usp=sharing">here</a>.
            </div>
        </div>
    </section>
	
	<?php require("inc/footer.php"); ?>

</div>
</div>

<?php require("inc/imports-js.php"); ?>
	
</body>

</html>
