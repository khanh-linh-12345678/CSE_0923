
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$sql= "SELECT * FROM user";
$result = ($conn->query($sql));
 $row = []; 

    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS..title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid" >
        <div class="row">
            <!-- -- chèn code của trang sidebar -->
            <?php
                include "include/_sidebar.php";
            ?>

            <div class="col-md-9" style="background-color: #cdced0; padding-left:0px; width:1230px">
             <!-- -- chèn code của trang header -->           
                <?php
                    include "include/_header.php";
                ?>
                <div class="crossbar d-flex align-items-center justify-content-between " style="padding: 15px;margin-left:15px;margin-top:15px; background-color: white; border-radius:10px">
                    <div>
                        <h4 style="color: orange">User</h4>
                        <h6 style="color:gray">All Users</h6>
                    </div>
                    <div>
                        <h4 style="color: grey">Users<span style="color: orange"> /All Users</span></h4>
                    </div>
                </div>
                <div style="background-color:  white; border:1px; margin-left:15px; margin-top:15px;">
                    <div class="card" style="border-radius:10px">
                        <div class="card-header">
                          <a class="btn" data-bs-toggle="collapse" href="#collapseOne" style="color:black; font-size: 20px;padding:0px; font-weight:bold; ">
                                Filter
                          </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                              <div class="card-body">
                                    <div class="input-group mb-3 d-flex justify-content-around">
                                        <input type="text" class="form-control" style="margin-right:30px;border-radius:10px" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                        <input type="text" class="form-control"style="margin-right:30px; border-radius:10px" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                        <li class="nav-item dropdown" style="list-style-type: none">
                                            <a class="nav-link dropdown-toggle" style="width:253px; border: solid #d5d6d8 1px; padding:10px; margin-right:30px;border-radius:10px" data-bs-toggle="dropdown" href="#">
                                                <span>Select Role</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">454</a></li>
                                                <li><a class="dropdown-item" href="#">Admin</a></li>
                                                <li><a class="dropdown-item" href="#">Reading</a></li>
                                                <li><a class="dropdown-item" href="#">Paltel</a></li>
                                                <li><a class="dropdown-item" href="#">Client</a></li>
                                                <li><a class="dropdown-item" href="#">Customer</a></li>
                                            </ul>
                                        </li>
                                        <div class="button d-flex justify-content-around">
                                            <button type="button" class="btn btn-warning" style="margin-right:10px">Search</button>
                                            <button type="button" class="btn btn-warning">Reset</button>
                                        </div>
                                        
                                    </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="crossbar2 d-flex align-items-center justify-content-between" style="padding: 10px;margin-left:15px; margin-top:15px;; background-color: white;border-radius:10px 10px 0 0">
                    <div>
                        <h4>User</h4>
                    </div>
                    <div>
                        <button style="border:none; background-color:#e6652d; color:white; font-weight: bold; padding:10px; border-radius:10px">Add User</button>
                    </div>
                </div>
                <table class="table" style="margin:0px 0px 0px 15px;padding: 0px 0px 0px 5px">
                  <thead>
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                          <?php
                                if(!empty($row))
                                foreach($row as $rows)
                                { 
                          ?>
                                <tr>

                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['fullname']; ?></td>
                                    <td><?php echo $rows['img']; ?></td>
                                    <td><?php echo $rows['email']; ?></td>
                                    <td><?php echo $rows['role']; ?></td>
                                    <td><?php echo $rows['created']; ?></td>
                                    <td class="d-flex align-items-center justify-content-around" style="padding:19px 1px 19px 1px; margin-right:12px">
                                        <button style="background-color:#e62200; border:none;"><i class="fa-solid fa-pen" style="color: #ffffff;"></i></button>
                                        <button style="background-color:#e62200; border:none; padding-left:10px"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>

                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>