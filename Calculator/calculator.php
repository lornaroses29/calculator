<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../gambar/download.jpg" type="image/x-icon">
    <title>Calculator Biasa</title>
    <style>
        h1{text-align: center;}
        h3{text-align: center;}
        form{text-align: center;}
    </style>
</head>
<body> 
<div class="container mt-3">
<h1>Kalkulator</h1>
<h3>By: Nazkia Najidah Ramdani</h3>
    <form>
    <input type="number" name="a" placeholder="Bilangan a" value="<?php echo @$_GET['a'] ?>">

<select name="operator">
    <option <?php echo !@$_GET['operator'] ? 'selected' : '' ?> disabled>Pilih Operator</option>
    <option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">+</option>
    <option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">-</option>
    <option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">*</option>
    <option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">/</option>
</select>

<input type="number" name="b" placeholder="Bilangan b" value="<?php echo @$_GET['b'] ?>">
<div style="margin-top: 1rem">
            <button type="button" onclick="location.href = '?clear'">Clear</button>
            <button type="submit">Hitung</button>
        </div>

        <?php
if ($_GET):
    $a = (double) @$_GET['a'];
    $b = (double) @$_GET['b'];
    $operator = @$_GET['operator'];
    
    switch ($operator) {
        case '+':
            $hasil = $a + $b;
            break;
        case '-':
            $hasil = $a - $b;
            break;
        case '*':
            $hasil = $a * $b;
            break;
        case '/':
            $hasil = $a / $b;
            break;
    }
    ?>
    <div style="margin-top: 1rem">
    Hasil: <strong><?php echo $hasil ?></strong>
    </div>
    <?php
endif; ?>


</form> 

</body>
</html>