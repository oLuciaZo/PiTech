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
    <!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->




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
        <h1>IoT Monitoring System
    </h1>
    </header>
    <!--put the table here-->
    <form action="edit_email" name="fromemail" method="POST" >
        <div class="6u 12u$(xsmall)">
        <table >
        <tr>
        <td>
            <h4>SMTPAuthen</h4>
        </td>
        <td>
        <div class="6u 12u$(xsmall)">
        <select name="SMTPAuth">
        <option value="true">True</option>
        <option value="flase">Flase</option>
        </select>
        </div>
        </td>
        </tr>
        <tr>
        <td>
            <h4>SMTPSecure</h4>
        </td>
        <td>
        <div class="6u 12u$(xsmall)">
        <select name="SMTPSecure">
        <option value="none">None</option>
        <option value="tls">TLS</option>
        <option value="ssl">SSL</option>
        </select>
        </div>
        </td>
        </tr>
        <tr>
        <td>
            <h4>Host</h4>
        </td>
        <td>
        <div class="6u 12u$(xsmall)">
        <input type="text" name="host" value="" placeholder="Host" />
        </div>
        </td>
        </tr>
        <tr>
        <td>
            <h4>Port</h4>
        </td>
        <td>
        <div class="6u 12u$(xsmall)">
        <select name="port">
        <option value="25">25</option>
        <option value="465">465</option>
        <option value="587">587</option>
        </select>
        </div>
        </td>
        </tr>
        <tr>
        <td>
            <h4>Username</h4>
        </td>
        <td>
        <div class="6u 12u$(xsmall)">
        <input type="email" name="username" value="" placeholder="Email" />
        </div>
        </td>
        </tr>
        <tr>
        <td>
            <h4>Password</h4>
        </td>
        <td>
        <div class="6u 12u$(xsmall)">
        <input type="password" name="password" value="" placeholder="Password" />
        </div>
        </td>
        </tr>
        <tr>
        <td>
            <h4>Receiver</h4>
        </td>
        <td>
        <div class="6u 12u$(xsmall)">
        <input type="email" name="from" value="" placeholder="Receiver"/>
        </div>
        </td>
        </tr>
        </table>
        </div>
        <input type="submit">

        </form>
        </section>

        <!-- Section -->
        <section>
        <header class="major">
        <h2>Detail</h2>
        </header>
        <div class="features">
        <article>
        <table>
            <tr>
                <td><h4>SMTPAuth</h4></td><td><h4>SMTPSecure</h4></td><td><h4>Host</h4></td><td><h4>Port</h4></td><td><h4>Sender</h4></td><td><h4>Receiver</h4></td>
            </tr>
            <tr>
                <?php
                if(isset($email)){
                    foreach ($email as $object) {
                        $SMTPAuth = $object->SMTPAuth;
                        $SMTPSecure = $object->SMTPSecure;
                        $Host = $object->Host;
                        $Port = $object->Port;
                        $Sender = $object->Username;
                        $Receiver = $object->From_mail;

                        ?>
                        <td><?php print $SMTPAuth; ?></td>
                        <td><?php print $SMTPSecure; ?></td>
                        <td><?php print $Host; ?></td>
                        <td><?php print $Port; ?></td>
                        <td><?php print $Sender; ?></td>
                        <td><?php print $Receiver; ?></td>
                        <?php
                    }}
                ?>
            </tr>
        </table>
        </article>

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
