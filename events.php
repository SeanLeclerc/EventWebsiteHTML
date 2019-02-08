<?php
    include_once './includes/connection.php'

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="img/icon.png">
    <link href="./css/style.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <title>Ticket Guardian - Événement</title>
	<!--Ouvre une page selon le id selectioner-->
	<script type="text/javascript">
	function GetSelectedTextValue(categorie) {
			window.location.href="Commande.php?id=" + categorie;
		};
	</script>

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
        <!-- Events -->
        <section id="events">
            <div class="wrapper">
                <h1>Evenement</h1>
                <p></p>
                <div class="clearfix">
                    <img src="./images/csgoThumb.jpg" alt="CSGO Thumb" />
                    <img src="./images/codThumb.jpg" alt="CoD Thum" />
                    <img src="./images/haloThumb.jpg" alt="Halo Thumb" />
                    <img src="./images/overwatchThumb.jpg" alt="Overwatch Thumb" />
 
                </div>
            <!--On prend tout dans la table evenement et présente le résultat dans un "Select". Lorsque l'option est clicker on perfome "GetSelectedTextValue"-->
                <div class="form-group">
                    <label for="categorie">Evenement: </label>
                    <select onchange="GetSelectedTextValue(this[this.selectedIndex].value);" id="categorie" name="categorie" class="form-control">
                        <?php
                        $sql = "SELECT * FROM evenement";
                        $result = mysqli_query($conn, $sql);

						var_dump($result);
						

						$resultCheck =  $result->num_rows;
			
         
						echo '<option value="">Choisir</option>';
                        while($row = mysqli_fetch_array($result)){
						$id = $row['id_event'];
                        $name = $row['nom'];

						
							
						echo '<option value="'.$id.'">'.$name.'</option>';
							}															
                       ?>
					   
                    </select>
                </div>
                </div>
            <div class="seperator"></div>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <div class="wrapper">
            © Ticket Guardian - 2017
        </div>
    </footer>
</body>
</html>