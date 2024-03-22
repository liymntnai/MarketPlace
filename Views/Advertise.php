<?php
// session_start();
include_once 'header.php';
include_once 'auth_session.php';
date_default_timezone_set('Europe/London');
$today = date('Y-m-d h:i:s');
if(isset($_POST['post_ad'])){
$email=$_SESSION["user"];
  $title=mysqli_real_escape_string($conn, $_POST['title']);
  $price=mysqli_real_escape_string($conn, $_POST['price']);
  $mobile=mysqli_real_escape_string($conn, $_POST['mobile']);
  $cat_name=mysqli_real_escape_string($conn, $_POST['category']);
  $condition=$_POST['condition'];
  $town=mysqli_real_escape_string($conn, $_POST['town']);
  $address=mysqli_real_escape_string($conn, $_POST['address']);
  $description=mysqli_real_escape_string($conn, $_POST['post_content']);
  $t=time();
  $img_ext=[];



  $image_names=$_FILES['post_img']['name'];
  $tmp_names=$_FILES["post_img"]["tmp_name"];

  if(!empty($title) && !empty($price) && !empty($mobile) && !empty($cat_name)
   && !empty($condition) && !empty($town) && !empty($address) && !empty($description))
   {


//  $img_explode0 = explode('.',$image_names[0]);
//       $img_ext0 = end($img_explode0);
      
//  $img_explode1 = explode('.',$image_names[1]);
//  $img_ext1 = end($img_explode1);
 
//  $img_explode2 = explode('.',$image_names[2]);
//       $img_ext2 = end($img_explode2);

//    $extensions = ["jpeg", "png", "jpg"];
//       if(!in_array($img_ext0, $extensions) || !in_array($img_ext1, $extensions) || !in_array($img_ext2, $extensions))
//       {
//         echo "Please upload jpeg, png or jpg files only";
      
//       } 
//           else{
       move_uploaded_file( $tmp_names[0],"images/".$image_names[0]);
       move_uploaded_file( $tmp_names[1],"images/".$image_names[1]);
       move_uploaded_file( $tmp_names[2],"images/".$image_names[2]);
            $sql="insert into post (post_title, post_price, post_town, post_address,post_condition,
            post_user_email, post_description, cat_name, post_date, post_image1,
            post_image2, post_image3, time)
            values('$title','$price','$town', '$address', '$condition', '$email', 
            '$description', '$cat_name', '$today', '{$image_names[0]}','$image_names[1]','$image_names[2]', 
            '$t') ";
            $result=$conn->query($sql);
            if ($result) {
              ?><script>alert('Post has been successfully uploaded')</script>
              <!-- echo "success"; -->
              <?php
            }
            else {
              ?>
              <script>alert('Error uploading post')</script>
          
         
            <!-- }
        //   }
        }     
   -->
      <!-- else{
        echo "All input fields are required!";
    }   

  -->
  <?php 
  }
}

}
?>
</h2>
  <section class="body">
    <div id="logo"style="margin:5px 5px 0px 100px;">
      Bazaar
    </div>
    <h1 class="advertise-heading">Advertise item</h1>
    <div style="float:right; width:130px; " id="clock">
      <script src="clock.js"></script>
    </div>
    <div class="con">

      <div class="" style="margin-left:20px">


        <div class="user-info">
         <table>
            <tr>
              <td><img src="images/user/<?php echo $imageName ?>" alt="user-image" style=" border-radius:50px;" width="50px" height="50px"></td>
              <td><p style="margin-left:5px"><?php echo $_SESSION['user'] ?></p></td>
            </tr>
         </table>
        </div>

    <div class="account-info">
      <ul>
        <li class="headingAcc">ACCOUNT</li>
        <li><a href="myAdds.php">My Adds</a></li>
        <li><a href="notification.php">Notifications<span class="notifications" style="margin-left: 40px;background:red; color:white;border-radius:50%; padding:2px"></span></li> </a>
        <div class="content-container"></div>
       
        <li><a href="logout.php"> Logout</a></li>
      </ul>
    </div>
</div>


    <div class="Advertise-box">


  				<!-- <form class="form" action="php/Advertise.php" method="POST" enctype="multipart/form-data" autocomplete="off"> -->
  				<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" autocomplete="on">
  				<div class="errorText"></div>	
          <label>Post Title<span style="color:red">*</span></label><br>
  						<input id='titleid' type="text" name="title" class="form-control ad-input" required>

  						<label>Price<span style="color:red">*</span></label><br>
  						<input  type="number" name="price" class="form-control ad-input" required>

  						<label >Contact No<span style="color:red">*</span></label><br>
  						<input  type="number" name="mobile" class="form-control ad-input" required><br>

  						<label >Condition Type<span style="color:red">*</span></label>
  						<select name="condition" id="" required>
  							<option value="Used">Used</option>
  							<option value="New">New</option>
  						</select><br><br>


  						<label>Category<span style="color:red">*</span></label>
              <select name="category" id="" aria-placeholder="Category" required>
       <?php
       $sql="select cat_name from category;";
       $result=$conn->query($sql);
       if ($result->num_rows>0) {

           for ($i=0; $i<$result->num_rows; $i++) {
             $row=$result->fetch_assoc();
             $cat_name=$row['cat_name'];

       ?>

      <option value=<?php echo $cat_name; ?> ><?= $cat_name; ?></option>
   <?php }
  } ?>
    </select><br><br>

  						<label>Town<span style="color:red">*</span></label><br>
                <input type="text" name="town" class="form-control ad-input" required>

              <label>Adress<span style="color:red">*</span><br>
                <input type="text" name="address" class="form-control ad-input" required>
                <p style="font-weight:bold; font-size:20px;">Select Images</p>
          

            <label>Image 1<span style="color:red">*</span></label></br>
               	<input type="file" name="post_img[]" id="img1" class="form-control" required><br>
                <label>Image 2<span style="color:red">*</span></label></br>
                  <input type="file" name="post_img[]" id="img2" class="form-control" required><br>
                  <label>Image 3<span style="color:red">*</span></label></br>
                    <input type="file" name="post_img[]" id='img3' class="form-control" required><br>
  						<label>description<span style="color:red">*</span></label><br> 
              <textarea class="form-control" name="post_content"cols="56" rows="5"style="text-transform:none;" required></textarea>

  						<input type='submit' value='post' name='post_ad' id="postBtn" class='btn btn-primary' style="margin:20px auto; width:110px;">
  				</form>
    </div>

  </div>
</section>
  <script src="javascript/advertise.js"></script>
  <!-- <script src="javascript/response.js"></script> -->
  </body>
</html>
