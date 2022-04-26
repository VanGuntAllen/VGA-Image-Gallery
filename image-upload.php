

<?php

include "/db.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    
    
$username =  $userDetail['username'];  
    $des = $_POST['des'];
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
	
	 $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "img-admin/all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    $date = date("Y-m-d H:i:s");
    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($con,"insert into image_record (username,des,images,fname,date) values
    
    ('$username','$des','$dst_db','$_POST[fname]','$date')");  // executing insert query
		
    if($check)
    {
    	
      echo "<div class='form'><h3>Your Movie Insert successfully.</h3></div>";
    	  // alert message
    }
    else
    {
    	
    		echo '<h3> Error This name already exists try a next name</h3>';  // when error occur
    	
    	
    }
}
?>



<div class="container">	
	<div class="row">
		<h2></h2> 
		
	
    
    <table >
      <tr>
      
   <td>
       <div class="container">
    
    	<h3> Image Upload Select File</h3>
	<form method='post' action='#' enctype='multipart/form-data'>

  
      <tr>
      
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
     
      <td><input type="text" name="fname" size="30" placeholder="Enter Name" Required></td>
    
      <input  type="hidden" name="username" value="<?php echo $userDetail['username']; ?>"/><p>

   
    <tr>
     
      <td>

<textarea class="form-control" name="des" id="" rows="3" cols="90"  maxlength = "100" placeholder="description" ></textarea>

         </td>
    </tr>
    <tr>
      
      <td>
<input type="submit" name="submit" value="update"   class="btn btn-primary">
         </td>
    </tr>
    <tr>
    
    <tr>
      <td colspan="2"></td>			
    </tr>

  </table>
</form>






        
        <p></p>
      </div>
    </div>
  </div>
  
</div>


    
    
   
<?php mysqli_close($db);  // close connection ?>
 
    </div>					<!-- Message -->
			
