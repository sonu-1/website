<?php

// variable assiging
$servername  = "localhost";
$userName =  "qserve_admin";
$password = "qserve@2019";
$database="testDatabase";


$Name = $_POST['name'];

$Contact =$_POST['cont_num'];
$Option =$_POST['catagory'];
$addr=$_POST['addr'];


//  echo ($Name." <br>".$Contact."<br> ".$Option."<br> ".$addr."<br>");


// Connecting to the server
$conn = mysqli_connect($servername,$userName,$password,$database);
// Checking the  connection

      if(!$conn)
            {
            die ("Failed".mysqli_connnect_error());
            }
         else{
               echo " <br>";
         }   



         // inserting the data into the table

         $sql = "INSERT INTO `customer_details` ( `name`, `Contact_Number`, `work`, `address`) VALUES ('$Name', '$Contact', '$Option', '$addr')"; 
      
      
      
         //    checking into the table



         if(mysqli_query($conn,$sql)){
               echo " Success <br> <a href='index.html'>Go Back</a>";
         }
            else {
                  echo "Error".mysqli_error($conn);
            }


            mysqli_close($conn);










?>