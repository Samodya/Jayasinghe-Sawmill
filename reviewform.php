<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
     <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="btnModal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
     <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" id="bodyofRe">
            <ul style="list-style-type: none;">
            <br>
            <br>
            <div id="rehead">
           <h2>Give your thoughts about our product</h2></div>
           <br>
           <br>
        <li><input type="text" name="ReviewName" class="RRReviewbox" placeholder="Your Name"></li>
        <li><input type="email" name="ReviewEmail" class="RRReviewbox" placeholder="Your Email"></li>
        <li> <textarea rows = "3" name="ReviewMsg" class="RRReviewbox" cols = "10" placeholder="Enter Review"></textarea>
       
        <li> <input class="w3-radio" type="radio" name="gender" value="Cash On Delivery" checked>
<label>Cash On Delivery</label></li>
        </ul>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="submitreview">Submit</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<style>

    #btnModal
    {
        float: right;
    }

    #bodyofRe
    {
        width:100%;
        height: fit-content;
        background-image: url('images/2.png');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size:100% 100%;
    background-position:center;
        
        /*background-color: yellow;*/
    }

    .RRReviewbox
    {
        margin:5px;
        width: 80%;
        outline: none;
        background-color:#f5fe4e;
        border: white;
        color:black;
        border-radius: 5px;
    }
    #submitreview
    {
		background-color:#04AA6D;
        color: white;

    }

    #submitreview:hover
    {
        background-color:white;
        color: #04AA6D;
        border: 1px solid #04AA6D;

    }

    #rehead
    {
        color: black;
        font-size:xx-large;
        font:bolder;
        font-weight: 200;
        font-family: 'Times New Roman', Times, serif;
    }



    
    

    @media (max-width: 500px)
    {
        #bodyofRe
        {
            background-position-y: -200px;
            background-position-x: -20px;
            background-size:100% 100%;

        }


    }



</style>

<!-- echo '    <input type="text" name="ReviewName" class="RRReviewbox" placeholder="Your Name">';
          echo '        <input type="email" name="ReviewEmail" class="RRReviewbox" placeholder="Your Email">';
          echo '          <textarea rows = "3" name="ReviewMsg" class="RRReviewbox" cols = "10" placeholder="Enter Review">
         
        </textarea>';
          echo '        <input type="submit" name="ReviewBtn"  value="Submit">';
                

-->
    
</body>
</html>