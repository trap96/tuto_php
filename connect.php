echo "Hello1";
<?php
        echo "Hello2";

    if(($_SERVER['REQUEST_METHOD']=='POST') && isset($_POST['submit'])) {
        echo "Hello";
        $conn= mysqli_connect('localhost', 'root', '', 'breife') or die("connection faild:" .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone= $_POST['phone'];
            $bgroup= $_POST['bgroup'];

            $sql="INSERT INTO users (nom, email, phone, bgroup) VALUES ('$name', '$email', '$phone', '$bgroup')";

            $query= mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($query) {
                echo 'Entry successful';
            }
            else {
                echo 'Error occured';
            }
        }
    }
?>    