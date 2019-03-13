<!DOCTYPE html>


<html>
<head>
  <title>Staff</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=MyriadPro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Mono" rel="stylesheet">
  <!--Favicon-->
  <link rel="icon" type="img/png" href="img/baseline_account_circle_black_48dp.png">

  <!--Set Styles for Headings-->
  <style media="screen">
    .navheads {
    font-size: 32px;
    font-color: #fff !important;
    font-family: 'Ubuntu', sans-serif !important;
    font-variant: normal !important;
    margin-left: 180px !important;
    }

  nav {
    background-color: #086375 !important;
    position: fixed;
    top: 0;
  }
  nav .nav-wrapper{
      background-color: inherit;
    }
  img.navlogo
    {
      margin : 5px 2px;
      height : 42px !important;
    }

    nav .input-field input {
      height: 100%;
      font-size: 1.2rem;
      border: none;
      padding-left: 50px !important;
    }
    .sidenav {
      position: fixed !important;
      left: 0;
    }
    .card-panel
    {
      margin: 1px 1px 1px 1px !important;

    }

    ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #FFF;
            -webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.1);
        }
        ::-webkit-scrollbar-thumb {
            background: #B2B09B;
            -webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.2);
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #EF3054
;
        }
        ::-webkit-scrollbar-thumb:active {
            background: #EF3054;
            -webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.3);
        }
  </style>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<body>

  <?php
  //Connecting to database
  class MyDB extends SQLite3
    {
      function __construct()
      {
         $this->open('C:\sqlite\test.db');
      }
    }

   $db = new MyDB();
      echo '<br/>';
    //QUERIES
    $sql = "SELECT * FROM test_table where name='$_POST[search_in]'";
    $result = $db->query($sql);

    if($result->fetchArray(SQLITE3_ASSOC) == 0)
    {
      header("Location: staff.php");
      exit();
    }
    else {
      $sql = "SELECT * FROM test_table where name='$_POST[search_in]'";
      $result = $db->query($sql);
    }
    ?>

  <!--NAVIGATION BAR-->
  <div class="row">
    <div class="wrapper">
          <nav class="" role="navigation">

              <div class="nav-wrapper container">
                  <a href="#!" class="brand-logo col s2">
                    <img src="/img/navbar/logo_meng.png" class="navlogo" alt="logo">
                  </a>
                  <div class="navheads col s9">
                    Department of <b>Mech</b>anical <b>Eng</b>ineering
                  </div>

                  <ul class="hide-on-med-and-down right">
                      <li>
                        <form action="search.php" method="post">
                          <div class="row">
                            <div class="col s2 l3">
                              <div class="row">
                                <div class="input-field col s2 l3">
                                  <i class="material-icons prefix">search</i>
                                  <input type="text" id="autocomplete-input" class="autocomplete" name="search_in">
                                  <label for="autocomplete-input">Search here...</label>
                                </div>
                              </div>
                            </div>
                      </div
                        </form>
                        </li>
                    </ul>

              </div>
          </nav>
    </div>
  </div>



   <div class="row">
     <!--SIDE BAR-->
     <div class="col s2 l2">
       <ul id="slide-out" class="sidenav sidenav-fixed z-depth-3">


         <li><img class="responsive-img" src="https://sta.uwi.edu/newspics/2017/Regcrest.jpg" width="200px"></li>

        <!--Links to other pages must be inserted-->
         <li class="card-panel z-depth-2"><a href="staff.php"><i class="material-icons small">account_circle</i>Staff</a></li>
         <li class="card-panel z-depth-2"><a href="#!"><i class="material-icons prefix small">list</i>Index</a></li>
         <li class="card-panel z-depth-2"><a href="#!"><i class="material-icons prefix small">priority_high</i>Report Issues</a></li>


          <li>
            <div class="divider"></div>
            <a class="waves-effect waves-light btn-large">
             <i class="material-icons md-light">create</i>
             EDIT DATA
             </a>
           </li>
        </ul>
     </div>
     <!--GRID ARRAY-->
     <div class="col s10 l10">





     </div>

   </div>
   <div class="row">
     <div class="col s2">
       SIDEBAR

     </div>
     <div class="col s10">
       <?php

         while ($row = $result->fetchArray(SQLITE3_ASSOC))
         {


            echo '<div class= \'card-panel col s3\'>
              <div class=\'card-horizontal\'>
                <div class=\'card-image\'>
                  <i class=\'material-icons large\'>account_circle</i>
                  <div class=\'card-stacked\'>
                    <div class=\'card-content\'>
                      <p>'. $row['id'] . '</p>
                      <p>'. $row['name'] . '</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
          }


        ?>

     </div>
   </div>




<script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
<script type="text/javascript" src="js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">  </script>


</body>

</html>
