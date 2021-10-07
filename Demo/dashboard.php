<?php

session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("locahost: login_demo.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .wrapper{
                width : 600px;
                margin: 0 auto;
            }
            table tr td:last-child{
                width: 120px;
            }
        </style>
        <script>
            $(document).ready(function (){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">Employees Details</h2>
                            <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Add New Employee</a>
                        </div>
                        <?php
                            // Include config dile
                            require_once "config.php";

                            // Attempt select query execution
                            $sql = "SELECT * FROM employee";
                            if ($result = $mysqli->query(($sql))){
                                if($result->num_rows > 0){
                                    echo '<table class = "table table-bordered table-striped">';
                                        echo "<tr>";
                                            echo "<th>#</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>Address</th>";
                                            echo "<th>Salary</th>";
                                            echo "<th>Action</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    While($row = $result->fetch_array()){
                                        echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['address'] . "</td>";
                                            echo "<td>" . $row['salary'] . "</td>";
                                            echo "<td>";
                                                echo '<a href="read.php?id='. $row['id'] .'"class = "mr-3"
                                                    title="View Record" data-toggle="tooltip"><spam class="fa fa-eye"></spam></a>';
                                                echo '<a href="update.php?id='. $row['id'] .'"class = "mr-3"
                                                    title="Update Record" data-toggle="tooltip"><spam class="fa fa-pencil"></spam></a>';
                                                echo '<a href="delete.php?id='. $row['id'] .'"class = "mr-3"
                                                    title="Delete Record" data-toggle="tooltip"><spam class="fa fa-trash"></spam></a>';
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                     echo "</tbody>";
                                echo "</table>";
                                //Free result set
                                    $result->free();
                                }else{
                                    echo ' <div class="alert alert-denger"><em>No records were found.</em></div>';
                                }
                            }else{
                                echo "Oops! Something went wrong. Please try again later";
                            }

                            //close connection
                            $mysqli->close();
                        ?>

                    </div>
                </div>
            </div>
            <p>
                <a href="logout_demo.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
            </p>
        </div>
    </body>
</html>
