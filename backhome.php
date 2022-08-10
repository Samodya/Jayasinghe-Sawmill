<?php
require("OB/product.php");
require("sesscheck.php");

$products= product::pGetProducts();
$productUpdate= new product(null,null,null,null,null,null);

if(isset($_POST["btnUpdate"]))
{
	$productUpdate=$products[$_POST["btnUpdate"]];

	$_SESSION["product"]=$productUpdate;

}

elseif(isset($_POST["btnDelete"]))
{
	
	//Product::Delete($_POST["btnDelete"]);
	
	
//	echo '<script>alert("Product Deleted")</script>';
	try {
		Product::Delete($_POST["btnDelete"]);
	//	echo '<script>alert("Product Deleted")</script>';
		header("location:backhome.php");
	} catch (Exception $th) {
		echo $th;
	}

}

elseif(isset($_POST["btnlout"]))
{
	unset($_SESSION["un"]);
    header("location:backlogin.php");
}

elseif (isset($_POST["btnSave"]))
 {
	$products = array();
	if(isset($_SESSION["product"]))
	{
		$products=$_SESSION["product"];
	}

	$newpName="./productimages/default.jpg";
	$info="";
	if(isset($_FILES["txtCover"]))
	{
		if(!$_FILES["txtCover"]['error']== UPLOAD_ERR_NO_FILE)
		{
			$name= $_FILES["txtCover"]['name'];
			$info = new SplFileInfo($name);
		}

	}


	$product= new product($_POST["txtPcode"],
						$_POST["txtPname"],
						$_POST["txtPcategory"],
						$_POST["txtPprice"],
						$newpName,
						$_POST["txtPdescription"],);

	try {
		
		if(!isset($_SESSION["product"]))
		{
			$newpName = "./productimages/".$_POST["txtPcode"].'.'.$info->getExtension();
			$product->SetPcover($newpName);
			$PID = $product->pAdd();
			move_uploaded_file($_FILES["txtCover"]['tmp_name'],$newpName);
			echo '<script>alert("Product Added")</script>';

			$products= product::pGetProducts();
		}
		else
		{
			$product->SetPID($_SESSION["product"]->GetPID());
			$PID= $product->GetPID();
			if($_FILES["txtCover"]['error']== UPLOAD_ERR_NO_FILE)
			{
				$product->SetPcover($_SESSION["product"]->GetPcover());

			}

			else
			{
				$name = $_FILES["txtCover"]['name'];
				$info = new SplFileInfo($name);
				$newpName="./productimages/".$PID.'.'.$info->getExtension();
				$product->SetPcover($newpName);
				move_uploaded_file($_FILES["txtCover"]['tmp_name'],$newpName);

			}
			$product->SetPID($_SESSION["product"]->GetPID());
			$product->pUpdate();
			$PID=$product->GetPID();
			echo '<script>alert("Product Updated")</script>';
			unset($_SESSION["product"]);
			$products=product::pGetProducts();



		}


	} catch (Exception $th) {
		throw $th;
	}
						




}






?>










<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JF ADMIN HOME</title>
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


<header>
<!--<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>You have successfully LoggedIn!</strong>
</div>-->

<h1>Jayasinghe <em>Sawmill &amp; Furnitures</em> </h1>
</header>

<nav>
<ul id="navback">
<li><a href="backhome.php">ProductMng	&#124</a></li>
<li><a href="backorder.php">OrderMng	&#124</a></li>
<li><a href="backreview.php">ReviewMng	&#124</a></li>
<form  method="post" >
    <input type="submit" id="btnLout" value="Logout" name="btnlout">
</form>


</ul>

</nav>
    

<aside>
<h1></h1>

	<form method="POST" enctype="multipart/form-data" novalidate>
		<ul style="list-style-type: none;">
		<li>Product Code</li>
		<li><input type="text" name="txtPcode" require
			value="<?php
				if($productUpdate->GetPCode()!=null)
				{
					echo $productUpdate->GetPCode();
				}
			?>"	
			></li>

        <li>Product Name</li>
		<li><input type="text" name="txtPname" require 
		value="<?php
				if($productUpdate->GetPName()!=null)
				{
					echo $productUpdate->GetPName();
				}
			?>"	
			></li>

			<li>Product Catogary</li>
		<li><input type="number" name="txtPcategory" require
		value="<?php
				if($productUpdate->GetPCatogary()!=null)
				{
					echo $productUpdate->GetPCatogary();
				}
			?>"	
			></li>


			<li>Product Price</li>
		<li><input type="number" name="txtPprice" require value="<?php
				if($productUpdate->GetPprice()!=null)
				{
					echo $productUpdate->GetPprice();
				}
			?>"	
			></li>



        <li>Product Image</li>
		<li><input type="file" name="txtCover" require ></li>
		<li><?php
				if($productUpdate->GetPcover()!=null)
				{
					echo '<img src="'.$productUpdate->GetPcover().'"
					 width="70px" height="70px">'
					 ;
				}
			?>
			</li>

        

       

        <li>Product Description</li>
		<li><textarea cols="40" rows="10" name="txtPdescription"> 
