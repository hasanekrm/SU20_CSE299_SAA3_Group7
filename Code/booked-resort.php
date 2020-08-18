<?php
$Send='';
$error='';
$booked='';
 uniqid();
      include('Config.php');
      session_start();
      if(!isset($_SESSION['g_user_id'])){
      header("location:glogin-temp.php");
      }
      else{

      $tour_id= $_GET["tour_id"];
      $g_user_id=$_SESSION['g_user_id'];
      $tour_id=mysqli_real_escape_string($db,$tour_id);
      date_default_timezone_set("Asia/Dhaka");
        
        $time_now=date("y-m-d H:i:s");
        

      $sql1 = "SELECT * FROM book where g_user_id='$g_user_id' AND tour_id='$tour_id' ";
			$result = $db->query($sql1);
      
      
      if($result->num_rows > 0){
        $result1 = mysqli_query($db, $sql1);
        while ($row = mysqli_fetch_array($result1)) {
            $booked= $row['booked'];
        }
        

        if ($booked == 0) {
          $sql2 = "UPDATE book SET booked='1', posted_time='$time_now' WHERE g_user_id='$g_user_id' AND tour_id='$tour_id'";
        if ($db->query($sql2) == TRUE) {
          
                $Send="Successfully Updated !";
               header('Location: ' . $_SERVER['HTTP_REFERER']);

                
           
              } 
            else {
              $Send="Not Successfully Updated. <br> Something wrong with your input.";
              }

        }
        else{
          $sql2 = "UPDATE book SET booked='0', posted_time='$time_now' WHERE g_user_id='$g_user_id' AND tour_id='$tour_id'";
        if ($db->query($sql2) == TRUE) {
          
                $Send="Successfully Updated !";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                
           
              } 
            else {
              $Send="Not Successfully Updated. <br> Something wrong with your input.";
              }

        }
				        		
    		}
    		
         
            
      
      

      
  $db->close();}
      
      
?>
