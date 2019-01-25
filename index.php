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

<?php require("inc/header.php"); ?>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700" onload="beepboop();">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

		<main class="mdl-layout__content">

			<div class="mdl-layout__tab-panel is-active" id="overview">
				<!--here's the mission patch-->
				<div class="centered_patch">
					<img src="assets/img/reverb/CubeSat_Logo.png" alt="TJ REVERB Mission Patch">
				</div>
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Mission Statement</h4>
							The TJ REVERB project is creating a best practice document for building a Nanosatellite while building a 2U
							CubeSat that compares multiple radio systems in Lower Earth Orbit. Additionally,
							TJ REVERB serves as an educational vehicle for teaching students the principles of systems engineering. Beyond
							the rich learning experience designing and constructing a satellite provides the students
							at Thomas Jefferson HSST, the team is committed to a robust local, national, and international outreach program.
						</div>
					</div>
				</section>
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>What is a Cubesat?</h4>
							In 1999, California Polytechnic Institute and Stanford University created the specifications for the CubeSat.
							It was determined that the one unit of a CubeSat would be 10cm x 10cm x 11.35 cm and usually no larger than 1.33
							kilograms in mass. The initial purpose of the CubeSat program was to promote skills that were needed to send
							small satellites into Low Earth Orbit (LEO). Eventually, it developed into a concept of much broader use,
							ranging from experimental, commercial,
							and educational uses. Small satellites have become widely accepted as a part of the future in space.
						</div>
					</div>
				</section>

				<section class="section--footer mdl-color--grey-300">
					<div class="mdl-grid" id="pre-footer">
						<div class="section__text mdl-cell mdl-cell--2-col-desktop mdl-cell--3-col-tablet mdl-cell--2-col-phone">
							<h5>Want to support TJ REVERB?</h5>
							Please donate to our GoFundMe at <a href="https://www.gofundme.com/tjreverb">https://www.gofundme.com/tjreverb</a>.
							<br>
							In addition, you can donate to the TJ Partnership Fund to support TJ's many important programs at <a href="http://tjpartnershipfund.org/"
							 target="_blank">http://tjpartnershipfund.org/</a>. If you or your organization wish to make any other
							contributions to TJ REVERB, please contact us directly.
						</div>

						<div class="section__text mdl-cell mdl-cell--2-col-desktop mdl-cell--3-col-tablet mdl-cell--2-col-phone">
							<h5>Contact Us</h5>
							<div class="mdl-grid mdl-grid--no-spacing">
								<div class="mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--6-col-phone">
									Michael Piccione, Principal Investigator <br>
									mspiccione@fcps.edu <br> <br>
								</div>
								<div class="mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--6-col-phone">
									Samantha (Sam) Courtney, TJ Partnership Development Manager <br>
									703.750.8317 <br>
									scourtney@fcps.edu
								</div>
							</div>
						</div>
					</div>
				</section>


			</div>
			<div class="mdl-layout__tab-panel" id="mission_objectives">
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Mission Objectives</h4>
							The TJ REVERB will compare multiple radio systems for the purpose of education and creating a best practices
							document.
							<div class="section__text">
								<div class="mdl-card__actions mdl-card--border">
									<br>
									<h5>Project Objectives</h5>
									<ul class="bigUL">
										<li>Design a CubeSat while staying within feasible RF, power, volume, mass, and cost budgets</li>
										<li>Apply for and be selected as a NASA CSLI Candidate </li>
										<ul>
											<li>Won NASA's CSLI Grant (February 2017)</li>
											<li>NASA selects 25-35 CubeSat proposals each year, to be selected the Merit Review and Feasibility Review
												must meet NASA's standards (Merit and Feasibility Review can be found in the "About Us" tab)</li>
										</ul>
										<li>Build, launch, and operate the TJ REVERB</li>
										<li>Maintain a robust outreach program</li>

									</ul>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<br>
									<h5>Important Mission Dates</h5>

									<ul class="bigUL">
										<img src="assets/img/SubSystemImgs/Outreach/ISS.PNG" width="40%" align="right">
										<li>2016: Create team and write proposal</li>
										<li>2017: Plan mission and design CubeSat </li>
										<li> 2018:</li>
										<ul>
											<li>Q1 & Q2: Design CubeSat </li>
											<li>Q3: Weather Balloon Launch/Test Hardware </li>
											<li>Q4: Delivery of CubeSat </li>


										</ul>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Media</h4>
							<div class="section__text">

							</div>

							<head>
								<style>
									table, th, td {
            border: 1px solid grey;
            border-collapse: collapse;
            }
            th, td {
            padding: 5px;
            text-align: center;
            }
            </style>
							</head>
							<table style="width:100%">
								<caption>
									<font size="5">Pictures/Videos <br><br></font>
								</caption>

								<tr>
									<th>Design</th>
									<th>Feasibility Presentation</th>
									<th>Balloon Test Launch</th>
								</tr>
								<tr>

									<td width="33.3%">
										<video width="100%" controls align="center">
											<source src="assets/img/SubSystemImgs/CAD/GCADVid.mp4" type="video/mp4">
										</video>
										<img src="assets/img/DesignProcess/Design.PNG" width="100%">
									</td>
									<td width="33.3%"><img src="assets/img/DesignProcess/FeasibilityPres.jpg" width="100%">
									</td>
									<td width="33.3%"> <img src="assets/img/balloon/BalloonLaunchNew.png" width="100%" height="30%" aligh="middle">
									</td>
								</tr>

							</table>


						</div>
					</div>
				</section>

				<section class="banner">
					<img src="assets/img/reverb/bann5.jpg" />
					<h2>"Even just 20 years ago, this was unimaginable"</h2>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Education Objectives</h4>
							The TJ REVERB project is an inherently educational endeavor for TJHSST students. Students do not regularly
							encounter such large scale and intensive group projects in the classroom. The TJ REVERB provides students the
							opportunity to learn how to function within subsystems and cooperate within a large team.
							<div class="section__text">
								<div class="mdl-card__actions mdl-card--border">
									<ul class="bigUL">
										<li>Train students in engineering of a CubeSat</li>
										<li>Develop and document the processes required</li>
										<li>Engage in STEM outreach programs</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="spacer40"></div>
				<div class="spacer40"></div>
			</div>
			<div class="mdl-layout__tab-panel" id="sub">
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Subsystem Objectives</h4>
							TJ students who are directly involved with the design and implementation of the satellite will learn how to
							function in smaller groups with specific tasks known as subsystems. Together these teams will cooperate inside
							and outside the classroom setting for TJ REVERB.

						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Communciations</h4>
							The Comms subgroup is primarily responsible for evaluating and handling the communications systems on the
							Cubesat. The 2U CubeSat (TJREVERB) is predicated on testing the communications systems onboard. On this CubeSat,
							we will be testing two types of radios: one simplex UHF radio and one duplex UHF/VHF radio. The subsystem is
							responsible for pre-testing the radios as well.
							<br />
							<br />

							<img src="assets/img/SubSystemImgs/OrbitComm/FlightPrediction.png" width="350" height="250" align="left">
							<!-- Comms Image Goes Here -->
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Attitude Determination and Control Systems (ADCS)</h4>
							The Attitude Determination and Control Systems team develops simulations that will predict TJ REVERB’s orbit and
							attitude. Through the construction of a Helmholtz Coil, creation of control algorithms in MATLAB, and research
							into magnetorquer bars, the ADCS team makes sure that the satellite is successfully controlled while it is in
							orbit.
							<br />
							<br />
							<figure>
								<img src="assets/img/SubSystemImgs/ADCS/BalloonPath.PNG" width="85%">
								<figcaption> <i>Path of the balloon during balloon test launch.</i></figcaption>
							</figure>


						</div>
					</div>
				</section>

				<section class="banner">
					<img src="assets/img/reverb/bann1.jpg" />
					<h2>"You really get an insider's look into the industry"</h2>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Software</h4>
							The Software subgroup exists to assist all other subgroups with any software related tasks. Our responsibilities
							include: maintaining the TJREVERB website to create awareness for TJREVERB, programming the flight computer of
							TJREVERB, performing TJREVERB outreach (programming focused or otherwise), and any other miscellaneous
							software-related tasks assigned to us by other groups.
							<img src=""> <!--> Software Image Goes Here </-->
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Outreach</h4>
							The Outreach team is designed to bring the TJREVERB project to those outside of the team. It is part of NASA’s
							mission and our own. We will be performing documentation for the team, so that we have records of the decisions
							made and the reasoning behind them. The team’s primary goal is to organize a workshop for teams from local
							schools where they will build mock CubeSats and learn about our project.
							<br />
							<br />
							<img src="assets/img/SubSystemImgs/Outreach/Outreach2.png" width="400" height="250" align="right">
							<h5>
								<font size="4"> Outreach Initiatives </font>
							</h5>
							<li>Field trips</li>
							<ul>
								<li>Trip to <strong>Naval Academy</strong>: To learn about their CubeSat Department and present a version of
									the proposal</li>
								<li>Trip to <strong>Goddard Space Center</strong>: To learn about NASA operations </li>
							</ul>
							<li>Presentations</li>
							<ul>
								<li>TJ Students presented to Korean exchange students</li>
								<li>Presentation at Holmes Run Middle School</li>
								<li>TJ Students presented at French high school while travelling</li>
							</ul>
						</div>
					</div>
				</section>
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>CAD</h4>
							The CAD/Structural group will be focused more on creation of the 3U chassis (google “3U chassis cubesat” for
							more insight). For the 2U, we will be using AutoDesk Fusion and OnShape create a computer aided design. As we
							have recieved most of our parts, we have created computer models to simulate the components and how they will
							fit together.
							<br />
							<br />
							<!--<img src="assets/img/SubSystemImgs/CAD/3DPrint.JPG" width="200" height="200" align ="left">-->
							<video width="100%" controls align="middle">
								<source src="assets/img/SubSystemImgs/CAD/GCADVid.mp4" type="video/mp4" align="middle">
							</video>
							<!--<img src="assets/img/SubSystemImgs/CAD/3DPrint2.JPG" width="250" height="200" align ="right" >-->
							<div class="mdl-card__actions mdl-card--border">
								<br>
								<h5>
									<font size="4">Key Hardware Components</font>
								</h5>
								<ul class="bigUL">
									<li>2U Chassis (frame of CubeSat) </li>
									<li>Magnetorquers </li>
									<li>Solar panels</li>
									<li>Flight computer </li>
									<li>Iridium Radio (Short Burst Data modem)</li>
									<li>Automatic Packet Reporting System (APRS) </li>

								</ul>
							</div>
						</div>
					</div>
				</section>


				<section class="banner">
					<img src="assets/img/reverb/bann3.jpg" />
					<h2>"We're doing what a superpower, the Soviet Union, first accomplished"</h2>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Testing</h4>
							The purpose of the Thermal Control and Testing team is to ensure that the CubeSat survives in the environment of
							space. This includes ensuring that CubeSat internal components do not freeze or overheat due to the extreme cold
							and high heat fluxes in a Low Earth Orbit environment. Generally, the Thermal Control and Testing team requires
							information pertaining to the various electronic parts within the CubeSat, including their temperature
							tolerances and their respective efficiencies (to estimate heat output). Material specifics (thickness, type,
							etc.) are also necessary, for both vibration and thermal testing. To that end, the team will occasionally make
							contact with the other teams to determine these characteristics. While team members need not know how to conduct
							every type of testing, they should have some basic knowledge of mechanics and thermal physics. Knowledge of
							Autodesk Fusion 360 and MATLAB is also appreciated.
							<br />
							<br />
							<img src="assets/img/SubSystemImgs/Testing/Testing1.PNG" width="250" height="250" align="left">
							<img src="assets/img/SubSystemImgs/Testing/Testing2.JPG" width="350" height="250" align="right">
						</div>
					</div>
				</section>
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">
							<h4>Electronics</h4>
							The electronics subgroup of the TJ REVERB cubesat team helps test and manage the power supply, solar panels,
							attitude control, and overall power distribution of the Cubesat. Many of the electrical components will be
							donated to TJ from commercial partners. As such, a majority of the focus on the team will be connecting
							components and making sure that the system works correctly in an integrated manner. This will be accomplished
							through the development of a Helmholtz coil for testing attitude control, the construction of a clean room, and
							other electrical tests.
							<br />
							<br />
							<img src="assets/img/SubSystemImgs/Electronics/Electronics1.PNG" width="300" height="200" align="left">
							<img src="assets/img/SubSystemImgs/Electronics/OrbitElectric.jpg" width="400" height="200" align="right">
						</div>
					</div>
				</section>
				<div class="spacer40"></div>
			</div>
			<!-- put faq back in when we need it>
			<div class="mdl-layout__tab-panel" id="faq">
			<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
				<div class="mdl-card mdl-cell mdl-cell--12-col">
				<div class="mdl-card__supporting-text">
					<h4>FAQ</h4>
					Here are some commonly asked questions that we hopefully can answer here.
					<div class="section__text">
					<div class="mdl-card__actions mdl-card--border">
						<h5>Question</h5>
						<p>
						Answer
						</p>
					</div>
					</div>
				</div>
				</div>
			</section>
			</div>
			-->
				<!--
			<div class="mdl-layout__tab-panel" id="research">
			<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
				<div class="mdl-card mdl-cell mdl-cell--12-col">
				<div class="mdl-card__supporting-text">
					<h4>Research</h4>
					At TJ REVERB, we are working on various methods of pushing the frontiers of technology by discovering meaningful results from the data collected by the TJ REVERB Cubsat. To that end, we are currently working on developing a deep learning data analytic algorithm that retrieves data from the cubesat in realtime and works on analysis for future prediction. We also hope to expand this research section to include other models, ranging from Support Vector Machines to Generative Adversarial Networks.
					<div class="section__text">
					<div class="mdl-card__actions mdl-card--border">
						<ul>
						<li>Utilize Firebase for data storage and update the research page with real time information and the data analytics from our Machine Learning server. </li>
						<li>Employ the NASA CubeSat API to retrieve data from the Cubesat and store it in the database </li>
						<li>Train several Machine Learning algorithms in real time to predict data and chart obstacles</li>
						<li>Validate our Deep Learning Model with realtime comparison via the programming flight board</li>
						</uL>
					</div>
					<img src="assets/img/SubSystemImgs/Testing/deeplearning.jpeg" width="750" height="250" align ="left" >
					
					</div>
				</div>
				</div>
			</section>
			</div>
			-->

			<div class="mdl-layout__tab-panel" id="aboutus">

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text">

							<h4>TJHSST</h4>
							<ul class="bigUL">
								<li>Thomas Jefferson High School for Science and Technology is a Northern Virginia public magnet high school.
									The official site of TJHSST can be found <a href="https://tjhsst.fcps.edu/" target="_blank">here</a>.</li>
								<li>In 2013, TJHSST became the first high school worldwide to succesfully launch a CubeSat into space, with the
									TJ3Sat project, which can be found <a href="https://www.tjhsst.edu/students/activities/tj3sat/" target="_blank">here</a>.</li>
								<li>3 years later in 2016, the work on TJ's next satellite officially begun with TJ REVERB.</li>
							</ul>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
							<h4 class="mdl-cell mdl-cell--12-col"><a href="http://www.emergentspace.com/" target="_blank">Emergent</a> - Key
								Partner</h4>


							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<!--<h5><a href="http://www.emergentspace.com/" target="_blank">Emergent</a></h5>-->
								Emergent Space Technologies has provided mentors and guidance to TJ’s CubeSat team. They trained two TJ
								students in a 5-week flight dynamics internship. Under the guidance of an experienced flight dynamics engineer,
								Dr. Sun Hur-Diaz, and other Emergent employees, they learned how to perform flight dynamics analysis for a 2U
								CubeSat using NASA’s General Mission Analysis Tool (GMAT). Skills the internship developed include determining
								ground track and tracking periods, developing orbit dynamics models, performing orbit determination
								simulations, and determining mission life time. Dr. Sun Hur-Diaz has also provided her expertise and feedback
								for the TJREVERB’s merit review and feasibility review which were a part of TJ’s CubeSat Launch Initiative
								proposal to NASA.
							</div>
						</div>
					</div>
				</section>

				<section class="banner">
					<img src="assets/img/reverb/bann2.jpg" />
					<h2>"It is remarkable that we have the opportunity to do this"</h2>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
							<h4 class="mdl-cell mdl-cell--12-col"><a href="http://www.ragnarokindustries.com/working/" target="_blank">Ragnarok
								</a> - Key Partner</h4>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								Ragnarok Industries brings a wealth of Cubesat building knowledge to the TJREVERB team. Primarily, Ragnarok
								aids TJREVERB by providing avionics, comprised of the flight computer and its interfaces with the various
								radios, sensors, and other components on board the satellite. In addition, Ragnarok has mentored the team with
								respect to the design of the satellite, and was represented at TJREVERB's Merit and Feasibility reviews.
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
							<h4 class="mdl-cell mdl-cell--12-col">A Special Thanks to all our Sponsors</h4>

							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								Without the help of these partners and sponsors, this project would not be possible
								<ul>
									<br>
									<u><strong>
											<font size="+3"> Companies </font>
										</strong> </u> <br>
									<font size="+1"> BlueCube <br>
										ExoAnalytic <br>
										NAL Research <br>
										USSTEM
										<br> </font>
									<br>

									<img src="assets/img/reverb/Sponsor/SunImg.png" width="7%" height="7%" /> <u><strong>
											<font size="+3"> Apollo Level </font>
										</strong> </u> <img src="assets/img/reverb/Sponsor/SunImg.png" width="7%" height="7%" /> <br>
									<font size="+1"> Antonio Arancibia <br>
										Dana Cibulski <br>
										David Boyd <br>
										Mohammad Choudhry <br>
										Paul Jaffe <br>
										Pradeepa Jayakumar <br>
										The Trissell Family <br>

									</font>
									<br>

									<img src="assets/img/reverb/Sponsor/Gemini.png" width="5%" height="5%" /> <u><strong>
											<font size="+2"> Gemini Level </font>
										</strong></u> <img src="assets/img/reverb/Sponsor/Gemini.png" width="5%" height="5%" /> <br>
									<font size="+0.5"> Jacob Cohen <br>
										Mary & Tim Keegan <br> </font>
									<br>

									<img src="assets/img/reverb/Sponsor/Mercury.png" width="4%" height="4%" /> <u><strong>
											<font size="+1.5"> Mercury Level </font>
										</strong></u> <img src="assets/img/reverb/Sponsor/Mercury.png" width="4%" height="4%" /> <br>
									<font size="+0.25"> Joy Bostian <br>
										Thomas Baron <br> </font>


								</ul>
							</div>
						</div>
					</div>
				</section>

				<!-- Documents -->
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
				<!-- End-Of-Documents -->

				<section class="banner">
					<img src="assets/img/reverb/bann4.jpg" />
					<h2>"This project has opened up innumerable possibilities for my future"</h2>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card mdl-cell mdl-cell--12-col">
						<div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
							<h4 class="mdl-cell mdl-cell--12-col">Team Leaders</h4>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Mike_Piccione.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Mike Piccione</h5>
								TJ REVERB's Principal Investigator and Energy Systems and Engineering Labs Director
							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Shihao_Cao.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Shihao Cao</h5>
								Project Manager - TJ '19
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Aumena Choudhry</h5>
								Administrative - TJ '20
							</div>

							<!--
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
							<div class="section__circle-container__circle"><img src="assets/img/reverb/Liam_David.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
							<h5>Liam David</h5>
							Systems Engineer - TJ '18
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
							<div class="section__circle-container__circle"><img src="assets/img/reverb/Michael_Krause.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
							<h5>Michael Krause</h5>
							Systems Engineer - TJ '18
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
							<div class="section__circle-container__circle"><img src="assets/img/reverb/Justin_Zhou2.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
							<h5>Justin Zhou</h5>
							Systems Engineer - TJ '18
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
							<div class="section__circle-container__circle"><img src="assets/img/reverb/Anonto_Zaman.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
							<h5>Anonto Zaman</h5>
							Systems Engineer - TJ '18
							</div>
							-->

							<div class="spacer"></div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Lucas Bronstein</h5>
								Electronics - TJ '20
							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Madeleine_Beauvais.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Madeleine Beauvais</h5>
								Testing - TJ '19
							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div id="miss" class="section__circle-container__circle"><img src="assets/img/reverb/Suchet_Sapre.JPG" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">

								<div class="mdl-grid mdl-grid--no-spacing">
									<div class="mdl-cell mdl-cell--3-col-desktop">
										<h5 id="cao">Suchet Sapre</h5>
										Website - TJ '20
									</div>
									<div class="mdl-cell mdl-cell--6-col-desktop" id="egg">
										<h5>All Contributors <span style=font-size:75%> - Click to Close</span></h5>
										Jude Bedessem • Shihao Cao • Maxwell Lord • Kevin Zou • Daniel Wu
									</div>
									<div class="mdl-cell mdl-cell--6-col-desktop" id="felix">
										<!--stated in 1989 when CPI and SU partnered to create the specifications for a. It was determined that the one unit of a equates to 10cm by 10cm by 11.35 cm in volume and usually no larger than 1.33 kilograms in mass. The initial purpose of the CubeSat program was to promote skills that were needed to send small satellites into Low Earth Orbit (LEO). Eventually, it developed to be a concept of much broader use, ranging from professional companies seeking them as modes of cheap experimentation to commercial use. Small satellites have become widely accepted as a large part of the future in space, and have found their place among much larger satellites as micro-technology has developed.-->
										In loving memory of Felix W. Bedessem and Navi Bhandari. May the force be with you always.
									</div>
								</div>

							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Jude_Bedessem.png" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Jude Bedessem</h5>
								Communciations (Co-Leader) - TJ '19
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Maguire_Papay.PNG" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Maguire Papay</h5>
								Communciations (Co-Leader) - TJ '19
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Shihao_Cao.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Shihao Cao</h5>
								Communciations (Co-Leader) - TJ '19
							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Dylan_Jones.png" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Dylan Jones</h5>
								Software - TJ '19
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Afreen_Mohideen.jpg" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Afreen Mohideen</h5>
								Outreach (Co-Leader) - TJ '19
							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Amita_Goyal.PNG" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Amita Goyal</h5>
								Outreach (Co-Leader) - TJ '20
							</div>


							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Quentin Bishop</h5>
								ADCS - TJ '19
							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Arnold_Zhang.png" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Arnold Zhang</h5>
								CAD (Co-Leader) - TJ '19
							</div>

							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle"><img src="assets/img/reverb/Sophia_Trissell.png" style="width:60px;height:60px;"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Sophia Trissell</h5>
								CAD (Co-Leader) - TJ '19
							</div>




						</div>
					</div>

				</section>

				<div class="spacer40"></div>
				<div class="spacer40"></div>
			</div>

			<!--<div class="mdl-layout__tab-panel" id="ba">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Balloon Test</h4>
                The balloon launch was a success, reaching altitudes over 18,000 meters and successfully transmitting data! We’d like to share what worked, what we’ve learned, and what needs improvement. We compared data from the two sets of sensors onboard, the Raspberry Pi and the NSL eyepod, to see how reliable and accurate the data is. Both systems generally agree on altitude and temperature.
                
                <p><br>
                 We compared data from the two sets of sensors onboard, the Raspberry Pi and the NSL eyepod, to see how reliable and accurate the data is. Both systems generally agree on altitude and temperature. The Pi’s altimeter was off by 3,000 meters from the eyepod’s altimeter at the peak. This might be because the Pi’s altimeter was pressure-based and might not have been properly calibrated the day of the launch while the eyepod’s altimeter was based on GPS. The temperature readings from the Pi suddenly jumped and remained elevated for around 15 minutes before returning to normal, likely due to instrument failure. The magnetic field and acceleration data from the Pi were random, as expected from a freely rotating balloon. Still, the lack of outliers demonstrate that these sensors are functional. The GPS data from the eyepod had no apparent issues, allowing us to construct the visuals of the balloon’s path below. Some of the eyepod data remains to be analyzed, but so far, the eyepod appears to be a viable tool for data collection moving forward! The Raspberry Pi had some irregularities, but with some adjustments, it can provide reliable data and be a secondary source for temperature, altitude, and position measurements.We compared data from the two sets of sensors onboard, the Raspberry Pi and the NSL eyepod, to see how reliable and accurate the data is. Both systems generally agree on altitude and temperature. The Pi’s altimeter was off by 3,000 meters from the eyepod’s altimeter at the peak. This might be because the Pi’s altimeter was pressure-based and might not have been properly calibrated the day of the launch while the eyepod’s altimeter was based on GPS. The temperature readings from the Pi suddenly jumped and remained elevated for around 15 minutes before returning to normal, likely due to instrument failure. The magnetic field and acceleration data from the Pi were random, as expected from a freely rotating balloon. Still, the lack of outliers demonstrate that these sensors are functional. The GPS data from the eyepod had no apparent issues, allowing us to construct the visuals of the balloon’s path below. Some of the eyepod data remains to be analyzed, but so far, the eyepod appears to be a viable tool for data collection moving forward! The Raspberry Pi had some irregularities, but with some adjustments, it can provide reliable data and be a secondary source for temperature, altitude, and position measurements.
                
                <!--<br><br>
                Besides data, one issue brought to our attention was that the balloon cutoff was not triggered. [Possible explanations for why it happened] We hope to learn from this and fix the issue for our next balloon launch!
                -->
			<!--</p>
                <div class="section__text">
              </div>
            </div>
          </section>
          
          <br>
          <br>
      
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <div class="numbertext">1 / 6</div>
                  <img src="assets/img/balloon/Screenshot_1.jpg" style="width:100%">
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">2 / 6</div>
                  <img src="assets/img/balloon/Screenshot_2.jpg" style="width:100%">
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">3 / 6</div>
                  <img src="assets/img/balloon/Screenshot_3.jpg" style="width:100%">
                </div>
               
               <div class="mySlides fade">
                  <div class="numbertext">4 / 6</div>
                  <img src="assets/img/balloon/Screenshot_4.jpg" style="width:100%">
                  <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                  <div class="numbertext">5 / 6</div>
                  <img src="assets/img/balloon/Screenshot_5.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                  <div class="numbertext">6 / 6</div>
                  <img src="assets/img/balloon/Screenshot_6.jpg" style="width:100%">
                </div>
                <!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
			<!--</div>
              <br>
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span> 
                <span class="dot" onclick="currentSlide(6)"></span> 
              </div>
          <br>
  
          <div class="spacer40"></div>
          <div class="spacer40"></div>
        </div>
        
      <div class="mdl-layout__tab-panel is-active" id="overview">    
      </div>
      -->
			<div class="mdl-layout__tab-panel" id="update-tab">


				<!-- visual tests of embedded fb posts 
              will implement automatically updating posts soon -->
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update1" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update2" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update3" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update4" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update5" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update6" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update7" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update8" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update9" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update10" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update11" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="update mdl-cell mdl-cell--12-col">
						<div class="fb-box">
							<div class="fb-post" id="update12" data-href="" data-width="auto" data-show-text="true">
							</div>
						</div>
					</div>
				</section>

				<div class="spacer40"></div>
				<div class="spacer40"></div>

			</div>

			<?php require("inc/footer.php"); ?>

		</main>
	</div>

	<?php require("inc/imports-js.php"); ?>
	
</body>

</html>
