<?php 
$uid = $vid = $title = $description = $pubdate = " ";
$host = "localhost";
$username = "root";
$password = "";
$database = "video_upload";
$connection = mysqli_connect($host,$username,$password,$database); 
if(!($connection))
    {
        die("Connection Failed".mysqli_connect_error());
    }
        if(isset($_POST['submit']))
        {
            session_start();
            $random = rand(0,100000);
            $name = $_FILES['file']['name'];  
            $location = $_FILES['file']['tmp_name']; 
            $file_store = "upload/".$random.$name;   
            
            $vid = $random.$name;
            $uid = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $pubdate = $_POST['date'];
     
            echo "<b> Submit Succesfull </b> <br>";
            echo "Id : " . htmlspecialchars($vid) . "<br>";
            echo " Uid : " . htmlspecialchars($uid) . "<br>";
            echo "Title : " . htmlspecialchars($title) . "<br>";
            echo "Description : ". htmlspecialchars($description)."<br>";
            echo "Pubdate : ". htmlspecialchars($pubdate)."<br>";

            move_uploaded_file($location,$file_store);

            $sql = "insert into u_video (v_id,u_id,v_title,v_description,v_publish)values(?,?,?,?,?)";
            $result = mysqli_prepare($connection,$sql);
            mysqli_stmt_bind_param($result,'sssss',$id,$userid,$vname,$des,$pdate);
            $id = $vid;
            $userid = $uid;
            $vname = $title;
            $des = $description;
            $pdate = $pubdate;
            mysqli_stmt_execute($result);
            }
?>
         <p> <a href = "../dashboard.php?u_id=<?php echo  $uid ?>"> Goto The Dashboard </a> </p>


