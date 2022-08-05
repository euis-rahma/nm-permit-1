<!DOCTYPE html>
<html>
<?php
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "gagal") {
        echo "<script>alert('Maaf! Username & Password Salah.');
        document.location.href='../admin';</script>";
    } else if ($_GET['alert'] == "belum_login") {
        echo "<script>alert('Anda Harus Login Terlebih Dulu!');
        document.location.href='../admin';</script>";
    } else if ($_GET['alert'] == "logout") {
        echo "<script>alert('Anda Telah Logout!');
        document.location.href='../admin';</script>";
    }
}
?>

<head>
    <title>Admin AOP-NM | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../asset/style/css/styled.css">
</head>

<body>
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myRightCtn p-0">
                        <img src="../asset/img/robotnm.jpg" class="rounded shadow" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myLeftCtn">
                        <form class="myForm text-center" action="proses/proses_login.php" method="POST">
                            <img src="../asset/img/logo.png" />
                            <div class="form-group mt-5">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="NRP" name="username" id="username" required>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" id="password" name="password" placeholder="Password" required>
                            </div>

                            <!--<div class="form-group">-->
                            <!--    <label>-->
                            <!--<input id="check_1" name="check_1" type="checkbox" required><small> I read and agree to Terms & Conditions</small></input>-->
                            <!--<div class="invalid-feedback">You must check the box.</div>-->
                            <!--    </label>-->
                            <!--</div>-->

                            <input type="submit" class="butt btn" name="submit" value="LOGIN">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>