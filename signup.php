<?php include 'header.php'?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="signup_handler.php" method="post">
                <div class="form-group">
                    <label for="firstname">First name</label>

                    <input type="text" name="firstname" class="form-control" id="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Last name:</label>

                    <input type="text" name="lastname" class="form-control" id="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password_1" class="form-control" id="pwd">
                </div>
                <form action="index.php">
                    <button type="submit" name="signup" class="btn btn-default">Signup</button>
                </form>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php include 'footer.php'?>
