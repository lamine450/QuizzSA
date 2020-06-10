<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <style>
html,body{
    height: 100%;
    padding: 0;
    margin: 0;
}
header{
    height: 8em; 
    background-color: green;  
} 
#logo 
{
  height: 7.5em ;   
}
#container
{

  background-image: url("./public/images/morguefile.jpg");
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
  position: relative;
  height: 500%;
}
.connexion
{
width: 60%;
height: 15%;
background-color: orange;
background-size: cover;
position: absolute;
left: 22%;
top: 10%;
}
h3{
  color: white;
  position: absolute;
  left: 40%;
  top: 15%;
}
.form{
  width: 60%;
  height: 70%;
  background-color: white;
  position: absolute;
  top: 20%;
  left: 22%;
}
.login
               {
                background-image: url(..images/Icones/ic-login.png);
               }

</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>      
  
      

                   <div   class="container-fluid ">

                          <header class="row p-0 ">
                           <div class="col-1 d-flex">
                                  <img class="m-auto" src="./public/images/logo-QuizzSA.png" alt="" id="logo">
                           </div>
                              <div class="  col-11 text-center text-white d-flex justify-content-center align-items-center">
                                  <h1 style="font-family: 'Rosarivo', serif;" >J'ai le plaisir de jouer</h1>
                              </div>
 
      <div id = "container"  class="container-fluid">
        
        <div class="form"></div>
        <div class="login"></div>
      <?php require_once './pages/connexion.php' ?>


      </div>

                    </div>
    <!-- Optional JavaScript -->
    <script src="./public/js/route.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>