<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <?php
		include('head.php');
	?>
    <body class="subpage">
        <?php
            include('headernav.php');
        ?>
    <!-- One -->
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>ESO Logs</p>
                <h2>Log into your account</h2>
            </header>
            <div class="align-center">
                <form method="post" action="#">
                    <div class="6u -3u(xlarge) 12u$(xsmall)">
                        <input type="text" id="pseudo" name="pseudo" value placeholder="Pseudo" required><br>
                        <input type="password" id="password" name="password" value placeholder="Password" required><br>
                        <div style="text-align:left;">
                            <input type="checkbox" id="copy" name="copy">
                            <label for="copy">Remember me</label><br>
                            <a href="login.php" style="color: rgba(138, 138, 138, 0.7);">Forgot your password ?</a><br><br>
                        </div>
                        
                        <input type="button" class="button fit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
        include('footer.php');
    ?>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>

    </body>
</html>