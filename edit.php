<?php 
session_start();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
    exit();
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="profile.js" defer></script>
    <title>Edit</title>
</head>

<body>

    <div class="container-principal">
        <nav class="nav">
            <div class="nav-container-superior">
                <img class="logo" src="./img/iconoLogo.jpg" alt="devchallenges">
                <div class="modal-nombre-foto">
                    <img class="foto-perfil" src="./img/zoro.png" alt="">
                    <h2><?php echo $_SESSION['name'] ?></h2>
                    <span id="flechita" class="material-symbols-outlined flechita"> arrow_drop_down</span>
                    <form class="nav-bar close" id="navBar" action="close.php">
                            <p><span class="material-symbols-outlined profile">account_circle</span>My Profile</p>
                            <p><span class="material-symbols-outlined">group</span> GroupChat</p>
                            <hr>
                            <button type="submit">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg> Logout
                                </p>
                            </button>
                        </form>
                </div>
            </div>
            <div class="nav-containerInferior">  
                <a href="./profile.php"><p class="back"><span class="material-symbols-outlined">arrow_back_ios </span> Back</p></a>
            </div>
        </nav>
        <main>
            <section class="section-up">
                <div class="div-information">
                    <h2 class="h2">Change Info</h2>
                    <p>Changes will be reflected to every services</p>
                </div>
            </section>
            <form action="editAction.php" method="post">
                <section>
                    <div class="div-2">
                        <img class="foto-perfil-high" src="./img/zoro.png" alt="">
                        <p class="change-photo">CHANGE PHOTO</p>
                    </div>
                </section>

                <section>
                    <div class="div">
                        <p class="p">NAME</p>
                        <input type="text" placeholder="Enter your name" name="name" value="<?php echo $_SESSION['name'] ?>" >
                    </div>
                    
                </section>

                <section>
                    <div class="div ">
                        <p class="p">BIO</p>
                        <input class="input" type="text" placeholder="Enter your name" name="bio" value="<?php echo $_SESSION['bio'] ?>" >
                    </div>
                    
                </section>

                <section>
                    <div class="div">
                        <p class="p">PHONE</p>
                        <input type="text" placeholder="Enter your name" name="phone" value="<?php echo $_SESSION['phone'] ?>" >
                    </div>
                    
                </section>

                <section>
                    <div class="div">
                        <p class="p">EMAIL</p>
                        <input type="email" placeholder="Enter your name" value="<?php echo $_SESSION['email'] ?>" name="email">
                    </div>
                    
                </section>

                <section>
                    <div class="div">
                        <p class="p">PASSWORD</p>
                        <input type="password" placeholder="Enter your name" value="<?php echo $_SESSION['pswrd'] ?>" name="pswrd">
                    </div>
                    
                </section>
                <div class="div-edit"><button class="btn-save" type="submit">Save</button></div>
            </form>
        </main>
        <header>
            <p>created by Jarvinc3</p>
            <p>devCchallenges.io</p>
        </header>
    </div>

</body>

</html>
<?php } ?>