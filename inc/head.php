<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A website explaining the TJ Reverb project - the second cubesat designed and built by students at TJHSST">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>
        <?php
        if(isset($page_title)) {
            echo $page_title; 
        } else {
            echo "TJ REVERB";
        }
        ?>
    </title>
    
    <?php require("inc/imports-css.php"); ?>
</head>