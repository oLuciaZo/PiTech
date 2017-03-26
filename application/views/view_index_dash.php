
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pi Technology Engine</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta http-equiv="refresh" content="20">
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
		<script src='../assets/js/jquery.min.js'></script>
		<script src='../assets/js/justgage.js'></script>
		<script src='../assets/js/raphael-2.1.4.min.js'></script>


		<script>
		function querydevices(){
		var xmlhttp = new XMLHttpRequest();
		var url = "monitorup";
		xmlhttp.onreadystatechange=function() {
		    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		        myFunction(xmlhttp.responseText);
		    }
		}
		xmlhttp.open("GET", url, true);
		xmlhttp.send();

		function myFunction(response) {
			var jsonData = JSON.parse(response);
			var counter = jsonData.monitor.length*4;
			var count = 0;
			var temp = [];
			var humidity = [];
			var temp_heat = [];
			//console.log(counter);
			for (var i = 0; i < jsonData.monitor.length; i++) {
				//console.log(jsonData.monitor[i]);
				var data = jsonData.monitor[i];
				temp[count] = data.temp1;
				humidity[count] = data.humidity1;
				count = count + 1;
				temp[count] = data.temp2;
				humidity[count] = data.humidity2;
				count = count + 1;
				temp[count] = data.temp3;
				humidity[count] = data.humidity3;
				count = count + 1;
				temp[count] = data.temp4;
				humidity[count] = data.humidity4;
				count = count + 1;
				temp_heat[i] = data.temp_heat;

			}
			gauge(temp,humidity,counter,data.name,temp_heat);
		}
	}

		function gauge(temp,humidity,counter,name,temp_heat){
			var count1 = 1;
			var count2 = 0;
			for(a=0; a<counter; a++){
		  var g = new JustGage({
		    id: "gauge"+(a+1),
		    value: temp[a],
		    min: 0,
		    max: temp_heat[count2],
		    title: "Sensor"+count1+"\n"+"Humandity : "+humidity[a]
		  });
			count1 = count1 + 1;

			if(count1 == 5){
				count1 = 1;
				count2 = count2 + 1;
			}
		}
	}
		</script>
	</head>
	<body onload="querydevices()">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="../../../iot/index.html" class="logo"><strong>Pi Technology Engine</strong></a>

								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>IoT Monitoring System
											</h1>
											</header>
											<!--put the table here-->




										</div>
								</section>
								<section>



										<div class="row">
											<?php

											$count=0;
											if(isset($mon)){
											foreach($mon as $object)
											{
											?>

											<div class="4u 12u$(medium)">
												<h4><a href="view_chart/<?php print $object->data_mac?>" target="_blank">'<?php print $object->int_name; ?>'</a></h4>
												<div class="6u" id="gauge<?php print $count=$count+1;?>" name"gauge1" style="height: 75px;"></div>
												<div class="6u" id="gauge<?php print $count=$count+1;?>" name"gauge2" style="height: 75px;"></div>
												<div class="6u" id="gauge<?php print $count=$count+1;?>" name"gauge3" style="height: 75px;"></div>
												<div class="6u" id="gauge<?php print $count=$count+1;?>" name"gauge4" style="height: 75px;"></div>
											</div>

											<?php }} ?>
										</div>

								</section>


							<!-- Section -->
								<section>
									<header class="major">


										<h2>Devices Down</h2>

										</header>
									<div class="features">


										<!--<article>
											<span class="icon fa-diamond"></span>
											<div class="content">
												<h3>Portitor ullamcorper</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>Sapien veroeros</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Quam lorem ipsum</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
												<h3>Sed magna finibus</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>-->
										</article>
									</div>

								</section>

							<!-- Section -->


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li>
											<span class="opener">Monitoring</span>
										<ul>
											<li><a href="dashboard">Dashboard</a></li>
											<li><a href="/pitech/">Monitor</a></li>
										</ul></li>
										<li><a href="view_inventory">Inventory</a></li>
										<li>
										<span class="opener">Settings</span>
										<ul>
											<li><a href="email">Email</a></li>
											<li><a href="interface">Network</a></li>
										</ul>
									</li>
									</ul>
								</nav>
							<!-- Section
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Pi Technology</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">charuraks@gmail.com</a></li>
										<li class="fa-phone">+6683-543-1474</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>
