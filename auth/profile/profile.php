<?php 

include '../connection.php';
if (!isset($_SESSION['username'])){
	header('location:../login/index.php');
  die();
}

$user= $_SESSION['username'];
$query =mysqli_query($conn, "SELECT * FROM student WHERE uname=$user");
while($row=mysqli_fetch_array($query)){


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
    footer {
    background: #018bce;
      padding: 25px;
      color : white;
    }
    .card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,
      .3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
     padding: 14px 80px 18px 36px;
     cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
th{
  text-align:center;
}
.card-header{
  text-align:center;
  color:white
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color:#2596be;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">HOME
        </a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <img src="../img/airtz.png" alt="">      
    <p><?php echo $row['fname']; ?> PROFILE</p>
    <div class="table-responsive">
            <table class="table table-sm  table-hover" >
                <thead class="thead" style="font-size :12px; font-weight:bold;text-align:center;background-color:#2596be;color:white;">
                    <tr>
                        <th>Firt Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>gender</th>
                        <th>Date Of Birth</th>
                        <th>Place Of Birth</th>
                        <th>Citizenship</th>
                        <th>Marital Status</th>
                        <th>Types Of Candidate</th>
                        <th>Candidate Number(Index)</th>
                        <th>Year Of Completion</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>

                    </tr>
                    <tbody style="font-size :10px; font-weight:bold;">
                      <td><?php echo $row['fname'];?></td>
                      <td><?php echo $row['mname'];?></td>
                      <td><?php echo $row['lname'];?></td>
                      <td><?php echo $row['gender'];?></td>
                      <td><?php echo $row['dob'];?></td>
                      <td><?php echo $row['pob'];?></td>
                      <td><?php echo $row['citizenship'];?></td>
                      <td><?php echo $row['marital-status'];?></td>
                      <td><?php echo $row['toc'];?></td>
                      <td><?php echo $row['candidate-number'];?></td>
                      <td><?php echo $row['yoc'];?></td>
                      <td><?php echo $row['contact-address'];?></td>
                      <td><?php echo $row['pnumber'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td></td>

                      
                    </tbody>
                </thead>
  </table>
  </div>
</div>

</div>

<div class="container-fluid bg-3 text-center">    
  
  <div class="row">
    
    <div class="col-sm-3">
      <div class="card">
        <div class="card-header" style="background-color:#2596be;">
         <a href="update.php?<?php echo $user?>" style="color:white;text-decoration:none;">Complete Your Registration</a>
        </div>
        <div class="card-body">
          <img src="../img/icons9.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-sm-3"> 
    <div class="card">
        <div class="card-header" style="background-color:#2596be;">
          <p>Modules</p>
        </div>
        <div class="card-body">
        <img src="../img/icons10.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-sm-3"> 
    <div class="card">
        <div class="card-header" style="background-color:#2596be;">
          <p>Examination Result</p>
        </div>
        <div class="card-body">
        <img src="../img/icons14.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
        <div class="card-header" style="background-color:#2596be;">
          <p>Assignment</p>
        </div>
        <div class="card-body">
        <img src="../img/icons8.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container-fluid bg-3 text-center">    
  
  <div class="row">
    
    <div class="col-sm-3">
      <div class="card">
        <div class="card-header" style="background-color:#2596be;">
          <p>Complete Registration</p>
        </div>
        <div class="card-body">
          <img src="../img/icons9.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-sm-3"> 
    <div class="card">
        <div class="card-header" style="background-color:#2596be;">
          <p>Modules</p>
        </div>
        <div class="card-body">
        <img src="../img/icons10.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-sm-3"> 
    <div class="card">
        <div class="card-header" style="background-color:#2596be;">
          <p>Examination Result</p>
        </div>
        <div class="card-body">
        <img src="../img/icons14.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
        <div class="card-header" style="background-color:#2596be;">
          <p>Assignment</p>
        </div>
        <div class="card-body">
        <img src="../img/icons8.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="container-fluid bg-3 text-center">    
  
</div><br><br>
<?php 
}?>
<footer class="container-fluid text-center">
  <p>© Copyright 2023, Air Tanzania Company limited. All Right Reserved.</p>
</footer>

</body>
</html>
