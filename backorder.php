<?php

//require("connection.php");
require("OB/product.php");
require("sesscheck.php");




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Order Manager</title>
	<link rel = "icon" type = "images/jpg" href = "images/logo.jpg" >
	<link rel="stylesheet" href="assets/css/xx.css">

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

<header><h1>Jayasinghe <em >Sawmill &amp;  Furnitures</em> </h1>
</header>

<nav>
<ul id="navback">
<li><a href="backhome.php">ProductMng	&#124</a></li>
<li><a href="backorder.php">OrderMng	&#124</a></li>
<li><a href="backreview.php">ReviewMng	&#124</a></li>
<form action="backlogin.php" method="post" >
	
    <input type="submit" id="btnLout" value="Logout" name="btnLOut">
</form>


</ul>

</nav>

<main>
	

	<div class="container mt-2">
		<div class="row">
			<div class="col-lg-12">

		<table class="table table-dark text-center table-striped">
			
				<thead>
				<tr>
				<th scope="col">Order ID</th>
				<th scope="col">Customer Name</th>
				<th scope="col">Contact Number</th>
				<th scope="col">Address</th>
				<th scope="col">Email</th>
				<th scope="col">Order Remove</th>
				<th scope="col">Order Details</th>
				
				</tr>
			</thead>
				<tbody>
				<?php
				$conn =Connection::GetConnection();
				$query="SELECT * FROM `customer_manager` ORDER BY CID DESC";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				$result = $stmt-> fetchAll();
				
				foreach($result as $value)
				{
					$ccid=$value['CID'];

				echo '	<tr>
				<td>'.$value['CID'].'</td>
				<td>'.$value['CName'].'</td>
				<td>'.$value['CPNumber'].'</td>
				<td>'.$value['CAddress'].'</td>
				<td>'.$value['CEmail'].'</td>
				<form method="POST"><td><button type="submit" name="btnDelete" value="'.$ccid.'"
				onclick="ComfirmDelete()" >Remove</button></td></form>
				<td>
							<table class="table table-dark text-center table-striped">
							<thead>
							<tr>
							<th scope="col">Product Name</th>
							<th scope="col">Price</th>
							<th scope="col">Quntity</th>
							</tr>
						</thead>
							<tbody>';
							$ORDid=$value['CID'];
							$conn =Connection::GetConnection();
							$order_query="SELECT * FROM `customer_order` WHERE `OID`=$ORDid";
							$stmts=$conn->prepare($order_query);
								$stmts->execute();
								$results = $stmts-> fetchAll();
								foreach($results as $values)
								{

								echo '	<tr>
								<td>'.$values['Product_Name'].'</td>
								<td>'.$values['Prod_Price'].'</td>
								<td>'.$values['Prod_quntity'].'</td>
								</tr>';
								}
				
				
				
				
				
						
						echo '</table>
						</tbody>
						
						</td>
						</tr>';
	
				}
			
				
				
				
				
				?>

				
				</tbody>

			</table>




			</div>
		</div>
	</div>








			</main>


			<?php

			if(isset($_POST["btnDelete"]))
{
	
	//Product::Delete($_POST["btnDelete"]);
	
	
//	echo '<script>alert("Product Deleted")</script>';
	try {
		Product::DeleteOrder($_POST["btnDelete"]);
		Product::DeleteOrderC($_POST["btnDelete"]);
		echo '<script>alert("Order Deleted")</script>';
          echo' <script language="Javascript">';
          echo'  window.location = "backorder.php";';
          echo'  </script>';
	} catch (Exception $th) {
		echo $th;

		
	}


}

	?>

		





<footer>

<a href="https://www.instagram.com/jayasinghe_saw_mill.furniture" title="Instagram" target="_blank">
	<img id="twt" alt="twt" src="images/SMlogo/inst.png" >
	</a>
		<a href="https://www.facebook.com/JayasingheSawMillandFurniture" title="Facebook" target="_blank">
	<img id="fb" alt="fb" src="images/SMlogo/fb.png" >
	</a>
		<p>
	  	<div id="rights"><code> Copyright © 2021 Delta Developvers. All rights reserved.
		</code></div>
        <div id="cc"> &copy; Delta Developvers 2021 </div>
        </p>

</footer>



 <!-- Bootstrap core JavaScript-->
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

<style>
body {
	background-image: url("images/Background/bk11.jpg")
	}    
body {font-family: Arial, Helvetica, sans-serif;}




table, th , td
        {
            width: auto;
            border: 1px solid teal;
            word-wrap:break-word;
			/*font: bold; font-family: 'Times New Roman', Times, serif;
			color: white;*/
            
        }

header
{
	width: 98%;
	height: 110px;
	/*background-color: rgba(0,0,0,1.00);*/
	margin-left: 15px;
	margin-right: 15px;
	margin-top: 0px;
	padding-top: 20px;
	padding-bottom: 50px;
	color: aliceblue;
    border-radius: 6px 6px 6px 6px;
	 background-image: linear-gradient(to bottom right ,black,black,#4F4F4F);
     opacity: 0.92;
	/*color: #4F4F4F;*/
	
		font-size: 1.8em;
		font-style: oblique;
		font-family: serif;
		text-transform: uppercase;
		cursor: default;
		text-align: center;
	
	}

  /*  main{

width: 98%;
margin-left: 10px;
margin-top: 20px;
border: double lightslategrey 3px;
float: left;
margin-bottom: 3px;
}*/

#btnLout {
  background-color: #04AA6D;
  color: white;
  padding: 0px 0px;
  margin-top: 5px ;
  margin-right: 5%;
  margin-left: 50px;
  border: none;
  cursor: pointer;
  width: 30%;
  height: 40px;
}


#btnLout:hover {
  opacity: 0.8;
}



nav {
	width: 98%;
	height: 55px;
	background-color: rgba(89,89,89,0.5);
	margin-left: 15px;
	margin-top: 3px;
	
	}


#navback {
	list-style-type: none;
	margin-left: 200px;
	
	}


#navback li {
	float: left;
	margin-top: -0px;
	margin-left: 6px;
	}

 #navback li a{
	padding-top: 4px;
	text-decoration: none;
	display: block;
	width:auto;
	height: 47px;
	color: #EBDFDF;
	border: thin rgba(89,89,89,0.5);
	font-size: 2em;
	border-radius: 4px 4px 4px 4px;
	
	  }

      #navback li a:hover{
		font-size: 2.2em;
		font-display: block;
		background-color: aliceblue;
		color: #000000;	
     }

  main{height: auto;
        width: 98%;
         margin-left: 15px;
           
        margin-top: 20px;
        border: double lightslategrey 3px;
        float: left;
        margin-bottom: 3px;
                          
        } 
        
	 em{color: red}  

footer
{
	width: 98%;
	height: 90px;
	/*background-color: rgba(89,89,89,0.5);*/
	margin-left: 15px;
	margin-top: auto;
}

#twt{
	width: 30px;
	height: 30px;
	margin-left: 505px;
	margin-top: 5px;
	border-radius: 10px ;
	}

#fb{
	width: 30px;
	height: 30px;
	margin-left: 7px;
	border-radius: 10px;
	}

#rights{
	/*width: 44%;
	height: 40px;*/
	margin-left: 344px;
	margin-top: 30px;
	font-size: 1.4em;
	font-weight: 200;
	color:rgba(0,0,0,1.00);
	
	}

code
{
	color: black;
}	

#cc {
	margin-left: 478px;
	margin-top: -45px;
	color: rgba(0,0,0,1.00);
	/*background-color: aquamarine;*/
	}




</style>
</html>