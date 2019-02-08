
<!-- On inclus "connection.php" pour etre capable de se connecter-->
<?php
    include_once './includes/connection.php'

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
			   <nav>
                <ul>
                    <li><a href="index.html">Acceuil</a></li>
                    <li><a href="events.php">Evenement</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="apropos.html">A propos</a></li>
					<li><a href="loginPage.html">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>

        <!-- Home -->
        <section id="home">
            <div class="wrapper">

				<br>
                <form action="connectionAdmin.php" method="post" align="left">
				     <li>ID de l'événement: <input type="text" name="id_event"></li>
				    <li>Nom de l'événement: <input type="text" name="fname" /></li>
                    <li>Date de l'événement: <input type="Date" name="ldate" /></li>
					<li>Prix de l'événement: <input type="text" name="lprix" /></li>

 

					<input type="submit" />
          </form>
		  <!--Prend tout les élements de la table evenement et fait appele a "supprimerEvent.php" pour effacer l'evenement choisi-->
		  <form action="supprimerEvent.php" method="post">
		   <div class="form-group" align="right">
                    <label for="categorie">Supprimer: </label>
                    <select id="categorie" name="categorie" class="form-control">
                        <?php
                        $sql = "SELECT * FROM evenement";
                        $result = mysqli_query($conn, $sql);

						var_dump($result);
						

						$resultCheck =  $result->num_rows;
			
         
						echo '<option value="'.$id.'">Choisir</option>';
                        while($row = mysqli_fetch_array($result)){
						$id = $row['id_event'];
                        $name = $row['nom'];
							
						echo '<option value="'.$id.'">'.$name.'</option>';
							}

                       ?>
					   
                    </select>
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