<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DICT - Log In Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid container-fb" style="padding-top: 150px; background-color: #eeeeee; height: 100vh;">
        <div class="row">
            <div class="col">
                <div class="left">
                <img src="logo.png" alt="">
                <h3>Connect with friends and the world around you on Facebook.</h3>
                </div>
            </div>
            <div class="col">
                <div class="form-content">
                    <form action="act5.php" method="POST">
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" name="username" placeholder="Email or phone number">
                          </div>
                          <div class="mb-3">
                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                          </div>
                          <div class="mb-3">
                            <input type="submit" name="submit" class="form-control form-control-lg" value="Log In">
                          </div>
                        <a href="">Forgotten password?</a>
                        <hr>
                        <a href="" class="create">Create new account</a>
                    </form>

                    <?php
// Replace these with your actual username and password data
$storedUsers = [
    'user1@gmail.com' => 'password1',
    'user2@gmail.com' => 'password2',
    'user3@gmail.com' => 'password3'
];

if (isset($_POST['username']) && isset($_POST['password'])) {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

   if (array_key_exists($inputUsername, $storedUsers) && $storedUsers[$inputUsername] === $inputPassword) {
        header('Location: home.php');
        exit();
    } else {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oopss!</strong> Incorrect username or password. Please Try Again.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        ';
    }
}
?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>