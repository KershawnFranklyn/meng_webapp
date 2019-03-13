<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
      <title>Staff</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      <!--Favicon-->
      <link rel="icon" src="img/favicon.png">

      <!--Set Styles for Headings-->


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
  </head>
  <body>

  <?php
  {
  //Connecting to database
  class MyDB extends SQLite3
    {
      function __construct()
      {
         $this->open('C:\sqlite\test.db');
      }
    }

  $db = new MyDB();
     if(!$db)
      {
          echo $db->lastErrorMsg();
      }
       else
      {
          echo "Opened database successfully\n";
      }
      echo '<br/>';
    //QUERIES
    $sql = "SELECT id FROM test_table";
    $result = $db->query($sql);
    while ($row = $result->fetchArray(SQLITE3_ASSOC)){
     //echo $row['id']. '<br/>';
     echo '<div class= \'card\'>' . $row['id'] . '</div>';
   }
 }
  ?>
  <div class="row">

    <div class="col s10">
      COLUMN
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">  </script>

  </body>
</html>
