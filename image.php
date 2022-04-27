

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMTVS Image </title>
 <META name=Search.Vertical content=" VGA Images Gallery ">
<meta name="Author" content="VanGunt Allen - @gmail.com" />
<META name=Search.PageType content=" index ">
<META name=PackageEnabled content=True>


		
	
		
	
	


<link rel="stylesheet" href="https://smtvs.com/bootstrap.min.css">
<script src="https://smtvs.com/bootstrap.bundle.min.js"></script>

</head>
<body>

	<p><p><br>
		<p><p><br>

 <h5 class="fw-light text-center text-lg-start mt-4 mb-0">&nbsp;&nbsp; Web Gallery</h5>

<table>
  <tr>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>      

		
 

		
<!-- Page Content -->
<div class="container">

 
  <hr class="mt-2 mb-5">
  <div class="row text-center text-lg-start">

 
			
 <?php

include("db.php"); 


  $query ="SELECT * FROM image_record ORDER BY RAND(id)    ";
  $result =  mysqli_query($con,$query);  
  while($posts = mysqli_fetch_assoc($result) ) {	
        	
 
echo "<div class=\"col-lg-3 col-md-4 col-6\">";
echo "<div class=\"column\">";	
    

     echo " <a href=\"#\" class=\"d-block mb-7 h-100\" >";
    echo "    <img class=\"img-fluid img-thumbnail\" src=\"https://smtvs.com/img-admin/$posts[images]\" alt=\"$posts[fname]\" onclick=\"myFunction(this);\">";
   echo "  $posts[des] </a>
    </div></div>";
		 }

?>						

  </div>
</div>
</div>
</td>
    <td  class="align-text-top">    
 
<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div></div>  </td>
  </tr>
</table>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
</html>
