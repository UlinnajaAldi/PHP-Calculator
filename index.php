<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalculator Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['op'])) {
        $num1 = $_POST['bil1'];
        $num2 = $_POST['bil2'];
        $operasi = $_POST['op'];
        if ($operasi == "+")
            $hasil = $num1 + $num2;
        else if ($operasi == "-")
            $hasil = $num1 - $num2;
        else if ($operasi == "x")
            $hasil = $num1 * $num2;
        else if ($operasi == "/")
            $hasil = $num1 / $num2;
    } ?>
    <!-- Dibuat Aldilla Ulinnaja -->
    <div class="container dark main-body">
        <h2 class="title">Kalkulator Sederhana</h2>
        <form action="" method="POST">
            <label for="bil1">Bilangan X</label>
            <input type="text" id="bil1" name="bil1" placeholder="Masukan Bilangan" value="" class="type-dark">

            <label for="bil2">Bilangan Y</label>
            <input type="text" id="bil2" name="bil2" placeholder="Masukan Bilangan" value="" class="type-dark2">
            <div class="submit-container">
                <input type="submit" name="op" value="+">
                <input type="submit" name="op" value="-">
                <input type="submit" name="op" value="x">
                <input type="submit" name="op" value="/">
            </div>

            <label for="hasil">Hasil</label>
            <input type="text" id="hasil" name="hasil" value="<?php echo $hasil ?>" disabled>
            <div class="toggle-container">
                <h2 class="btn-dark mode">Dark Mode</h2>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </form>
    </div>
    <script src="mode.js"></script>
</body>

</html>