<?php 
    include('./db.php') ;
  
   if ($_POST['opt']=="createSwimming") {
       $title = $_POST['title'];
        $date =date("Y/m/d H:m:s");
        
                    $sql = "INSERT INTO  tbl_swimming (title, created_at) VALUES ('$title','$date'); " ;
                    if($conn->query($sql)){
                        $sql = "SELECT * FROM tbl_swimming ORDER BY s_id DESC limit 1" ;
                            if($singleData = $conn->query($sql)){
                                while($row = $singleData->fetch(PDO::FETCH_ASSOC)){
                                    $latest_id = $row['s_id'];
                                }

                                for($i = 1; $i<=8; $i++){
                                    $sql = "INSERT INTO tbl_swimpart (lane_number,s_id) VALUES ('$i','$latest_id');";
                                    $res = $conn->query($sql);
                                };
                                if ($res) {
                                        echo "Success";
                                }
                            };

                    }else{
                        echo "error";
                    }

   }

   if ($_POST['opt']=="updateName") {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $sql = "UPDATE tbl_swimpart SET part_name='$name' WHERE sp_id = '$id'";
        if($conn->query($sql)){
            echo "Success";
        }else{
            echo "Failed";
        }
   }

   if ($_POST['opt']=="updateTime") {
        $id = $_POST['id'];
        $time = $_POST['time'];

        $sql = "UPDATE tbl_swimpart SET swim_time='$time' WHERE sp_id = '$id'";
        if($conn->query($sql)){
            echo "Success";
        }else{
            echo "Failed";
        }

   }

      if ($_POST['opt']=="deleteSwimming") {
        $id = $_POST['id'];

        $sql = "DELETE FROM tbl_swimming WHERE s_id = '$id'";
        if($conn->query($sql)){
            echo "Success";
        }else{
            echo "Failed";
        }

   }



     if ($_POST['opt']=="updateTitle") {
        $id = $_POST['id'];
        $title = $_POST['title'];

        $sql = "UPDATE tbl_swimming SET title='$title' WHERE s_id = '$id'";
        if($conn->query($sql)){
            echo "Success";
        }else{
            echo "Failed";
        }
   }


?>