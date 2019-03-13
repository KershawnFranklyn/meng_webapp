<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <title>Add New</title>
      <link rel="icon" href="/img/add.png" type="image/png"/>
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
          line-height: 110%;
          font-family: 'Roboto Slab', serif;
          margin: 36px 0 24px 0;
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
              background: #EF3054
      ;
          }
          ::-webkit-scrollbar-thumb:active {
              background: #EF3054;
              -webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.3);
          }
      </style>

   </head>

<body class="container">





  <div class = "row">

         <form class = "col s10">
           <h2><strong>Personal Info</strong></h2>
            <div class="card-panel z-depth-2">

              <div class = "row">

                   <div class = "input-field col s4">
                      <i class = "material-icons prefix">account_circle</i>
                      <input placeholder = "9-Digit ID"  id = "name"
                         type = "text" class = "active validate" required />
                      <label for = "name">Staff ID</label>
                   </div>

                   <div class = "input-field col s4">
                     <i class="material-icons prefix">email</i>
                      <input placeholder = "Email" id = "email" type = "email"
                         class = "validate">
                      <label for = "email">Email</label>
                   </div>



              </div>

              <div class = "row">

                 <!-------------------------------PERSONAL INFO---------------------------->
                 <div class = "input-field col s4">
                   <i class = "material-icons prefix">person</i>
                    <input placeholder = "Enter Last Name Here" id = "l_name"
                       type = "text" class = "active validate" required />
                    <label for = "name">Last Name</label>
                 </div>

                 <div class = "input-field col s4">
                    <input placeholder = "Enter First Name here"  id = "f_name"
                       type = "text" class = "active validate" required />
                    <label for = "name">First Name</label>
                 </div>

                 <div class = "input-field col s4">
                   <i class = "material-icons prefix">phone</i>
                    <input placeholder = "Enter Primary Phone Here"  id = "name"
                       type = "tel" class = "materialize-textarea" required />
                    <label for = "name">Telephone</label>
                 </div>
              </div>

              <div class = "row">
                 <div class = "input-field col s7">
                    <i class = "material-icons prefix">mode_edit</i>
                    <input placeholder = "Street Number and Name"  id = "address"
                       type = "text" class = "active validate" required />
                    <label for = "name">Address Line I</label>
                 </div>

                 <div class = "input-field col s7">
                   <i class = "material-icons prefix"></i>
                    <input placeholder = ""  id = "address"
                       type = "text" class = "active validate" required />
                    <label for = "name">Address Line II</label>
                 </div>

                 <div class="row">
                   <div class = "input-field col s6">
                     <i class = "material-icons prefix">location_city</i>
                      <input placeholder = "City"  id = "address"
                         type = "text" class = "active validate" required />
                      <label for = "name">City</label>
                   </div>

                   <div class = "input-field col s6">
                     <i class = "material-icons prefix">my_location</i>
                      <input placeholder = "XXX-XXX"  id = "address"
                         type = "text" class = "active validate" required />
                      <label for = "name">ZIP Code</label>
                   </div>

                 </div>

              </div>

              <div class="row">
                  <button class="btn waves-effect waves light"type="submit" name="action">
                    Submit
                    <i class="material-icons right">send</i>
                  </button>
              </div>
            </div>

            <div class="divider"></div>


              <div class="input-field col s12">


              <select>
                <option value="Tghis" selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
         </form>
      </div>

      <div class="row">
        <form class="col s10 m10 l10">
          <h2><strong>Professional Info</strong></h2>
        </form>

      </div>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


</body>

</html>
