<?php
session_start();
    if (!isset($_SESSION['email'])) {
        header('location:login.php');
        exit();
    }else{

$id = $_SESSION['id'];

require_once"conexiondb.php";
$stmt = $mysqli->query("SELECT id, photo FROM users WHERE id = '$id' ");

while ($row = $stmt->fetch_assoc()) {
    $dataImg = base64_encode($row["photo"]);

if (!isset($_SESSION['email'])) {
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
        <script src="./js/profile.js" defer></script>
        <title>Profile</title>
    </head>

    <body>

        <div class="container-principal">
            <nav>
                <div class="nav-container-superior">
                    <img class="logo" src="./img/iconoLogo.jpg" alt="devchallenges">
                    <div class="modal-nombre-foto">
                    <?php echo "<img class='foto-perfil' src='data:image/jpg;base64, $dataImg' alt='foto de perfil'>";?>
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
                        <?php echo "<img class='foto-perfil-high' src='data:image/jpg;base64, $dataImg' alt='foto de perfil'>";}?>
                    </div>
                </section>
                <hr>
                <section>
                    <div class="div">
                        <p>NAME</p>
                    </div>
                    <div class="div-2">
                        <p><?php echo $_SESSION['name'] ?></p>
                    </div>
                </section>
                <hr>
                <section>
                    <div class="div">
                        <p>BIO</p>
                    </div>
                    <div class="div-2">
                        <p><?php echo $_SESSION['bio'] ?></p>
                    </div>
                </section>
                <hr>
                <section>
                    <div class="div">
                        <p>PHONE</p>
                    </div>
                    <div class="div-2">
                        <p><?php echo $_SESSION['phone'] ?></p>
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
<?php }}?>