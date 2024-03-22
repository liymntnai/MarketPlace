<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bakoz-category.css"> -->
    <style>
      <?php include 'css/bakoz-category.css'?>
    </style>
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title></title>
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

  <!-- menu section starts here -->
  <section class="menu">

          <!-- <div class="looking-for-box">What are you looking for?:  <input  id="looking-for" type="text" name="what"></div> -->

          <form class="form-search" method="post" action="search_post.php" >
           <fieldset>
               <legend>Filter</legend>
            category<select name="category" id="" placeholder="Category" required>
  <option value="">--Category--</option>

              <option value= "">Cars</option>
              <option value= "">Cars</option>
              <option value= "">Cars</option>
              <option value= "">Cars</option>
     
            </select>




           <div class="search-box">Town<input class="text-input" type="text" name="town"placeholder="Town"></div>
           <div class="search-box">Address<input class="text-input"type="text" name="address"placeholder="Address"></div>
           <div class="search-box">Price From<input class="number-input" type="number" name="start_price"placeholder=""></div>
           <div class="search-box">-to<input class="number-input" type="number" name="end_price"placeholder=""></div>
           <input type="submit" value="Submit" id="submit" name="submit">
       </fieldset>

           </form>
   </section>
      <!-- menu section ends here -->

<!-- menu section ends here -->
<!-- Pagination section starts here -->
<section class="pagination-box">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
    <li class="breadcrumb-item active"><a href="">Cars</a></li>

  </ul>
</section>

<!-- Pagination section ends here -->
<!-- content section starts here -->

<section class="container-fluid" style="display: flex; margin-bottom: 100px;">

<!-- <div class="other-category">
    <h1 class="kategori">Sub category</h1>
    <a href="">VW</a>
    <a href="">BMW</a>
    <a href="">Mercedez Benz</a>
    <a href="">Volvo</a>
    <a href="">Toyota</a>
    <a href="">Lexus</a>
    <a href="">Hyundai</a>

</div> -->
<div class="description">
  <div class="heading">
       <div class="primary-column">
            <img src="images/filter.png" alt="" class="filter-image">
       <span>filter</span>
       </div>
      <div class="columns">price</div>
      <div class="columns">town</div>
      <div class="columns">address</div>
   </div>



  <?php
    // $sql="SELECT * FROM post where cat_name='Cars' order by post_date";
    // $result=$conn->query($sql);
    // if (!$result) {
    //   die("Error querying posts from server".$conn->connect_error);
    // }else {
    // $count=$result->num_rows;
    // if ($count>0) {


    // for ($a=0; $a<$result->num_rows; $a++) {
    //   $row=$result->fetch_assoc();
    //   $post_id=$row['post_id'];
    //   $post_title=$row['post_title'];
    //   $post_price=$row['post_price'];
    //   $post_town=$row['post_town'];
    //   $post_address=$row['post_address'];
    //   $post_condition=$row['post_condition'];
    //   $post_user_email=$row['post_user_email'];
    //   $post_image=$row['post_image1'];
    //   $post_description=$row['post_description'];
    //   $time=$row['time'];
    //   // $category=$row['cat_name'];

?>
<?php 
if(!$params){
  echo '<div style="font-size:2em; color:red;">No ads found</div>';
}
foreach($params as $param){

 ?>
      <a class="single-post" href="singlepost.php?post_id=<?php echo $param['post_id']?? 'id not set'; ?>" >
        <div class="image-box">
        <div class="primary-column">
        <img src='../Views/img/<?= $param["post_image"]?>' alt='vehicle-2' style='max-height:80%'>
           <div style="background-color: aliceblue; float: left;">

                        <div class="listed-time">
                
                        </div>
            <h2 class="title"><?= $param['post_title']?></h2>
              <p class="item-info"><?= $param['post_description']?></p></div>
            </div>
          <div class="columns item-price"><?php echo number_format($param['post_price']) ?><span style="font-size: small;font-weight:200"> Frs</span></div>
          <div class="columns item-town"><?php  echo $param['post_town']?></div>
          <div class="columns item-address"><?php echo $param['post_address']?? 'address not set'; ?></div>
        </div>

        </a>
        <?php } ?>
    </div>
  </div>
 </div>
</section>
<!-- content section ends here -->
<section class="footer">
  <h3>Designed and implemented by <span style="font-family:Sacramento-Regular">Liym-ntai Ray Langdji</span></h3>
  <p>2023, CITEC-HITM, Software Engineering, Degree</p>
</section>
</body>

</html>
