<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Viga&display=swap" rel="stylesheet" />  

    <!-- My Css -->
    <link rel="stylesheet" href="style.css" />

    <title>Aha Property</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <?php 
            if (isset($_POST['User'])){
              echo '<a type="button" class="btn btn-primary tombol">' . $_POST['User'].'</a>';
            }else{
              echo '<a type="button" class="btn btn-primary tombol" href="login.html">Sign In</a>';
            }
            ?>
          </ul>
        </div>
        <a class="navbar-brand jerom" href="#"> AHA PROPERTY</a>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-white text-center">
        <h1 class="display-4">
          High Quality Product In <strong> Our Store </strong>
        </h1>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Info Panel -->
    <div class="row justify-content-center">
      <div class="col-lg-10 info-panel">
        <div class="row characteristic">
          <div class="col-lg">
          <img src="Product/properti.jpg" alt="original" class="float-left gambar" />
            <h4>ORIGINAL</h4>
            <p>Direct from the official store</p>
          </div>
          <div class="col-lg">
          <img src="Product/jempol.jpg" alt="bestprice" class="float-left gambar" />
            <h4>BEST PRICE</h4>
            <p>Cheapest price compared to other stores</p>
          </div>
          <div class="col-lg">
          <img src="Product/bestquality.png" alt="bestquality" class="float-left gambar" />
            <h4>BEST QUALITY</h4>
            <p>High Quality Material and Advanced Technology</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Info Panel -->

    <!-- Product -->
    <section id="product" class="product">
      <div class="row">
        <div class="container">
          <div class="row text-center mt-5">
            <h2>Product</h2>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-md-4 d-flex justify-content-center">
              <button class="btnKategori all btnActive">All</button>
              <button class="btnKategori Bedroom Set">Bedroom Set</button>
              <button class="btnKategori Kitchen Set">Kitchen Set</button>
              <button class="btnKategori Livingroom Set">Livingroom Set</button>
              <button class="btnKategori Bathroom set">Bathroom Set</button>
            </div>
          </div>
          <div class="container">
            <div class="row mt-3 d-flex justify-content-between">
              <div class="col-lg-4">
                <h3 id="namaProduk">All</h3>
              </div>
              <div class="col-lg-4">
                <form class="d-flex">
                  <input id="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-3 mb-5 listProductParent">
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L30,208C60,192,120,160,180,128C240,96,300,64,360,85.3C420,107,480,181,540,218.7C600,256,660,256,720,218.7C780,181,840,107,900,112C960,117,1020,203,1080,240C1140,277,1200,267,1260,240C1320,213,1380,171,1410,149.3L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Product -->

    <!-- Modal -->
    <section id="modal"></section>
    <!-- Akhir Modal -->

    <!-- Modal Checkout -->
    <section id="modalCheckout"></section>
    <!-- Akhir Checkout -->

    <!-- About -->
    <section id="about" class="about bg-white">
      <div class="row">
        <div class="container">
          <div class="row text-center textAbout">
            <h2>About</h2>
          </div>
          <div class="row justify-content-evenly text-center mt-3 mb-5">
            <div class="col-lg-7">
              <h4 class="pAbout">Aha Property always provide the needs of a good property with high quality, advanced technology, affordable price, and have good durable</h4>
              <p class="alamat">Jl. Lempuyang 2 No. 506, Kel Sambiroto , Tembalang <br> telp +62819-0110-1019 , email : rizqiah.rah14@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Footer -->
    <section id="Footer">
      <footer class="pt-4 pb-2 text-center bg-white">
        <div class="row footer">
          <div class="col-lg-4">
            <a href="https://www.instagram.com/rizqi.ahh/">
              <img src="icon/instagram.png" alt="ig" style="width: 30px; margin-top: 10px;">
            </a>
          </div>
          <div class="col-lg-4">
            <p>Created with &hearts; by Rizqi Akbar</a>  </p>
          </div>
          <div class="col-lg-4">
            <h2 style="font-weight: 200; margin-right: 25px">Aha<span style="font-weight: 500">Property</span>
            </h2>
          </div>
        </div>
      </footer>
    </section>
    <!-- Akhir Footer -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="ghost-typer.js"></script>

    <!-- My Java Script -->
    <script src="script.js"></script>

    <?php 
      if(isset($_POST['Address'])){
        echo '<script type ="text/JavaScript">';  
        echo 'window.alert("Sign In Complete")';  
        echo '</script>';
      }else{
        echo '<script type ="text/JavaScript">';  
        echo 'window.alert("You Must Sign In First")';  
        echo '</script>';
      }
    ?>

    <script>
       $.getJSON("product.json", function (data) {
        let product = data.product;
        $.each(product, function (i, data) {
        // Fungsi Modal
          // Product
          var angka = 0;
          $("#tambah" + i + "").on("click", function () {
            angka++;
            $("#text" + i + "").text(angka);
            var harga = parseInt(data.harga);
            var totalHarga = harga * angka;
            var ongkir = 50000;
            $(".total" + i + "").html("Rp. " + totalHarga);
            content = "";
            var address = "<?php echo $_POST["Address"]; ?>";
            if (angka > 0) {
              content +=
                '<div class="modal fade" id="staticBackdrop' +
                i +
                '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="staticBackdropLabel">' +
                data.nama +
                '</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><h1 clas="hargaCheckout">Rp. ' +
                (totalHarga + ongkir) +
                '</h1><p class="mt-3">Price : Rp. ' +
                data.harga +
                '</p><p style="margin-top: -15px;">Total : ' +
                angka +
                '</p><p style="margin-top: -15px;">Order Fee : Rp. ' +
                ongkir +
                "</p><p style='margin-top: -15px;'>Address : " +
                address +
                '</p><p style="margin-top: -15px;">Wallet Acount (AhPro) : 105610351025</p></div><div class="modal-footer d-flex justify-content-center"><div class="row"><p class="text-danger" style="text-align: center;">Kirimkan bukti pemesanan ke No (0819-0110-1019) </p><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div></div></div></div></div>';
            } else {
              content = "";
            }
            $("#modalCheckout").html(content);
          });
          $("#kurang" + i + "").on("click", function () {
            angka--;
            var harga = parseInt(data.harga);
            var totalHarga = harga * angka;
            var ongkir = 50000;
            $("#text" + i + "").html(angka);
            $(".total" + i + "").html("Rp. " + totalHarga);
            if (angka <= 0) {
              angka = 0;
              $("#text" + i + "").html(angka);
              $(".total" + i + "").html("Rp. " + data.harga);
            }
            content = "";
            if (angka > 0) {
              content +=
                '<div class="modal fade" id="staticBackdrop' +
                i +
                '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="staticBackdropLabel">' +
                data.nama +
                '</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><h1 clas="hargaCheckout">Rp. ' +
                (totalHarga + ongkir) +
                '</h1><p class="mt-3">Price : Rp. ' +
                data.harga +
                '</p><p style="margin-top: -15px;">Total : ' +
                angka +
                '</p><p style="margin-top: -15px;">Order Fee : Rp. ' +
                ongkir +
                '</p><p style="margin-top: -15px;">Address : ' +
                address +
                '</p><p style="margin-top: -15px;">Bank Acount (AhPro) : 123123456456</p></div><div class="modal-footer d-flex justify-content-center"><div class="row"><p class="text-danger" style="text-align: center;">Dont Forget to Screen Shot This Screen</p><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div></div></div></div></div>';
            } else {
              content = "";
            }
            $("#modalCheckout").html(content);
          });
        })
      })
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
