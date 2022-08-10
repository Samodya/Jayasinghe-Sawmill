<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <title>Jayasinghe Sawmill & Furnirutes Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/productdescription.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Jayasinghe <em>Sawmill & Furnitures</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Products
                </a>
                
              </li>

              <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              
                </li>
            </ul>
          </div>
          
        </div>
      </nav>
    </header>
    

    <!-- Page Content -->
    <div class="row">
        <div class="dimDowr"></div>
    </div>
    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-md-6">
              <div class="pimage">
                <div class="product-item">
                  <a href="itemDiscription.html"><img src="assets/images/Dining Table/5.png" alt=""></a>
                  
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="pDis">
                <div class="down-content">
                  <h4>Tittle goes here</h4>
                    <p></p>
                    <p class="price-tag">Price Here!</p> 
                    <div class="quantity">
                      <label for="">Quantity</label>
                      <input type="number" name="quantity01" required>
                      <input Class="addcart" type="submit" value="Add to cart" >
                      <label>Description</label>
                      <label for="des">Review of W3Schools:</label>

                        <textarea id="des" name="description" rows="4" cols="50">
                      At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
                          </textarea>
                    </div>            
                </div>
            </div>
          </div>
      </div>
      </form>
        
    </div>

    <div class="container">

      <div class="row">
        <?php
          
          echo '<div class="col-lg-4 col-md-4 all des">';
          echo '<form method="post">';
          echo '<div class="product-item">';
          echo '<a href="#"><img src="assets/images/sofa/1.png" alt=""></a>';
          echo '<div class="down-content">';
          echo '<a href="#"><h4>Tittle goes here</h4></a>';
          echo '<h6>$18.25</h6>';
          echo '<Input type="submit" name="btnadd" value="Add to cart"> ';
          echo '</form>';
          echo '</div>';
          echo'</div>';
          echo'</div>';

          echo '<div class="col-lg-4 col-md-4 all dev">';
          echo '<div class="product-item">';
          echo   '<a href="#"><img src="assets/images/Dining Table/1.png" alt=""></a>';
          echo '<div class="down-content">';
          echo '<a href="#"><h4>Tittle goes here</h4></a>';
          echo '<h6>$18.25</h6>';
          echo '</div>';
          echo'</div>';
          echo'</div>';

                        echo '<div class="col-lg-4 col-md-4 all gra">';
                        echo '<div class="product-item">';
                        echo   '<a href="#"><img src="assets/images/Beds/1.png" alt=""></a>';
                        echo '<div class="down-content">';
                        echo '<a href="#"><h4>Tittle goes here</h4></a>';
                        echo '<h6>$18.25</h6>';                       
                        echo '</div>';
                        echo'</div>';
                        echo'</div>';

                        echo '<div class="col-lg-4 col-md-4 all gra">';
                        echo '<div class="product-item">';
                        echo   '<a href="#"><img src="assets/images/Beds/2.png" alt=""></a>';
                        echo '<div class="down-content">';
                        echo '<a href="#"><h4>Tittle goes here</h4></a>';
                        echo '<h6>$18.25</h6>';
                        echo '</div>';
                        echo'</div>';
                        echo'</div>';

                        echo '<div class="col-lg-4 col-md-4 all dev">';
                        echo '<div class="product-item">';
                        echo '<a href="#"><img src="assets/images/Dining Table/2.png" alt=""></a>';
                        echo '<div class="down-content">';
                        echo '<a href="#"><h4>Tittle goes here</h4></a>';
                        echo '<h6>$18.25</h6>';
                        echo '</div>';
                        echo'</div>';
                        echo'</div>';

                        echo '<div class="col-lg-4 col-md-4 all des">';
                        echo '<div class="product-item">';
                        echo   '<a href="#"><img src="assets/images/sofa/3.png" alt=""></a>';
                        echo '<div class="down-content">';
                        echo '<a href="#"><h4>Tittle goes here</h4></a>';
                        echo '<h6>$18.25</h6>';
                        echo '</div>';
                        echo'</div>';
                        echo'</div>';
                        echo '<div class="col-lg-4 col-md-4 all kit">';
                        echo '<div class="product-item">';
                        echo   '<a href="#"><img src="assets/images/Pantry Cupboards/3.png" alt=""></a>';
                        echo '<div class="down-content">';
                        echo '<a href="#"><h4>Tittle goes here</h4></a>';
                        echo '<h6>$18.25</h6>';
                        echo '</div>';
                        echo'</div>';
                        echo'</div>';


                        echo '<div class="col-lg-4 col-md-4 all kit">';
                        echo '<div class="product-item">';
                        echo   '<a href="#"><img src="assets/images/Pantry Cupboards/2.png" alt=""></a>';
                        echo '<div class="down-content">';
                        echo '<a href="#"><h4>Tittle goes here</h4></a>';
                        echo '<h6>$18.25</h6>';
                        echo '</div>';
                        echo'</div>';
                        echo'</div>';

                        echo '<div class="col-lg-4 col-md-4 all dev">';
                        echo '<div class="product-item">';
                        echo   '<a href="#"><img src="assets/images/sofa/4.png" alt=""></a>';
                        echo '<div class="down-content">';
                        echo '<a href="#"><h4>Tittle goes here</h4></a>';
                        echo '<h6>$18.25</h6>';
                        echo '</div>';
                        echo'</div>';
                        echo'</div>';
                        ?>
      </div>
    </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; Delta Developer.
            
                - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">Delta Developer</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
