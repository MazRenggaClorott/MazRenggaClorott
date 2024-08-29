<!DOCTYPE html>
<html>
<!---bg color---->
<style>
    body {
        background-color: #f8f9fa; /* Light gray background color */
    }

    .container {
        background-color: #ffffff; /* White background for the main content */
        border-radius: 10px; /* Rounded corners for the content */
        padding: 20px; /* Add padding inside the container */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow effect */
    }

    .navbar {
        background-color: #343a40; /* Dark navbar background color */
    }

    footer {
        background-color: #343a40; /* Dark background for the footer */
        color: #ffffff; /* White text color for the footer */
        padding: 10px; /* Add some padding inside the footer */
    }
</style>


<head>
    <title>Input Nama Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!---navbar--->
    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand text-dark text-center" href="#">
                <img src="xl.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                PILIHAN MINUMAN ANDA :)
            </a>
        </div>
    </nav>
<!------ISI----->
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Minuman Kocok Al-Star</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="z.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Coffe ala NTT</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="t.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Varian Rasa</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <form method="post" action="isi.php">
                    <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pengguna">
                    <input type="number" class="form-control" placeholder="Jumlah Pesanan" name="jumlah_pesanan">
                    <button type="submit" class="btn btn-primary" name="kirim">Pesan</button>
                </form>

                <?php
                if (isset($_POST['kirim'])) {
                    $nama = $_POST['nama_pengguna'];
                    $jumlah = $_POST['jumlah_pesanan'];

                    $total = $jumlah * 120000;
                    echo "<p>Total Harga: $total</p>";
                    echo "<p>Nama Pelanggan: $nama</p>";
                    echo "<p>Jumlah Pesanan: $jumlah</p>";
                    
                }
                ?>
            </div>
            <div class="col-4">
                <form method="post" action="isi.php">
                    <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pengguna">
                    <input type="number" class="form-control" placeholder="Jumlah Pesanan" name="jumlah_pesanan">
                    <button type="submit" class="btn btn-primary" name="pesan">Pesan</button>
                </form>

                <?php
                if (isset($_POST['pesan'])) {
                    $nama = $_POST['nama_pengguna'];
                    $jumlah = $_POST['jumlah_pesanan'];

                    $total = $jumlah * 150000;
                    echo "<p>Total Harga: $total</p>";
                    echo "<p>Nama Pelanggan: $nama</p>";
                    echo "<p>Jumlah Pesanan: $jumlah</p>";
                    
                }
                ?>
            </div>
            <div class="col-4">
                <form method="post" action="isi.php">
                    <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pengguna">
                    <input type="number" class="form-control" placeholder="Jumlah Pesanan" name="jumlah_pesanan">
                    <button type="submit" class="btn btn-primary" name="KOn">Pesan</button>
                </form>

                <?php
                if (isset($_POST['KOn'])) {
                    $nama = $_POST['nama_pengguna'];
                    $jumlah = $_POST['jumlah_pesanan'];

                    $total = $jumlah * 195000;
                    echo "<p>Total Harga: $total</p>";
                    echo "<p>Nama Pelanggan: $nama</p>";
                    echo "<p>Jumlah Pesanan: $jumlah</p>";
                    
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="text-muted text-center">
        <p class="text-white">Created by <a href="#" class="fw-bold text-decoration-none" target="_blank">Muhammad Rengga Cahya Putra</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
