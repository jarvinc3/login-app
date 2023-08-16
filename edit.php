<?php 
session_start();
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
    <title>Edit</title>
</head>

<body>

    <div class="container-principal">
        <nav class="nav">
            <div class="nav-container-superior">
                <img class="logo" src="./img/iconoLogo.jpg" alt="devchallenges">
                <div class="modal-nombre-foto">
                    <img class="foto-perfil" src="./img/zoro.png" alt="">
                    <h2>Xantle Neal</h2>
                    <span class="material-symbols-outlined flechita"> arrow_drop_down</span>
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
            <form action="">
                <section>
                    <div class="div-2">
                        <img class="foto-perfil-high" src="./img/zoro.png" alt="">
                        <p class="change-photo">CHANGE PHOTO</p>
                    </div>
                </section>

                <section>
                    <div class="div">
                        <p class="p">NAME</p>
                        <input type="text" placeholder="Enter your name">
                    </div>
                    
                </section>

                <section>
                    <div class="div ">
                        <p class="p">BIO</p>
                        <input class="input" type="text" placeholder="Enter your name">
                    </div>
                    
                </section>

                <section>
                    <div class="div">
                        <p class="p">PHONE</p>
                        <input type="text" placeholder="Enter your name">
                    </div>
                    
                </section>

                <section>
                    <div class="div">
                        <p class="p">EMAIL</p>
                        <input type="text" placeholder="Enter your name">
                    </div>
                    
                </section>

                <section>
                    <div class="div">
                        <p class="p">PASSWORD</p>
                        <input type="text" placeholder="Enter your name">
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