<?php
if($productUpdate->GetPdescription()!=null)
{
	echo $productUpdate->GetPdescription();
}
?>	
			      
        </textarea></li>

        <li><input type="submit" name="btnSave" class="btn" value="Save">
		<input type="submit" name="btnPrint" class="btn" value="Print"></li>
        
        </ul>
		</form>

</aside>

<main>

	<?php

	if(sizeof($products)>0)
	{
		echo '<form method="post"><table>';
    
	echo	"<tr>
				<th>Product Code</th>
				<th>Product Name</th>
				<th>Product Catogary</th>
				<th>Product Price</th>
				<th>Product Image</th>
				<th>Product Description</th>
				<th>Update</th>
				<th>Delete</th>
			 </tr>";

			$r=0;
			foreach($products as $p)
			{
				echo '<tr>
						<td>'.$p->GetPCode().'</td>
						<td>'.$p->GetPName().'</td>
						<td>'.$p->GetPCatogary().'</td>
						<td>'.$p->GetPprice().'</td>
						<td><img src="'.$p->GetPcover().'" width="100px" height="100px"></td>
						<td>'.$p->GetPdescription().'</td>
						<td><button type="submit" name="btnUpdate" value="'.$r.'">Update</button></td>
						<td><button type="submit" name="btnDelete" value="'.$p->GetPID().'"
							onclick="ComfirmDelete()" >Delete</button></td>
				
					</tr>';

					$r++;
			}

            echo "</table></form>";   



			}
	else
	{
		echo "No Data To Display";
	}		 

	?>


</main>

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


<!--<script>
   function ComfirmDelete()
   {
	var conf= confirm("Are sure, want to delete this?");
	if (conf == true) {
		return true;

	}else{
		
	}

   }






</script>-->

<style>
    body {
	background-image: url("images/Background/bk11.jpg")
	}    
body {font-family: Arial, Helvetica, sans-serif;}

em{color: red;}


table, th , td
        {
           width:  auto;
            border: 1px solid teal;
            word-wrap:break-word;
			font: bold; font-family: 'Times New Roman', Times, serif;
			
            
        }
		th{font-size: larger; background-color: rgba(26, 26, 26, 0.85); color: white;}		

		td{color:white ; font: bold; font-family: 'Times New Roman', Times, serif;
	 font-size: 1.5em; background-color: rgba(32, 24, 28, 0.85);}		

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

aside{ color: white;
        font-size: 1.2em; }

        aside{
            width: 30%;
            margin-top: 20px;
            margin-left: 15px;
            border: double lightslategrey 3px;
            float: left;

        }


main{

/*width: 63.7%;
margin-left: 10px;*/
margin-top: 20px;
border: double lightslategrey 3px;
float: left;
margin-bottom: 3px;


height: auto;
        width: 66%;
         margin-left: 10px;

		
}
        

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 0px 0px;
  margin-top: 8px ;
  margin-left: 5%;
  border: none;
  cursor: pointer;
  width: 80%;
  height: 40px;
}

#btnLout:hover {
  opacity: 0.8;
}


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



.btn:hover {
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

 /* main{height: 545px;
        width: 67%;
         margin-left: 5px;}   */

footer
{
	width: 98%;
	height: 90px;
	/*background-color: rgba(89,89,89,0.5);*/
	margin-left: 15px;
	
	
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
/*	color:rgba(0,0,0,1.00);
	/*background-color: aquamarine;*/
	}

		code
		{
			color: black;
			font: bolder;
		}	

#cc {
	margin-left: 478px;
	margin-top: -45px;
	color: rgba(0,0,0,1.00);
	/*background-color: aquamarine;*/
	}


</style>

</html>