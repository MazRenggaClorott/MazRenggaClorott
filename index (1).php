<!DOCTYPE html>
<html lang="en">
    <!---bg-color--->
    <style>
        body {
            background: linear-gradient(to right, #f12711, #f5af19);
            color: #fff;
        }
    
        .navbar {
            background-color: #333;
        }
    
        .carousel-item img {
            border-radius: 10px;
        }
    
        .card {
            background-color: #333;
            color: #fff;
        }
    
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
    </style>
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
     
    
   
<!---Navbar--->
<nav class="navbar bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="xl.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      SELAMAT DATANG:)
    </a>
  </div>
</nav>
    <!------Tampilan --->
    <div class="container">
        <div class="col">
            <div class="row">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="c.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="b.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="t.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="d.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<!--perulangan--->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Informasi Menu</h1>

                <div class="row justify-content-center">
                    <?php 
                        $menu =
                        [
                            [
                                'Nama Makanan'          =>  'Cooffe',
                                'Informasi'    =>  'Khas Jawa Timur'
                            ],
                            [
                                'Nama Makanan'          =>  'coffe',
                                'Informasi'    =>  'Asal NTT'
                            ],
                            [
                                'Nama Makanan'          =>  'Varian Rasa',
                                'Informasi'    =>  'Buah dan coffe'
                            ],
                        ];
                        foreach ($menu as $data){
                    ?> 
                    <div class="col-md-6">
                        <div class="card mb-3 text-center">
                            <div class="card-body bg-warning">
                                <h5 class="card-title"><?php echo $data['Nama Makanan']?></h5>
                                <p class="card-text"><?php echo $data['Informasi']?></p>
                                <a href="isi.php" target="_blank" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                
            </div>
        </div>
    </div>
    <!--Target blank----->
    <div class="row mt-3">
            <div class="col">
                <footer class="text-muted text-center">
                    <p class="text-white">Created by <a href="#" class="fw-bold text-decoration-none" target="_blank">Muhammad Rengga
                            Cahya Putra</a>
                    </p>
                </footer>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


