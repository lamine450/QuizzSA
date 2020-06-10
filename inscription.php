<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<form id="connexion-form">
 <h2>inscription</h2>
        <div id="contanier" class="container">
            <div class="form-group row">
            <div class="col-md-3"> prenom</div>
            <div class="col-md-7"><input type="text" name="prenom" value=""></div>
            </div>  
            <div class="form-group row">
            <div class="col-md-3">nom</div>
            <div class="col-md-7"><input type="text" name="nom" value=""></div>
            </div> 
            <div class="form-group row">
            <div class="col-md-3"> login</div>
            <div class="col-md-7"><input type="text" name="login" value=""></div>
            </div>  
            <div class="form-group row">
            <div class="col-md-3">Password</div>
            <div class="col-md-7"><input type="password" name="password" value=""></div>
            </div>  
            <div class="form-group">
            <div class="col-md-7"><input type="submit" name="login" value="inscription"></div>
            </div>  
        
        </div>
</form>
 <?php require_once './pages/connexion.php'?>