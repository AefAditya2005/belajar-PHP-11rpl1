<from action="" method="POST">
    <h1>Rumus Luas dan keliling persegi</h1>
    <P>sis :</P>
    <input type="number" name="sisi" placeholder= "Ex .S" />
    <input type="submit" name="proses" value= "Hitung Luas dan Keliling" />

    <?php
        if(isset($_POST["proses"])){
        echo "<hr>";
        $sisi = $_POST("sisi");
        $luas = $sisi * sisi;
        $keliling = 4 * sisi;

        echo "sisi : $sisi <br>";
        echo "luas persegi : $luas <br>";
        echo "keliling persegi : $keliling <br>";
        }