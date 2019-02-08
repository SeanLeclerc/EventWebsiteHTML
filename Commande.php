

<?php
    include_once './includes/connection.php';
	$id = $_GET['id'];
	$sql = "SELECT nom FROM evenement WHERE id_event = $id";
	$exe = mysqli_query($conn, $sql);
	if ($exe == false) {
		header("Location: http://localhost/guardian/events.php");
	}
	$res = mysqli_fetch_array($exe); 
	$nom = $res["nom"];
	if ($nom == ""){
		header("Location: http://localhost/guardian/events.php");
	}


?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="utf-8" />
    <title>Ticket Guardian - Accueil</title>
    <script src="./sliderengine/jquery.js"></script>
    <script src="./sliderengine/amazingslider.js"></script>
    <script src="./sliderengine/initslider-1.js"></script>

    <link href="./css/style.css" rel="stylesheet" />
</head>
<body>

    <!-- Header -->
    <header>
        <div class="wrapper">
            <img src="./img/guardianlogo.png" id="logo" alt="Logo" />
        </div>
    </header>
    <main>

        <!-- Home -->
        <section id="home">
            <div class="wrapper">
				<div align=center>
				<?php
				echo $nom;
				?>
				</div>
				<br>
                <form action="connectionEvent.php" method="post" align="center">
                    <li>First name: <input type="text" name="fname" /></li>
					<tr><td> <input type="hidden" name="id_event" value="<?= $id ?>" ></td></tr>
					<li>Last name: <input type="text" name="lname" /></li>

					<li>Email: <input type="text" name="lemail" /></li>
				<?php
				$id = $_GET['id'];
				$sql = "SELECT prix FROM evenement WHERE id_event = $id";
				$exe = mysqli_query($conn, $sql);
				while($res = mysqli_fetch_array($exe)) echo "Prix : ".$prix = $res["prix"]." $";
				?>
				<br>
 

					<input type="submit" />
          </form>

                <table align="center">
                    <TR>
                        <TH align=center></TH>

                    </TR>
                    <TR>
                        <TD>
                            <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px;">
                                <ul class="amazingslider-slides" style="display:none;">

                                    <li><a href="events.php"><img src="images/csgoEvent.jpg" alt="�v�vement CS-GO" /></li>
                                    <li><a href="events.php"><img src="images/codEvent.jpg" alt="�v�vement CoD" /></li>
                                    <li><a href="events.php"><img src="images/haloEvent.jpg" alt="�v�vement Halo" /></li>
                                    <li><a href="events.php"><img src="images/overwatchEvent.jpg" alt="�v�vement OverWatch" /></li>
                                    </a>
                                </ul>
                                <ul class="amazingslider-thumbnails" style="display:none;">
                                    <li><img src="images/csgoThumb.jpg" /></li>
                                    <li><img src="images/codThumb.jpg" /></li>
                                    <li><img src="images/haloThumb.jpg" /></li>
                                    <li><img src="images/overwatchThumb.jpg" /></li>
                                </ul>
                                <div class="amazingslider-engine" style="display:none;"><a href="http://amazingslider.com">JavaScript Slider</a></div>
                            </div>
                        </TD>
                    </TR>
                </table>

            </div>
        </section>

    </main>
    <!-- Footer -->
    <footer>
        <div class="wrapper">
            � Ticket Guardian - 2017
        </div>
    </footer>
</body>
</html>