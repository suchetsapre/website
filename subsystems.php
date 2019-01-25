<?php
	$page_title = "TJ REVERB - Subsystems";
?>

<!DOCTYPE html>
<html lang="en">

<?php require("inc/head.php"); ?>

<body>
<div id="page">
<div class="site-wrapper">

	<?php require("inc/header.php"); ?>

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
            </div>
        </div>
    </section>

    <!-- <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
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
                <img src="">
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
                <!--<img src="assets/img/SubSystemImgs/CAD/3DPrint.JPG" width="200" height="200" align ="left">
                <video width="100%" controls align="middle">
                    <source src="assets/img/SubSystemImgs/CAD/GCADVid.mp4" type="video/mp4" align="middle">
                </video>
                <!--<img src="assets/img/SubSystemImgs/CAD/3DPrint2.JPG" width="250" height="200" align ="right" >
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
    </section> -->

	<?php require("inc/footer.php"); ?>

</div>
</div>

<?php require("inc/imports-js.php"); ?>
	
</body>

</html>
