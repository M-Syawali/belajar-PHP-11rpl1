<form action="rumus-persegi.php" method="POST">
    <h1> Rumus Luas Dan Keliling Persegi </h1>
    <p>Sisi :</P>
    <input type="number" name="Sisi" placeholder="Ex. S" />
    <input type="submit" name="proses" value="Hitung Luas & keliling" />
</form>

<?php
    if ( isset($_POST["proses"])) {
        echo "<hr>";
        $sisi = $_POST["Sisi"];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "Sisi : $sisi <br>";
        echo "Luas Persegi : $luas <br>";
        echo "Keliling Persegi : $keliling <br>"; 
    }
        