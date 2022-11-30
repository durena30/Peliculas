<footer class="container-fluid bg-dark text-light" id="about">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col col-lg-6">
                    <div class="d-flex">
                        <?php 
                            if(isset($_GET["page"])){
                        ?>
                            <img src="../resources/imgs/popcorn.png" width=10%/>
                        <?php
                            }else{
                        ?>
                        <img src="./resources/imgs/popcorn.png" width=10%/>
                        <?php
                            }
                        ?>
                        <h2>PopCorn Movies & Series</h2>
                    </div>
                    <h6 max-width="20px">Desinged and developed by D. Development and Design</h6>
                    <h6 max-width="20px">PopCorn Version 1.0.0</h6>
                    
                </div>
                <div class="col text-start">
                    <h4 class="">Links</h4>
                    <ul class="container fluid">
                        <li class=""><a class="text-decoration-none text-light" href="#">Home</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#features">Features</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#pricing">Pricing</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#about">About</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4 class="">FAQs</h4>
                    <ul class="container fluid">
                        <li class=""><a class="text-decoration-none text-light" href="#">How buy a membership?</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#">How Register?</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#">Is there a trial period?</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#">About Series & Movies?</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4 class="">About Us</h4>
                    <ul class="container fluid">
                        <li class=""><a class="text-decoration-none text-light" href="#">Contact Us</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#">Terms & Conditions</a></li>
                        <li class=""><a class="text-decoration-none text-light" href="#">Privacy Policy</a></li>

                    </ul>
                </div>
            </div>
            <div class="container-fluid text-center pb-3">
                <h6>Social Networks</h6>
                <div class="d-flex justify-content-center">
                    <div class="mx-2">
                        <a href="" class="fa-brands fa-instagram text-light text-decoration-none" width="2rem"></a>
                    </div>
                    <div class="mx-2">
                        <a href="" class="fa-brands fa-facebook text-light text-decoration-none"></a>
                    </div>
                    <div class="mx-2">
                        <a href="" class="fa-brands fa-twitter text-light text-decoration-none"></a>
                    </div>
                    <div class="mx-2">
                        <a href="" class="fa-brands fa-twitch text-light text-decoration-none"></a>
                    </div>
                </div>
                <h6 max-width="20px">© 2022 PopCorn Movies & Series. All rights reserved</h6>
            </div>
        </div>
    </footer>
</body>
</html>