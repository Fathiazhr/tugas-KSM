<!DOCTYPE html>
<html>
    <head>
        <!--Title-->
        <title>Tugas KSM</title>

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

         <!--Link CSS-->
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="container">
            <div class="content">
            <h3 class="title">Form Input</h3>
            <hr align="left" width="200px">
            <p>Masukkan Data Anda dengan <b>Benar</b></p>
            <table>
                <form method="POST">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Masukkan Nama" /></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" placeholder="Masukkan Alamat"/></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="ttl" placeholder="Masukkan Tanggal Lahir"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td><input class="btn" type="submit" name="submit" value="Submit">
                            <span><input class="btn" type="reset" value="Reset"></span></td>
                    </tr>
                </form>
            </table>
            </div>
        </div>
    </body>
</html>
<?php
    if (isset($_POST['submit'])){
        $nama = $_POST['nama']; 
        $alamat = $_POST['alamat']; 
        $ttl = $_POST['ttl']; 
        hitungUmur();

        echo "<br>";
        echo "<h3  class='title'>Data Anda</h3>";
        echo "<hr align='left' width='200px'>";
        echo "<br>";
        echo '<form>
        <table class="hasilData">
            <tr>
                <th>Nama</th>
                <td width="30px">:</td>
                <td>'.$nama.'</td>
            </tr>';
        echo '<tr>
                <th>Alamat</th>
                <td>:</td>
                <td>'.$alamat.'</td>
            </tr>';
        echo '<tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>'.$ttl.'</td>
            </tr>';
        echo '<tr>
                <th>Umur</th>
                <td>:</td>
                <td >'.$thn." Tahun".'</td>
            </tr>';
        echo'</table> 
             </form> ';
    }

    function hitungUmur(){
        global $thn;
        $ttl = new DateTime($_POST['ttl']);
        $now = new DateTime("today");
        if ($ttl > $now) { 
         $thn = "0";
        }
        $thn = $now->diff($ttl)->y;
    }   
?>