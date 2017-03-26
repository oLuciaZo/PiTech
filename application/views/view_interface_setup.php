<!DOCTYPE HTML>
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
    <!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!--<link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/style.css" />-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->




    </head>
    <body onload="">

        <!-- Wrapper -->
        <div id="wrapper">

        <!-- Main -->
        <div id="main">
        <div class="inner">

        <!-- Header -->
        <header id="header">
        <a href="/pitech/" class="logo"><strong>Pi Technology Engine</strong></a>

    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="content">
        <header>
        <h1>Inventory
        </h1>
        </header>
        <!--put the table here-->
        <div id="Table" align="center">
        <div class="features">
        <article>
        <table id="myTable" width="20%" bgcolor="" border="0"  bordercolorlight="white" cellspacing="0" cellpadding="0">
        <form method="post" action="interface_setup">
        <tr>
        <td>
        Current IP Address
    </td>
    <td>
    <?php echo exec('/sbin/ifconfig enp0s3 | grep "inet addr:"'); ?>
    </td>
    </tr>
    <tr>
    <td>
    IP Address
    </td>
    <td>
    <input type="text" name="ipaddress" id="ipaddress" value="" />
        </td>
        </tr>
        <tr>
        <td>
        Netmask
        </td>
        <td>
        <input type="text" name="netmask" id="netmask" value="" />

        </td>
        </tr>
        <tr>
        <td>
        Gateway
        </td>
        <td>
        <input type="text" name="gateway" id="gateway" value="" />

        </td>
        </tr>
        <tr>
        <td>
        DNS
        </td>
        <td>
        <input type="text" name="dns" id="dns" value="" />

        </td>
        </tr>
        <tr>
        <td>
        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Save</button>
        </td>
        <td>
        </td>
        </tr>
        </form>
        </table>
        </article>
        </div>
        </div>
        </div>

        </section>

        <!-- Section -->
        <section>
        <header class="major">
        <h2>Technology</h2>
        </header>
        <div class="features">

        </div>
        </section>

        <!-- Section -->
        <section>
        <!--	<header class="major">
        <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
        <article>
        <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
        <h3>Interdum aenean</h3>
    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
    <ul class="actions">
        <li><a href="#" class="button">More</a></li>
        </ul>
        </article>

        </div>-->
        </section>

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
        <li><a href="index_dash.php">Dashboard</a></li>
        <li><a href="index.html">Monitor</a></li>
        </ul></li>
        <li><a href="inventory.html">Inventory</a></li>
        <li>
        <span class="opener">Settings</span>
        <ul>
        <li><a href="email.html">Email</a></li>
        <li><a href="interface_setup.php">Network</a></li>
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
        <p>Pi Techonology</p>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

    </body>
</html>
