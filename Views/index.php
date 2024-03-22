<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bakoz-category.css"> -->
    <style>
        <?php include 'css/index.css';?>
    </style>
    <title>marketPlace.com</title>
</head>
<body>
    <div class="header">
        <h2 class="logo">marketPlace.com</h2>
        <div class="nav">
            <a href="">About</a>
            <a href="">Terms and Conditions</a>
            <a href="">privacy and policy</a>
            <a href="">Help</a>
        </div>
        <div><a class='advertise' href="public/advertise">Advertise</a></div>
    </div>
	<section id="categories">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6"> -->
                    <h1 class="logo">marketPlace.com</h1>
                <!-- </div> -->
            </div>
                <div class="row">
                <!-- <div class="col-md-6"> -->
                    <div class="categories-item">
                        <div class="single-categories-item item1 ">
                            <div class="item-content">
                                <a href="<?= '/laptop';?>">
                             <img src='../Views/img/laptop(1).png' alt=''>
                                <h3>Laptop</h3>
                                </a>
                            </div>
                        </div>
                        <div class="single-categories-item item3">
                            <div class="item-content">
                                <a href="<?= '/smartphone';?>">
                               <img src='../Views/img/smartphone.png' alt=''>"
                                <h3>Smartphone</h3>
                                </a>
                            </div>
                        </div>
                        <div class="single-categories-item item4">
                            <div class="item-content">
                                <a href="<?= '/car';?>">
                                <img src="../Views/img/car.png" alt="">
                                <h3>Car</h3>
                                 </a>
                            </div>
                        </div>
                        <div class="single-categories-item item5">
                            <div class="item-content">
                                <a href="<?= '/clothing';?>">
                                <img src="../Views/img/polo-shirt.png" alt="">
                                <h3>Clothing</h3>
                                 </a>
                            </div>
                        </div>
                        <div class="single-categories-item item6">
                            <div class="item-content">
                                <a href="<?= '/electrical';?>">
                                <img src="../Views/img/classroom-pc.png" alt="">
                                <h3>Electrical</h3>
                                 </a>
                            </div>
                        </div>
                        <div class="single-categories-item item6">
                            <div class="item-content">
                                <a href="<?= '/housing-renting';?>">
                                <img src="../Views/img/home.png" alt="">
                                <h3>Housing</h3>
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </section>
 
    <div class="site-footer" style="margin: 50px 0 70px 0 ;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-9">
              <h4>About</h4>
              <p style="font-size: 1.1rem;">
                  
                  marketPlace.com is a place where you can buy and sell almost everything online.
                   The best deals are often done with people who live in your own city or on your own street,  it's easy to buy and sell locally.
                    You can search item based on your region or location.</br></br>
  You can sign up for a free account and post ads easily
  
              </p>
            </div>
          </div>
        </div>

    </div>

    <footer>
        <div class="container-fluid bg-dark text-white" >
                <p class="p-2 container" style="width: 90%; margin: auto;font-family: 'Verdana' ;font-style: italic;">
                 Designed and implemented by Liym-ntai Ray Langdji 
                </p>
            <div class="row container"style="width:90%; margin:auto">
              <div class="col-sm-5">
                <h2>Address</h2>
                <p>Software Engineering, Degree<br>
                    CITEC-HITM, Yaounde, Cameroon
                </p>
              </div>
            <div class="">
                <h2 style="margin-left: 30px;">Links</h2>
                 <a  href="#"><img src="images/facebook.png" class="fa"></a>
                <a href="#"><img src="images/linkedin-sign.png" class="fa"></a>
                <a  href="#"><img src="images/github-logo.png" class="fa"></i></a>   

            </div>
            </div>
          </div>
    </footer>
  
</body>
</html>