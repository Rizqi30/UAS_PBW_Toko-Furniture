// PARALAX
// Jumbotron
// Scroll

$(window).scroll(function () { //scrool
  let wScroll = $(this).scrollTop();

  // Jumbotron
  $(".jumbotron .container").css({ //speed scrool berbeda dari kontainer
    transform: "translate(0px, " + wScroll / 3 + "%)",
  });

  // About
  if (wScroll > $(".about").offset().top - 550) {
    $(".pKiri").addClass("pMuncul");
    $(".pKanan").addClass("pMuncul");
  } else {
    $(".pKiri").removeClass("pMuncul");
    $(".pKanan").removeClass("pMuncul");
  }

  // Product
  if (wScroll > $(".product").offset().top - 550) {
    $(".product .listProduct").each(function (i) {
      setTimeout(function () {
        $(".product .listProduct").eq(i).addClass("proMuncul");
      }, 500 * (i + 1));
    });
  } else {
    $(".product .listProduct").removeClass("proMuncul");
  }
});
// On Load

$(window).on("load", function () {
  // Info Panel
  $(".info-panel .characteristic").addClass("muncul");
});

// JSON
// Search
$(document).ready(function () {
  $("#search").keyup(function () { //ketik untuk mencari benda
    var searchField = $("#search").val(); //mendapatkan value dari search
    var expression = new RegExp(searchField, "i");
    $.getJSON("product.json", function (data) { //buka data
      let product = data.product; 
      let content = ""; //konten berisi kosong
      $.each(product, function (i, data) { //tiap elemen diberi fungsi lalu di loop
        if (data.nama.search(expression) != -1) { //jika true menampilkan barang yang ada
          content += //tambahkan ke list product
            '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
            data.gambar +
            '" class="rounded mx-auto d-block" alt="headset" /><div class="card-body"><h5 class="card-title">' +
            data.nama +
            '</h5><p class="card-text">' +
            data.deskripsi +
            '</p><h5 class="card-title mb-3">Price : Rp. ' +
            data.harga +
            '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
            i +
            '" class="btn btn-success">Buy</a></div></div></div>';
        }
      });
      $(".listProductParent").html(content);
      $(".product .listProduct").each(function (i) {
        setTimeout(function () {
          $(".product .listProduct").eq(i).addClass("proMuncul");
        }, 200 * (i + 1));
      });
    });
  });
});

//Product
$.getJSON("product.json", function (data) { //untuk ALL jadi tidak perlu d seacrh
  let product = data.product;
  $.each(product, function (i, data) {
    $(".listProductParent").append(
      '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
        data.gambar +
        '" class="rounded mx-auto d-block" alt="jersey" /><div class="card-body"><h5 class="card-title">' +
        data.nama +
        '</h5><p class="card-text">' +
        data.deskripsi +
        '</p><h5 class="card-title mb-3">Price : Rp. ' +
        data.harga +
        '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
        i +
        '" class="btn btn-success">Buy</a></div></div></div>'
    );

    //Modal
    $("#modal").append(
      '<div class="modal fade" id="exampleModal' +
        i + // harus di loop sejumlah isi json 
        '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">' +
        data.nama +
        '</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><div class="row"><img src="Product/' +
        data.gambar +
        '" class="card-img-top img-fluid rounded mx-auto d-block p-5" alt="jersey" /><p class="card-text">' +
        data.deskripsi +
        "</p></div><h2 class='mt-3 total" +
        i + // harus di loop sejumlah isi json
        "'>Rp. " +
        data.harga +
        '</h2></div><div class="modal-footer"><button class="btn btn-danger buttonKurang" id="kurang' +
        i + // i looping semua
        '">-</button><h2 id="text' +
        i +
        '">0</h2><button class="btn btn-success buttonTambah" id="tambah' +
        i +
        '">+</button><div class="closeBuy ms-auto"><button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-success btnCheckout' +
        i +
        '" data-bs-toggle="modal" data-bs-target="#staticBackdrop' +
        i +
        '">Buy</button></div></div></div></div></div>'
    );
  });
});

//validasi kategori
var btnClick = false; 
$(".btnKategori").on("click", function () {
  $(".btnKategori").removeClass("btnActive"); // btn Kattegori di klik menghapus aksi btn Active
  $(this).addClass("btnActive"); // this itu pindah 

  let kategori = $(this).html(); // untuk mendapatkan elemen html
  $("#namaProduk").html(kategori);

  $.getJSON("product.json", function (data) {
    let product = data.product; 
    let content = "";
    $.each(product, function (i, data) {
      if (data.kategori == kategori) { // Menampilkan benda yang ada pada kategori
        content += 
          '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
          data.gambar +
          '" class="rounded mx-auto d-block" alt="jersey" /><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><h5 class="card-title mb-3">Price : Rp. ' +
          data.harga +
          '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
          i +
          '" class="btn btn-success">Buy</a></div></div></div>';
      } else if (kategori == "All") { // muncul semua barang pada kategori ALL
        content +=
          '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
          data.gambar +
          '" class="rounded mx-auto d-block" alt="jersey" /><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><h5 class="card-title mb-3">Price : Rp. ' +
          data.harga +
          '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
          i +
          '" class="btn btn-success">Buy</a></div></div></div>';
      }
    });
    $(".listProductParent").html(content);
    $(".product .listProduct").each(function (i) {
      setTimeout(function () {
        $(".product .listProduct").eq(i).addClass("proMuncul");
      }, 200 * (i + 1));
    });
  });
});
