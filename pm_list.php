<?php

     require_once("connection.php");
    session_start();
    if(!isset($_SESSION['id'])){
        header( "location: loggedinpage.php");
    }



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="pm_list.css">

    
</head>
<body>
    
    <?php include("header.php");   ?>
    
    <div class= "container">
        
      <div class="left">
          <div class="pim">
          <h4>PIM</h4>
          <hr>
          <p><a href="new_pm.php">Envoyer un message</a></p>
          <p><a href="#">Recus</a></p>
          <p><a href="#">Envoyes</a></p>
          
          
          </div>
          
          <div class="functions">
              <h4>Outils</h4>
              <hr>
            <p><a href="#">Forward message</a></p>
            <p><a href="#">Delete message</a></p>
            <p><a href="#">Marquer non lu</a></p>
              
          </div>
      </div>
        
        <div class="right">

            <div class="pages">
            <ul>
            <li>Page :</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li><a href="#">Page suivante</a></li>  
            <li> Messages sur la page : </li>
            <li> Total(messages)</li>
            </ul>
            </div>
          <br>
            


            <div class="display-message">
            </div>
            
            
            
            
        </div>
    
    </div>
    
    
    


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
 <script src="script.js"></script>
</body>
</html>