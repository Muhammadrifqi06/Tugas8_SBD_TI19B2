<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Peminjaman Perpustakaan</title>
</head>

<body>
<header>
    <h1>Table Database</h1>
</header>
    <div class="header">
        <div class="main"></div>
    </div>
        <h2>Table Buku</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM buku';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_buku']?></td>
                        <td><?php echo $row['judul']?></td>
                        <td><?php echo $row['pengarang']?></td>
                        <td><?php echo $row['penerbit']?></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
        </table>
        
        <h2>Table Mahasiswa</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM mahasiswa';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['id_mhsw']?></td>
                        <td><?php echo $row['nama_mhsw']?></td>
                        <td><?php echo $row['nim_mhsw']?></td>
                        <td><?php echo $row['kelas_mhsw']?></td>
                    </tr>
                </tbody>
                <?php
            }   
            ?>            
        </table>
    
        <h2>Table Peminjaman</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>ID Buku</th>
                    <th>ID Mahasiswa</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM peminjaman';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_pinjam']?></td>
                        <td><?php echo $row['id_buku']?></td>
                        <td><?php echo $row['id_mhsw']?></td>
                        <td><?php echo $row['tgl_pinjam']?></td>
                        <td><?php echo $row['tgl_kembali']?></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>        
        </table>
        <br>
        <br>
    <footer>
        <p>&copy; 2021 - Universitas pelita bangsa Fakultas Teknik Informatika</p>
    </footer
</body>    
</html>
