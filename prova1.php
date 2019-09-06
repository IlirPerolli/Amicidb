<?php
    $j = 0; //Variable for indexing uploaded image 

 $target_path = "uploadFiles/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array
 $target_path = "uploadFiles/"; //Declaring Path for uploaded images
       
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
        

  $target_path = $target_path  .$_FILES['file']['name'][$i]."." . $ext[count($ext) - 1];//set the target path with a new name of image
        $j = $j + 1;//increment the number of uploaded images according to the files in array       
   if ($_FILES["file"]["size"][$i] < 8000000) //Approx. 100kb files can be uploaded.
        {
            move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path);
            header("Location: prova.php");
              
            } else {//if file was not moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }

           }
         
    
?>








