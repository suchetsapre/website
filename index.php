<?php
	$page_title = "TJ REVERB - Home";
?>

<!DOCTYPE html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing pers and
  limitations under the License
-->
<html lang="en">

<?php require("inc/head.php"); ?>

<body>
<div id="page">
<div class="site-wrapper">

	<?php require("inc/header.php"); ?>
	
	<!--here's the mission patch-->
	<div id="index-hero">
		<div class="jumbotron">
			<div class="container my-auto">
				<div class="row">
					<img id="index-hero-img" class="mx-auto img-fluid" src="assets/img/reverb/CubeSat_Logo.png" alt="TJ REVERB Mission Patch">
				</div>

				<div class="container-fluid text-center py-4 text-light">
					<div class="row">
						<h2 class="mx-auto">TJ REVERB</h2>
					</div>
					<div class="row text-uppercase">
						<p>
								<span class="lead" style="font-size: 1.5em;">R</span>esearch and 
								<span class="lead" style="font-size: 1.5em;">E</span>ducation 
								<span class="lead" style="font-size: 1.5em;">V</span>ehicle for the 
								<span class="lead" style="font-size: 1.5em;">E</span>valuation of 
								<span class="lead" style="font-size: 1.5em;">R</span>adio 
								<span class="lead" style="font-size: 1.5em;">B</span>roadcasts
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<section class="container py-4">
		<div class="row">
			<div class="col-md-12">
				<h1>Mission Statement</h1>
				<p>
					The TJ REVERB project is creating a best practice document for building a Nanosatellite while building a 2U
					CubeSat that compares multiple radio systems in Lower Earth Orbit. Additionally,
					TJ REVERB serves as an educational vehicle for teaching students the principles of systems engineering. Beyond
					the rich learning experience designing and constructing a satellite provides the students
					at Thomas Jefferson HSST, the team is committed to a robust local, national, and international outreach program.
				</p>
			</div>
		</div>
	</section>

	<section class="container py-4">
		<div class="row">
			<div class="col-md-12">
				<h1>What is a Cubesat?</h1>
				<p>
					In 1999, California Polytechnic Institute and Stanford University created the specifications for the CubeSat.
					It was determined that the one unit of a CubeSat would be 10cm x 10cm x 11.35 cm and usually no larger than 1.33
					kilograms in mass. The initial purpose of the CubeSat program was to promote skills that were needed to send
					small satellites into Low Earth Orbit (LEO). Eventually, it developed into a concept of much broader use,
					ranging from experimental, commercial,
					and educational uses. Small satellites have become widely accepted as a part of the future in space.
				</p>
			</div>
		</div>
	</section>

	<?php require("inc/footer.php"); ?>

</div>
</div>

<?php require("inc/imports-js.php"); ?>
	
</body>

</html>
