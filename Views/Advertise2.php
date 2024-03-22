<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertise</title>
    <style>
      <?php 
      include 'css/bakoz-category.css';
      include 'css/Advertise/index.css';
      ?>
    </style>
</head>
<body>


  <!-- header section starts here -->
<div class="header">
      <div style="flex: 1;">
           <div id="logo">marketPlace</div>
           <div class="buy-sell-box">
               <div class="box">
                 <img src="images/salary.png" alt="" class="logo-images">
                 <h6>Buy</h6>
               </div>

               <div class="box">
                 <img src="images/profits.png" alt=""class="logo-images">
                 <h6>Sell</h6>
               </div>

               <div class="box">
                 <img src="images/exchange (1).png" alt="" class="logo-images">
                 <h6>Exchange</h6>
               </div>
          </div>
      </div>
          <div id="navbar" style="flex: 2;">
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li> <a href="/smartphone">Smartphone</a> </li>
                  <li> <a href="/laptop">PC</a> </li>
                  <li> <a href="/electrical">Electrical</a> </li>
                  <li> <a href="/clothing">Clothing</a> </li>
                  <li> <a href="/car">Cars</a> </li>
                  <li> <a href="/housing-renting">Housing/Renting</a> </li>
              </ul>
          </div>
            <div class="three" style="flex: 1;">
          
                <p> </p>
                 <img src="../images/user/20210728_142801.jpg" alt="usr-img" height="30" width="30" style="border-radius:50%;">
                 <a href="logout.php">Logout</a>
            
                <a href="Advertise.php" class="sell-box">advertise</a>
            </div>

    </div>
      <!-- header section ends here -->
   
      <!-- Wrapper starts here -->
      <div class="wrapper"style='display:flex;gap:20px'>

        <div class="left" style="height: 100vh; width: 30%;">
          <p style='color:aliceblue; padding: 10px; font-size:large;
          text-align:center;'><a style='color:aliceblue;'href="My listings">My listings</a></p>
          <p><a href="My listings">Notifications</a></p>
          <p><a href="My listings"></a></p>
        </div>
    
       <div class="right" style=' width:70%'>
        
          <h2 class="advertise-heading">Advertise item</h2>
          <form action="uploadFiles.php" method="post" enctype="multipart/form-data">
          <h4>Title</h4>
          <input class="input-list" type="text" text="" name="title" style='font-weight:600;'>
          <h5>Town</h5>
          <input class="input-list" type="text" text="" name="town">
          <h5>Address</h5>
          <input class="input-list" type="text" text="" name="address">
          <h5>Price</h5>
          <input class="input-list" type="number" text="" name='price'>
          <h5>Category</h5>
          <select name="category" id="" class='input-list'>
          <option value="">--Category--</option>

<option value= "cars">Cars</option>
<option value= "laptop">Laptop</option>
<option value= "electrical">Electrical</option>
<option value= "housing">Housing</option>
<option value= "clothing">Clothing</option>
        </select>
        <h5>Description</h5>
        <textarea name="description" id="" cols="30" rows="10"></textarea>

        <br>
        <div id="mybutton">
        <p class="next" onclick="next()">Next</p>
    </div>
    
     </div>

     <!-- Image upload starts here-->

     <div class="imageUpload">


    <input type="file" id="file-input" name="files[]" onchange="preview()" multiple accept=".jpeg , .jpg , .png" >
    <label for="file-input"><span></span>Choose a photo</label>
    <p id="num-of-files">No files chosen</p>
    <div id="images">
        
    </div>
    <div id="mybutton-photo">
        <button type="reset" class="next" onclick="back()">Back</button>
        <input type="submit" value="Submit" id="submit">
    </div>
  </div>
</form>
     <!-- Image upload ends here-->
    
    </div> 
    </div>
   
    <script src = 'js/script.js'></script>
</body>
</html>