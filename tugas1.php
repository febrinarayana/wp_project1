<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form Menghitung Luas Segitiga</title>
  </head>
  <body>
    <h1>Menghitung Luas Segitiga</h1>
    <form method="post" action="tugas1.php">
      Nilai Alas :<br>
      <input type="number" name="alas" min="0" max="999" required>
      <br>
      Nilai Tinggi :<br>
      <input type="number" name="tinggi" min="0" max="999" required>
      <br>
      Luasnya : <br>
      <textarea name="hasil" id="hasil">
            
        <?php
        if(isset($_POST['hasil'])){
            $alas    =$_POST['alas'];
            $tinggi    =$_POST['tinggi'];
            $hasil = 1/2 * $alas * $tinggi;
            echo "$hasil";
        }
            ?>
        </textarea
      >
      <br>
      <button type="submit">Hitung Luas Segitiga</button>
    </form>
  </body>
</html>
