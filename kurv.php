<?php include("header.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurv</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>Kurv</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Navn</th>
                            <th scope="col">Pris</th>
                            <th scope="col">Antal</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['kurv'])) {
                            foreach ($_SESSION['kurv'] as $key => $value) {
                                $total = $total + $value['pris'];
                                echo "
                                    <tr>
                                        <td>$value[produkt_navn]</td>
                                        <td>$value[pris]</td>
                                        <td><input class='text-center' type='number' value='$value[antal] min='0' max='99'></td>
                                        <td><button class= 'btn btn-sm btn-outline-danger'>Fjern</button></td>
                                        <td></td>
                                    </tr>
                                 ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class='border bg-light rounded p-4'>
                    <h5>Total</h5>
                    <h7 class="text-right"><?php echo $total, ",-" ?></h7>
                </div>
            </div>

        </div>
    </div>
</body>

</html>