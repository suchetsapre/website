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
	
	<?php require("inc/footer.php"); ?>

</div>
</div>

<?php require("inc/imports-js.php"); ?>
	
</body>

</html>