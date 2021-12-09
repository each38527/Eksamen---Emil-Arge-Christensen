<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="images/favicon logo.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <form action="læg_i_kurv.php" method="POST">
                    <div class="card">
                        <img src="images/Laenestole_360x440.jpg" class="card-img-top">
                        <div class=" card-body text-center">
                            <h5 class="card-title">Nobel 8920</h5>
                            <p class="card-text">Pris: 15.595 Kr.<?php ?></p>
                            <form method="POST" action="">
                                <form method="POST" action="">
                                    <select class="btn btn-secondary" name="betræk" onchange="this.form.submit()">
                                        <option value="" disabled selected>Betræk</option>
                                        <option value="tekstil">Tekstil</option>
                                        <option value="læder">Læder</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["betræk"])) {
                                    $stel = $_POST["betræk"];
                                }
                                ?>
                                <br>
                                <form method="POST" action="">
                                    <select name="stel" class="btn btn-secondary" onchange="this.form.submit()">
                                        <option value="" disabled selected>Stel</option>
                                        <option value="natur">Natur</option>
                                        <option value="bejdset">Bejdset</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["stel"])) {
                                    $stel = $_POST["stel"];
                                }
                                ?>
                                <button type="submit" name="tilføj_til_kurv" class="btn btn-secondary">Læg i kurv</button>
                                <input type="hidden" name="produkt_navn" value="Nobel 8920">
                                <input type="hidden" name="pris" value="15595">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="læg_i_kurv.php" method="POST">
                    <div class="card">
                        <img src="images/Plus_5060_graa_compressed.jpg" class="card-img-top">
                        <div class=" card-body text-center">
                            <h5 class="card-title">Plus 5060</h5>
                            <p class="card-text">Pris: 17.110 Kr.</p>
                            <form method="POST" action="">
                                <form method="POST" action="">
                                    <select class="btn btn-secondary" name="betræk" onchange="this.form.submit()">
                                        <option value="" disabled selected>Betræk</option>
                                        <option value="tekstil">Tekstil</option>
                                        <option value="læder">Læder</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["betræk"])) {
                                    $stel = $_POST["betræk"];
                                }
                                ?>
                                <br>
                                <form method="POST" action="">
                                    <select name="stel" class="btn btn-secondary" onchange="this.form.submit()">
                                        <option value="" disabled selected>Stel</option>
                                        <option value="natur">Natur</option>
                                        <option value="bejdset">Bejdset</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["stel"])) {
                                    $stel = $_POST["stel"];
                                }
                                ?>
                                <button type="submit" name="tilføj_til_kurv" class="btn btn-secondary">Læg i kurv</button>
                                <input type="hidden" name="produkt_navn" value="Plus 5060">
                                <input type="hidden" name="pris" value="17110">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="læg_i_kurv.php" method="POST">
                    <div class="card">
                        <img src="images/Stag-W_3compressed-450x550.jpg" class="card-img-top">
                        <div class=" card-body text-center">
                            <h5 class="card-title">2550 Stag W</h5>
                            <p class="card-text">Pris: 4.370 Kr.</p>
                            <form method="POST" action="">
                                <form method="POST" action="">
                                    <select class="btn btn-secondary" name="betræk" onchange="this.form.submit()">
                                        <option value="" disabled selected>Betræk</option>
                                        <option value="tekstil">Tekstil</option>
                                        <option value="læder">Læder</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["betræk"])) {
                                    $stel = $_POST["betræk"];
                                }
                                ?>
                                <br>
                                <form method="POST" action="">
                                    <select name="stel" class="btn btn-secondary" onchange="this.form.submit()">
                                        <option value="" disabled selected>Stel</option>
                                        <option value="natur">Natur</option>
                                        <option value="bejdset">Bejdset</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["stel"])) {
                                    $stel = $_POST["stel"];
                                }
                                ?>
                                <button type="submit" name="tilføj_til_kurv" class="btn btn-secondary">Læg i kurv</button>
                                <input type="hidden" name="produkt_navn" value="2550 Stag W">
                                <input type="hidden" name="pris" value="4370">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="læg_i_kurv.php" method="POST">
                    <div class="card">
                        <img src="images/Plus_5021.jpg" class="card-img-top">
                        <div class=" card-body text-center">
                            <h5 class="card-title">Plus 5021</h5>
                            <p class="card-text">Pris: 15.075 Kr.</p>
                            <form method="POST" action="">
                                <form method="POST" action="">
                                    <select class="btn btn-secondary" name="betræk" onchange="this.form.submit()">
                                        <option value="" disabled selected>Betræk</option>
                                        <option value="tekstil">Tekstil</option>
                                        <option value="læder">Læder</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["betræk"])) {
                                    $stel = $_POST["betræk"];
                                }
                                ?>
                                <br>
                                <form method="POST" action="">
                                    <select name="stel" class="btn btn-secondary" onchange="this.form.submit()">
                                        <option value="" disabled selected>Stel</option>
                                        <option value="natur">Natur</option>
                                        <option value="bejdset">Bejdset</option>
                                    </select>
                                </form>
                                <?php
                                if (isset($_POST["stel"])) {
                                    $stel = $_POST["stel"];
                                }
                                ?>
                                <button type="submit" name="tilføj_til_kurv" class="btn btn-secondary">Læg i kurv</button>
                                <input type="hidden" name="produkt_navn" value="Plus 5021">
                                <input type="hidden" name="pris" value="15075">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>