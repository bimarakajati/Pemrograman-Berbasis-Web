<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aplikasi CRUD data tamu</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="depan.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_tamu.php">Daftar Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="abaout.html">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- Content here -->
        <h1>Daftar Tamu</h1>
        <a href='add_tamu.html' class='btn btn-danger'>Add New</a>
        <?php
        include "koneksi.php";
        $sql = "select * from tamu";
        $hasil = mysqli_query($conn, $sql);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">IDtamu</th>
                    <th scope="col">nama</th>
                    <th scope="col">email</th>
                    <th scope="col">pesan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($r = mysqli_fetch_assoc($hasil)) {
                    echo "                
                    <tr>
                        <th scope='row'>" . $r['idtamu'] . "</th>
                        <td>" . $r['nama'] . "</td>
                        <td>" . $r['email'] . "</td>
                        <td>" . $r['pesan'] . "</td>
                        <td>
                        <a href='edit_tamu.php?idtamu=" . $r['idtamu'] . "' class='btn btn-danger'>Edit</a>
                        <a href='del_tamu.php?idtamu=" . $r['idtamu'] . "' class='btn btn-danger'>Del</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>