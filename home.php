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

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', 'sans-serif';
}
.container-content{
    width: 100%;
    height: 100vh;
    padding: 50px;
    text-align: center;
    justify-content: center;
    align-items: center;
    background-image: url("bg.png");
    background-size: cover;
    background-repeat: no-repeat;
}
.content{
    width: 80%;
    position: relative;
    display: flex;
    align-items: center;
    text-align: center;
    padding: 10px 30px;
    margin: auto;
    border: 1px rgba(209, 209, 209, 0.2) solid;
    border-radius: 20px;
    background-color: rgba(249, 249, 249, 0.2);
}
.content-col{
    flex-basis: 100%;
    width: 90%;
    padding: 10px;
    box-sizing: border-box;
    text-align: justify;
    margin: 10px;
}
.content-col h1{
    font-size: 3.5rem;
    color: #fff;
    text-shadow: 4px 4px 4px #444;
}
.content-col img{
    width: auto;
    height: 400px;
    border-radius: 50%;
    box-shadow: 4px 4px 4px 4px rgba(209, 209, 209, 0.5);
}
ul{
    position: relative;
}
li{
    list-style: none;
    color: #fff;
    font-size: 1.5rem;
    padding: 5px;
    margin: 5px;
    text-shadow: 4px 4px 4px #444;
}
.back-btn{
    padding: 100px 0;
    margin: auto;
    position: relative;
    
}
.back-btn a{
    text-decoration: none;
    color: #fff;
    background-color: #8062D6;
    padding: 10px 30px;
    border-radius: 10px;
    font-weight: 700;
    transition: 0.5s ease;
    box-shadow: #322653 4px 4px 8px;
}
.back-btn a:hover{
    background-color: #322653;
}
    </style>
</head>
<body>
<div class="container-content">
        <div class="content" data-tilt>
            <div class="content-col">
            <img src="profile.png" alt="">
            </div>
            <div class="content-col">
                <h1>Vince Arvie I. Cube</h1>
                <ul>
                    <li><p>21 years old</p></li>
                    <li><p>October 11, 2001</p></li>
                    <li><p>3rd year BS Information Technology</p></li>
                    <li><p>Laguna State Polytechnic Unversity</p></li>
                </ul>
            </div>
        </div>
        <div class="back-btn">
            <a href="act5.php">Back to Log In</a>
        </div>
    </div>
    <script src="vanilla-tilt.js"></script>
</body>
</html>