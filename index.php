<html>
  <head>
    
  </head>
  <body>
    <?php

      $sacha = array(
        'age' => 27,
        'name' => 'Sacha'
      );

      $emilian = array(
        'age' => 16,
        'name' => 'Emilian'
      );

      $yvette = array (
        'age' => 77,
        'name' => 'Yvette'
      );

      $people = array($sacha, $emilian, $yvette);

      foreach ($people as $person) {
        if ($person['age']>=18) {
          echo 'Bonjour '.$person['name'].'<br />';  
        }
        else {
          echo 'Reviens quand t\'es majeur '.$person['name'].'<br />';
        }
      }

    ?>
  </body>
</html>