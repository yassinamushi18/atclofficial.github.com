<?php 
session_start();
$servername ="127.0.0.1";
$username   ="root";
$password   ="";
$dbname     ="sms";


$conn   = new mysqli($servername, $username, $password,$dbname);

$first_name= "";
$middle_name = "";
$last_name = "";
$gender = "";
$date_of_birth = "";
$pob = "";
$citizenship = "";
$marital_status = "";
$type_of_candidate ="";
$candidate_number = "";
$year_of_completion = "";
$contact_address = "";
$pnumber = "";
$email = "";
$candidate_number1 = "";
$errors = array ();






if (isset($_POST['save'])){


$first_name = mysqli_real_escape_string ($conn, $_POST['fname']);
$middle_name = mysqli_real_escape_string ($conn,$_POST['mname']);
$last_name = mysqli_real_escape_string ($conn,$_POST['lname']);
$gender = mysqli_real_escape_string ($conn,$_POST['gender']);
$date_of_birth = mysqli_real_escape_string ($conn,$_POST['date_of_birth']);
$pob = mysqli_real_escape_string ($conn,$_POST['pob']);
$citizenship = mysqli_real_escape_string ($conn,$_POST['citizenship']);
$marital_status = mysqli_real_escape_string ($conn,$_POST['marital-status']);
$type_of_candidate = mysqli_real_escape_string ($conn,$_POST['toc']);
$candidate_number = mysqli_real_escape_string ($conn,$_POST['candidate-number']);
$year_of_completion = mysqli_real_escape_string ($conn,$_POST['yoc']);
$contact_address = mysqli_real_escape_string ($conn,$_POST['contact-address']);
$pnumber = mysqli_real_escape_string ($conn,$_POST['pnumber']);
$email = mysqli_real_escape_string ($conn,$_POST['email']);
$candidate_number1 = mysqli_real_escape_string ($conn,$_POST['uname']);
$password = mysqli_real_escape_string ($conn,$_POST['pwd']);
$password1 = mysqli_real_escape_string ($conn,$_POST['pwd1']);

if (empty($first_name)){
   array_push($errors, "Fill Your Fisrt Name");
  }else if (empty($middle_name)){
     array_push($errors, "Fill Your Middle Name");
    }else if (empty($last_name)){
      array_push($errors, "Fill Your Last Name");
    }else if (empty($gender)){ 
      array_push($errors, "Select Your Gender");
    }else if (empty($date_of_birth)){
       array_push($errors, "Date Of Birth Is Required");
      }else if (empty($pob)){
         array_push($errors, "Where Are You Born ?");
        }else if (empty($citizenship)){
           array_push($errors, "Fill Your Citizenship");
          }else if (empty($marital_status)){ 
            array_push($errors, "Select Your Marital Status");
          }else if (empty($type_of_candidate)){
             array_push($errors, "Select Your Candidate Type");
            }else if (empty($candidate_number)){
               array_push($errors, "Fill Your Form Four Index Number");
              }else if (empty($year_of_completion)){ 
                array_push($errors, "Year Of Complition");
              }else if (empty($contact_address)){
                 array_push($errors, "Fill Your Address");
                }else if (empty($pnumber)){ 
                  array_push($errors, "Fill Your Working Phone Number");
                }else if (empty($email)){
                   array_push($errors, "Fill Your Working Email");
                  }else if($candidate_number !== $candidate_number1){
  array_push($errors, "Your Username Must Match With Your Candidate Number");
}

else if($password !== $password1){
  array_push($errors, "Your Password Did Not Match");
} else{



$user_check_query = "SELECT * FROM student WHERE fname='$first_name' OR email='$email' LIMIT 1";
$result = mysqli_query($conn ,$user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {
  if ($user['fname'] == $first_name){
    array_push($errors, "Username already Exists");
  }
  if ($user['email'] == $email){
    array_push($errors, "Email already Exists");
  }
}

if (count($errors) == 0){

  $pass = md5($password);

    
$sqlquery   = "INSERT INTO student(`fname`, `mname`, `lname`, `gender`, `dob`, `pob`, `citizenship`, `marital-status`, `toc`, `candidate-number`, 
`yoc`, `contact-address`, `pnumber`, `email`, `uname`, `pwd`) VALUES ('$first_name', '$middle_name', '$last_name', '$gender', '$date_of_birth','$pob', '$citizenship', '$marital_status',  '$type_of_candidate ', 
                                            '$candidate_number', '$year_of_completion', '$contact_address', '$pnumber', 
                                            '$email','$candidate_number1','$pass')";


if (mysqli_query($conn, $sqlquery)) {
  $_SESSION['suc']="SUCCESSFULLY";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
}
}


//LOG IN USER 

// if (isset($_POST['login'])){

     
//       $username = mysqli_real_escape_string($conn, $_POST['username']);
//       $password = mysqli_real_escape_string($conn, $_POST['pwd']);

//       if (empty($username)){
//         array_push($errors, "Username is Required");
//       }else if (empty($password)){
//         array_push($errors, "Password is Required");
//       }

//       if (count($errors) == 0){
//         $password =md5($password);

//         $query = "SELECT * FROM student WHERE uname='$username' AND pwd='$password'";
//         $result =mysqli_query($conn,$query);

//         if (mysqli_num_rows($result) == 1){
//           $_SESSION['username'] = $username;
//           $_SESSION['success'] = "Active";
//           $id = $_GET['id'];
//           header('location: ../profile/profile.php');
//         }else{
//           array_push($errors, "Wrong username /Password");
//         }

//       }

// }






  
// // User login
// if (isset($_POST['login'])) {
     
//     // Data sanitization to prevent SQL injection
//     $username = mysqli_real_escape_string($conn, $_POST['username']);
//     $password = mysqli_real_escape_string($conn, $_POST['pwd']);
  
//     // Error message if the input field is left blank
//     if (empty($username)) {
//         array_push($errors, "Username is required");
//     }
//     if (empty($password)) {
//         array_push($errors, "Password is required");
//     }
  
//     // Checking for the errors
//     if (count($errors) == 0) {
         
//         // Password matching
//         $password = md5($password);
         
//         $query = "SELECT * FROM student WHERE uname=
//                 '$username' AND pwd='$password'";
//         $results = mysqli_query($conn, $query);
  
//         // $results = 1 means that one user with the
//         // entered username exists
//         if (mysqli_num_rows($results) == 1) {
             
//             // Storing username in session variable
//             $_SESSION['username'] = $username;
             
//             // Welcome message
//             $_SESSION['success'] = "You have logged in!";
             
//             // Page on which the user is sent
//             // to after logging in
//             header('location:../profile/profile.php');

//             if(isset($_POST['id'])){

//               $id = $_GET['id'];

//             }
//         }
//         else {
             
//             // If the username and password doesn't match
//             array_push($errors, "Username/password incorrect");
//         }
//     }
// }

?>
