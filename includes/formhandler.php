<?php
$name = htmlspecialchars($_POST["Full_Name"]);
$email = htmlspecialchars($_POST["email"]);
$phonenumber= htmlspecialchars($_POST["Phone_Number"]);
$message= htmlspecialchars($_POST["messsage"]);

if(! $email){
    die("Email must be submited!!");
}
//Validate and Sanitize User Input:
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 //   die("Invalid email format");
//}

if(empty($name)){
     header("Location: ../index.php");
     exit();
   }
//print_r($_POST); //super globals
//var_dump($name,$message,$email,$phonenumber);

$hostname ="localhost";
$dbname="gidyport";
$username="root";
$password="";


$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(mysqli_connect_errno()){
    die("Connection error:". mysqli_connect_error());
}
    echo "Connecction Successful.";

 $sql ="INSERT INTO inquiries (Full_Name,Email,Phone_Number,Inquiry_Message)
  values(?,?,?,?)"; 
$stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
   die(mysqli_error($conn));
}
//non sqlinjection prone code
//$stmt = mysqli_prepare($conn, "INSERT INTO your_table (name, email, phonenumber, message) VALUES (?, ?, ?, ?)");
//mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phonenumber, $message);
//mysqli_stmt_execute($stmt);
//mysqli_stmt_close($stmt);

mysqli_stmt_bind_param($stmt,"ssss",
$name ,
$email,
$phonenumber,
$message);
mysqli_stmt_execute($stmt);

echo "Record saved";




// if($_SERVER["REQUEST_METHOD"]){
//     $name = htmlspecialchars($_POST["Full_Name"]);
//     $email = htmlspecialchars($_POST["email"]);
//     $phonenumber= htmlspecialchars($_POST["Phone_Number"]);
//     $message= htmlspecialchars($_POST["messsage"]);
//htmlentities()
//     if(empty($name)){
//         exit();
//         header("Location: ../index.php");
//     }

//     echo "These are the data that the user submitted";
//     echo "<br>";
//     echo "$name";
//     echo "<br>";
//     echo "$email";
//     echo "<br>";
//     echo "$phonenumber";
//     echo "<br>";
//     echo "$message";
//     header("Location: ../index.php");
// }else{
//     header("Location: ../index.php"); 
// }
// ?>