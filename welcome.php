<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homepage.css">
    <title>Campus Support</title>
</head>

<body>
    <header>
        <div class="mainContainer">
            <div class="logo-container">
                <a href="homepage.php">
                    <h3 class="logo">Campus Support</h3>
                </a>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link">
                            <a href="homepage.php">Home</a>
                        </li>
                        <li class="nav-link">
                            <a href="profile.php">Profile</a>
                        </li>
                        <li class="nav-link">
                            <a href="about.php">About</a>
                        </li>
                        <li class="nav-link">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="log-sign">
                    <a href="logout.php" class="btn solid">Log Out</a>
                </div>
            </div>
        </div>
    </header>
    <main>

        <div class="subContainer">
            <div class="welcomeText">
                <p>
                    Welcome to <h1>Campus Support</h1>What do you want to do?
                </p>
            </div>
            <div class="cardsContainer">
                <div class="cards">
                    <a href="forms/programme.php">
                        <img src="images/progChange.svg" alt="change_of_programme" style="width: 100%;">
                        <div class="specifics">
                            <h3>Change of Programme</h3>
                            <p>Change from your current programme to your desired</p>
                        </div>    
                    </a>
                </div>
                <div class="cards">
                    <a href="forms/session.php">
                        <img src="images/session.svg" alt="change_of_session" style="width: 100%;">
                        <div class="specifics">
                            <h3>Change of Session</h3>
                            <p>Change your session from either morning or evening to your desired</p>
                        </div> 
                    </a>   
                </div>
                <div class="cards">
                    <a href="index3.php">
                        <img src="images/complain.svg" alt="complaint" style="width: 100%;">
                        <div class="specifics">
                            <h3>Complaints</h3>
                            <p>Something bothering your mind? A question you need to ask!</p>
                        </div> 
                    </a>
                </div>
                <div class="cards">
                    <a href="forms/deferment.php">
                        <img src="images/defer.svg" alt="deferment" style="width: 100%;">
                        <div class="specifics">
                            <h3>Deferment</h3>
                            <p>A programme proving too difficult or not interested? Feel free to defer.</p>
                        </div>
                    </a>
                </div>
                <div class="cards">
                    <a href="forms/resit.php">
                        <img src="images/resit.svg" alt="resit" style="width: 100%;">
                        <div class="specifics">
                            <h3>Resit</h3>
                            <p>Want to take an exam again? Want a better grade?.</p>
                        </div>
                    </a>
                </div>
                <div class="cards">
                    <a href="forms/requests.php">
                        <img src="images/request.svg" alt="requests" style="width: 100%;">
                        <div class="specifics">
                            <h3>Requests</h3>
                            <p>A request you want to make? Get right into it.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>