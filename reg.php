<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Registration Page</h1>
        Name:
        <input type="text" name="name" id="">
        Rollno.:
        <input type="number" name="rlno" id="">
        Phone:
        <input type="number" name="phn" id="">
        Password:
        <input type="password" name="pswrd" id="">
        <input type="submit" value="Register" name="reg">
    </form>
    <?php
        $name=$_POST['name'];
        $rlno=$_POST['rlno'];
        $phn=$_POST['phn'];
        $pswrd=$_POST['pswrd'];
        $reg=$_POST['reg'];
        if(isset($reg)){
            $con=mysqli_connect("localhost","root","","student");
            if(!$con){
                echo "Connection failed!".mysqli_connect_error();
            }
            else{
                echo "Connected!";
                $qry="INSERT INTO details(rollno,name,phone,password) VALUES('$rlno','$name','$phn','$pswrd')";
                //$qry2="INSERT INTO details (rollno,name,phone,password) VALUES (101,'Aleena',1234567,'Leena123')";
                $res=mysqli_query($con,$qry);
                //$res2=mysqli_query($con,$qry2);
                //echo "Value inserted!";
                if(!$res){
                    echo "Insertion failed";
                }
                else{
                    echo "Values inserted";
                }
            }
        }
    ?>
</body>
</html>