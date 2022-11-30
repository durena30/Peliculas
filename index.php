<?php
require "./config/db.php";
if(isset($_POST['login']) && isset($_POST['log_user']) && $_POST['log_user']!="" && isset($_POST['log_pass']) && $_POST['log_pass'] !=""){

	//Se hashea la contrasena
	$hash_pass = hash("sha256",$_POST['log_pass']);
	
	//Se traen los datos de la db
	$query = mysqli_query($db,"SELECT * FROM users WHERE email= '$_POST[log_user]' AND password = '$hash_pass' LIMIT 1");
	
	//Se verifica que el usuario existe
	if(mysqli_num_rows($query) > 0){
		//Se obtienen los datos y se hace un arreglo asociativo
		$user = mysqli_fetch_assoc($query);
		
		//Se crea la Session
		session_start();
		$_SESSION["uid"]=$user["id"];
		
		//Aca se crea la alerta
		$errorl = "success";

		//Se redirige a la pagina principal
		echo '<meta http-equiv="refresh" content="2; url=http://localhost/Netflix/views?page=dashboard">';
	}else{
		$errorl = "error";
		$errormsg="<div class=\"alert alert-dismissible alert-danger\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        <strong>Oh snap!</strong> The email or password are wrong!
        </div>";
	}


}

if(isset($_POST['register']) && isset($_POST['reg_email']) && $_POST['reg_email']!="" && isset($_POST['reg_email2']) && $_POST['reg_email']!="" && isset($_POST['reg_pass'])&&$_POST['reg_pass']!="" && isset($_POST['reg_pass2']) && $_POST['reg_pass2']!=""){
	$pass=$_POST['reg_pass'];
	$pass2=$_POST['reg_pass2'];
	$email = $_POST['reg_email'];
    $email2 = $_POST['reg_email2'];

	$pass = hash("sha256",$pass);
	$pass2 =hash("sha256",$pass2);
    $userdup = mysqli_query($db,"SELECT COUNT(*) FROM users WHERE email= '$_POST[log_user]' LIMIT 1");
    if($userdup===0){

        
        if($pass ===$pass2 && $email ===$email2){
            mysqli_query($db,"INSERT INTO users (email,password) VALUES('$email','$pass')");
            session_start();
            $_SESSION["uid"]=$user["id"];
            
            //Aca se crea la alerta
            $errorl = "success";

            //Se redirige a la pagina principal
            echo '<meta http-equiv="refresh" content="2; url=http://localhost/Netflix/views?page=dashboard">';

        }else{
            $errorl = "error";
            $errormsgreg="<div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Oh snap!</strong> The emails or passwords are wrong!
            </div>";
        }
    }else{
        $errormsgreg="<div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Oh snap!</strong> There is already a user with this email! Please try again.
            </div>";
    }

}


?>
<?php
require "./components/header.php";
?>
<div class="container-fluid text-center"><?php if(isset($errormsg)){echo $errormsg;}if(isset($errormsgreg)){ echo $errormsgreg;} ?></div>

    <div class="container-fluid img-homepage ml-0 mr-0">
        <!-- <img src="./resources/imgs/bg_homepage.png" height="100%" width="100%"alt=""> -->
        <div class="row container-fluid">
            <div class="col"></div>
            <div class="col">
                <h2 class="title-homepage text-center">Lights, Camera, Action!</h2>
                <h4 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto rerum nesciunt porro quis! Aspernatur, quas.</h4>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col text-end">
                            <button class="btn btn-dark text-warning" id="Registerbtn2"> Sign Up</button> 
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-dark" id="Loginbtn2"> Log In</button> 
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-dark" id="features">
        <div class="row">
            <div class="col my-5 d-flex justify-content-center">
                <div class="card-info mb-3 bg-dark" style="max-width: 20rem;">
                    
                    <div class="card-body text-center">
                        <i class="fa-solid fa-video fs-1 text-warning mb-1" ></i>
                        <h4 class="card-title text-warning">Movies</h4>
                        <p class="card-text text-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio iure perspiciatis illo!</p>
                    </div>
                </div>

            </div>
            <div class="col my-5 d-flex justify-content-center ">
                <div class="card-info mb-3 bg-dark" style="max-width: 20rem;">
                    
                    <div class="card-body text-center">
                        <i class="fa-solid fa-tv fs-1 text-warning mb-1"></i>
                        <h4 class="card-title text-warning">Series</h4>
                        <p class="card-text text-warning">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, esse veniam perspiciatis est eveniet assumenda?</p>
                    </div>
                </div>

            </div>
            <div class="col my-5 d-flex justify-content-center">
                <div class="card-info  mb-3 bg-dark" style="max-width: 20rem;">
                    
                    <div class="card-body text-center ">
                        <i class="fa-solid fa-hand-holding-dollar fs-1 text-warning mb-1"></i>
                        <h4 class="card-title text-warning">Low Costs</h4>
                        <p class="card-text text-warning">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum nulla nostrum earum?</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-white" id="pricing">
        <div class="row">
            <div class="col my-5 d-flex justify-content-center">
                <div class="card-info mb-3 bg-white" style="max-width: 20rem;">
                    
                    <div class="card-body text-center">
                        <i class="fa-solid fa-film fs-1 text-dark mb-1" ></i>
                        <h4 class="card-title text-dark">Movie Buff</h4>
                        <h5 class="text-success">$2.90</h5>
                        <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio iure perspiciatis illo!</p>
                    </div>
                </div>

            </div>
            <div class="col my-5 d-flex justify-content-center ">
                <div class="card-info mb-3 bg-white" style="max-width: 20rem;">
                    
                    <div class="card-body text-center">
                        <i class="fa-solid fa-photo-film fs-1 text-dark mb-1"></i>
                        <h4 class="card-title text-dark">Premium</h4>
                        <h5 class="text-success"><del class="text-danger">$5.00</del>  $3.90</h5>
                        <h4 class="text-warning"><i class="fa-solid fa-star"></i> Best Offer <i class="fa-solid fa-star"></i></h4>
                        <p class="card-text text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, esse veniam perspiciatis est eveniet assumenda?</p>
                    </div>
                </div>

            </div>
            <div class="col my-5 d-flex justify-content-center">
                <div class="card-info  mb-3 bg-white" style="max-width: 20rem;background-color:'#F8F8F8'; ">
                    
                    <div class="card-body text-center ">
                        <i class="fa-solid fa-users-viewfinder fs-1 text-dark mb-1"></i>
                        <h4 class="card-title text-dark">VIP</h4>
                        <h5 class="text-success">$5.90</h5>
                        <p class="card-text text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum nulla nostrum earum?</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
require "./components/modals.php";
require "./components/footer.php";
?>




<script type="text/javascript">

$(document).ready(function(){
    $("#Loginbtn1").click(function(){
        $("#Login").show();
    });
    $("#Loginbtn2").click(function(){
        $("#Login").show();
    });
    $("#closemodal1").click(function(){
        $("#Login").hide();
    });
    $("#closemodal2").click(function(){
        $("#Login").hide();
    });

    $("#Registerbtn1").click(function(){
        $("#Register").show();
    });
    $("#Registerbtn2").click(function(){
        $("#Register").show();
    });
    $("#closemodalr1").click(function(){
        $("#Register").hide();
    });
    $("#closemodalr2").click(function(){
        $("#Register").hide();
    });
    $(".btn-close").click(function(){
        var parent=$(this).parent();
        parent.hide();
    });
})
    
</script>


<?php


?>


    
