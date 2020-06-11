<!doctype html>
<html lang="en">
  <head>
    <title>Homepage </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    
    </style>
    <!-- bootstrap local -->
    <link rel="stylesheet" href="asset/CSS/bootstrap.css">
  </head>
  <body>
    <div class="container-fluid ">
       <!-- header -->
          <div class="row">
              <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="text-center text-secondary">
                    
                </div>   
              </div>   
          </div>
       <!-- end_header  -->
 
            <!--Modal: Contact form-->
            
          
              <!--Content-->
              <div class="" style="position: absolute; left:30%;" >  
          
               
                <!--Body-->
            

                  <!-- formulaire -->
                  <form action="" method="post"> 
                    <!-- Default input name -->
                    <label for="defaultFormNameModalEx">LOGIN</label>
                    <input type="text" id="input1" name="login" id="defaultFormNameModalEx" class="form-control form-control-sm">
                    <span id="login_error" class="text-danger"><?php echo $login_error; ?></span>
                    <br>
            
                    <!-- Default input email -->
                    <label for="defaultFormEmailModalEx">PASSWORD</label>
                    <input type="password" id="input2" name="password" id="defaultFormEmailModalEx" class="form-control form-control-sm">
                    <span id="password_error" class="text-danger"><?php echo  $password_error; ?></span> 
                    <br>
            
                    <div class="text-center mt-4 mb-2 text-align-between">
                      <button type="submit" id="bouton" name="sign_in" class="btn btn-info">Connexion</button>
                      <button type="submit" name="create_account" class="btn  ">s'inscrire pour joue</button>
                    </div>

                  </form>  
          
                </div> 
              </div>
              
            </div>
    
          
        
       
    </div>    
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- bootstrap.js local -->
    <link rel="stylesheet" href="asset/JS/bootstrap.js">
  </body>
</html>