<?php 
    session_start();
    include("db.php");
?>

<?php
   $message = ""; 
   if(isset($_POST['btnLogin'])) {

   $gebruiker = trim($_POST['gebruiker']);
   $wachtwoord = trim($_POST['wachtwoord']);

      if($gebruiker != "" && $wachtwoord != "") {
         try {
            $sql = "SELECT * FROM  gebruikers WHERE `gebruiker`=:gebruiker and `wachtwoord`=:wachtwoord";
            $statement = $connection->prepare($sql);
            $statement->bindParam('gebruiker', $gebruiker, PDO::PARAM_STR);
            $statement->bindValue('wachtwoord', $wachtwoord, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            $row   = $statement->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {

            $_SESSION['sessie_gebr_id']     = $row['id'];
            $_SESSION['sessie_gebruiker']   = $row['gebruiker'];
            $_SESSION['sessie_wachtwoord']  = $row['wachtwoord'];
            
            header('Location: admin.php');

            } else {
            $message = "Ongeldige gebruikersnaam en/of wachtwoord!";
            }
         } catch (PDOException $e) {
            echo "Foutmelding : ".$e->getMessage();
         }
      } else {
         $message = "Beide velden moeten ingevuld zijn!";
      }
   }
?>

<!doctype html>
<html lang="nl">

<head>
   <title>Alice - Aanmelden</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body class="bg-secondary">
   <div class="login-wrapper">
      <div class="row">
         <div class="col-md-5 well mx-auto mt-5 p-5 bg-white rounded">
            <h4 class="pb-3">Aanmelden</h4>

            <form action="login.php" method="post">
               <div class="form-group">
                  <label for="gebruiker">Gebruikersnaam</label>
                  <input type="text" name="gebruiker" class="form-control" />
               </div>
               <div class="form-group">
                  <label for="wachtwoord">Wachtwoord</label>
                  <input type="password" name="wachtwoord" class="form-control" />
               </div>
               <div class="form-group">
                  <input type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary" value="Aanmelden" />
                  <h6 class="loginMsg pt-2 text-danger"><?= $message;?></h6>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>