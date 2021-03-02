<?php

  require_once __DIR__ . '/database/database.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <title>php-ajax-dischi-milestone-1</title>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
     <header>
       <div class="container">
         <img src="img/logo.png" alt="logo"/>
       </div>
     </header>

     <div class="cds-container container">
       <?php
          foreach ($dischi["response"] as $disco) {
        ?>
       <div class="cd">
         <img src="<?php echo $disco["copertina"]?>" alt="">
         <h3><?php echo $disco["titolo"]?></h3>
         <span class="author"><?php echo $disco["autore"]?></span>
         <span class="year"><?php echo $disco["anno"]?></span>
       </div>
       <?php
        }
        ?>
     </div>
   </body>
</html>
