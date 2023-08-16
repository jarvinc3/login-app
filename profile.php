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
    <title>Profile</title>
</head>

<body>

    <div class="container-principal">
        <nav>
            <div class="nav-container-superior">
                <img class="logo" src="./img/iconoLogo.jpg" alt="devchallenges">
                <div class="modal-nombre-foto">
                    <img class="foto-perfil" src="./img/zoro.png" alt="">
                    <h2>Xantle Neal</h2>
                    <span class="material-symbols-outlined flechita"> arrow_drop_down</span>
                </div>
            </div>
            <div class="nav-container-inferior">
                <h1>Personal info</h1>
                <p>Basic info, like your name and photo</p>
            </div>
        </nav>
        <main>
            <section class="section-up">
                <div class="div-information">
                    <h2>Profile</h2>
                    <p>Some info may be visible to other people</p>
                </div>
                <div class="div-edit"><a href="./edit.php"><button class="btn-edit">Edit</button></a></div>
            </section>
            <hr>
            <section>
                <div class="div">
                    <p>PHOTO</p>
                </div>
                <div class="div-2">
                    <img class="foto-perfil-high" src="./img/zoro.png" alt="">
                </div>
            </section>
            <hr>
            <section>
                <div class="div">
                    <p>NAME</p>
                </div>
                <div class="div-2">
                    <p>Xanthe Neal</p>
                </div>
            </section>
            <hr>
            <section>
                <div class="div">
                    <p>BIO</p>
                </div>
                <div class="div-2">
                    <p>I am a software developer and a big fan of devchallenges...</p>
                </div>
            </section>
            <hr>
            <section>
                <div class="div">
                    <p>PHONE</p>
                </div>
                <div class="div-2">
                    <p>908249274292</p>
                </div>
            </section>
            <hr>
            <section>
                <div class="div">
                    <p>EMAIL</p>
                </div>
                <div class="div-2">
                    <p><?php echo $_SESSION['email'] ?></p>
                </div>
            </section>
            <hr>
            <section>
                <div class="div">
                    <p>PASSWORD</p>
                </div>
                <div class="div-2">
                    <p>************</p>
                </div>
            </section>
        </main>
        <header>
            <p>created by Jarvinc3</p>
            <p>devCchallenges.io</p>
        </header>
    </div>

</body>

</html>