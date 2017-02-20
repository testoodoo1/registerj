<html>
<head>
</head>
<body>
 <form name="uploader" id="uploader" action="multifile.php" method="POST" enctype="multipart/form-data" >
  <input id="infile" name="infile[]" type="file" onBlur="submit();" multiple="true" ></input> 
 </form>

<?php
echo "No. files uploaded : ".count($_FILES['infile']['name'])."<br>"; 


$uploadDir = "images/";
for ($i = 0; $i < count($_FILES['infile']['name']); $i++) {

 echo "File names : ".$_FILES['infile']['name'][$i]."<br>";
 $ext = substr(strrchr($_FILES['infile']['name'][$i], "."), 1); 

 // generate a random new file name to avoid name conflict
 $fPath = md5(rand() * time()) . ".$ext";

 echo "File paths : ".$_FILES['infile']['tmp_name'][$i]."<br>";
 $result = move_uploaded_file($_FILES['infile']['tmp_name'][$i], $uploadDir . $fPath);

 if (strlen($ext) > 0){
  echo "Uploaded ". $fPath ." succefully. <br>";
 }
}
echo "Upload complete.<br>";
?>

</body>
</html>