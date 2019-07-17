<?php include  'header.php';
include "config.php";
session_start();
if (!isset($_SESSION['email'])){
    header('location:signup.php');
}
?>

    <div class="container">
        <div class="jumbotron">
            <h3 style="text-align: center">Shoe Shop</h3>
        </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "config.php";
                #create a query/instruvtion to the db
                $sql = "SELECT * FROM `users`";
                #fetch data from the database by issueing the query
                #the data will be stored in the variable '$fetched_results'
                $fetched_results =mysqli_query($conn, $sql);
                #To get individual data use a loop (while loop)
                #convert fetched data into an associative array(key/value)
                while($row = mysqli_fetch_assoc($fetched_results)) {
                    #for each record in the while loop grab the data in their respective columns
                    extract($row);
                        }
                    echo"
                    <th>$id</th>
                     <td>$firstname</td>
                     <td>$lastname</td>
                     <td>$email</td>
                     <td>$password_1</td>
                     <td>
                         <a href='update.php?user_id=$id&u_firstname=$firstname&u_lastname=$lastname&u_email=$email&u_password=$password_1' class='btn-info'>Update</a>
                         <a href='delete.php' class='btn-danger'>Delete</a>
                     </td>"
                ?>
                </tbody>
            </table>
        </div>

<?php include 'footer.php'?>