<link rel="stylesheet" type="text/css" href="css/style.css">

<?php
    $email = $_GET['email'];
    $name = $_GET['nama'];
    $kota = $_GET['kota'];
    $massage = $_GET['massage'];
?>

<div id="background">
    <div class="judul"><h2>FORM BERITA TERBARU</h2></div>
        <div id="userdetails">
            <p> E-MAIL&emsp;&emsp;&nbsp;:&emsp;&emsp;<?php echo $email; ?> </p>
            <p> NAMA&emsp;&emsp;&ensp;&nbsp;:&emsp;&emsp;<?php echo $name; ?> </p>
            <p> KOTA&emsp;&emsp;&ensp;&ensp;:&emsp;&emsp;<?php echo $kota; ?> </p>
            <p> MASSAGE&emsp;:&emsp;&emsp;<?php echo $massage; ?> </p>
        </div>
</div>