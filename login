<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <title>Login</title>
      <link rel="icon" href="/img/lgin/favicon.png" type="image/png"/>
      <link href="https://fonts.googleapis.com/css?family=Marcellus+SC|Righteous" rel="stylesheet">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>

      <style media="screen">
        h2 {
          font-size:36px;
          line-height: 100%;

          font-family: 'Marcellus SC', serif;
          position: relative;
          left: 10px !important;
          right: 0px !important;
          top: 35px;

          margin: auto;

        }

        .login_box
        {
          width: 550px;
          height: 250px;

          position: absolute;
          top:0;
          bottom: 0;
          left: 0;
          right: 0;

          padding: 30px;
          /* margin: 1rem 0 1rem 0; */
          border-radius: 1px;
          background-color: #fafafa;

          margin: auto;
        }

        .bg_login
        {
          background-color:  radial-gradient(circle, rgba(0,212,255,0) 21%, rgba(9,94,121,1) 84%, rgba(2,0,36,1) 100%) !important;

        }

        .logo_login
        {
          max-width: 200px !important;
          height: auto;

          position: absolute;
          right: 0;
          left: 0;
          bottom:75px;
          margin-bottom: 50px;
          margin-left: auto;
          margin-right: auto;

        }

        .navheads {
        font-size: 32px;
        font-color: #fff !important;
        font-family: 'Ubuntu', sans-serif !important;
        font-variant: normal !important;
        margin-left: 180px !important;
        }

      </style>
      <style media="screen">
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
              background: #EF3054;
          }
          ::-webkit-scrollbar-thumb:active {
              background: #EF3054;
              -webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.3);
          }
      </style>

   </head>

<body class="container bg_login">
    <div class="row">

      <div class="col s4">

          <h2>Department of <b>Mech</b>anical <b>Eng</b>ineering</h2>

      </div>


    </div>

    <div class="row">
      <div class="login_box z-depth-3 ">
          <form>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="staff_id" type="text" class="validate">
                <label for="staff_id">Staff ID</label>
              </div>
            </div>

            <div class="row">
             <div class="input-field col s12">

                 <i class="material-icons prefix">lock</i>
               <input id="password" type="password" class="validate">
               <label for="password">Password</label>
             </div>
            </div>

          </form>
        </div>

    </div>

      <div class="row">
          <img class = "logo_login" src="/img/lgin/logo_meng.bmp" alt="LOGO">
      </div>


  </div>



      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


</body>

</html>
