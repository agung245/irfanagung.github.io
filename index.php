<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMP Daarul Muttaqien</title>
</head>

<body>
    <header>
    <fieldset>
        <center><img src="MasjidDM.png"></center>
        <font face="Arial" size="12" color="black">
            <center><h3>Pendaftaran Siswa Baru</h3></center>
        </font>
        <font face="Arial" size="8" color="black">
            <center><h1>SMP Daarul Muttaqien</h1></center>
        </font>
    </fieldset>    
    </header>
    <table>
        <font face="Arial" size="5" color="black">
        <h4>Menu</h4></table>
        </font>
    <nav>
        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
        <?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    </body>
</html>