<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Commerce</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
       
        <link rel="stylesheet" href="styles.css">
    
    </head>
    <body>
      <?php
      session_start();
  ?>


    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">

        <div class="container">
          <img src="https://github.com/deracahyani19610084/deracahyani08/blob/main/logo1.png?raw=true" alt="">
          <h3>Derapedia</h3>
          <br>
         
        <div class="left">
            <?php if (!empty($_SESSION['username'])){ ?>
            <div style="clear;both; text-align; right; margin-right: 20px;"><h3>Selamat Berbelanja <span id="name"><?php echo $_SESSION['nama']?></span></h3></div>
        <?php } ?>
        </div>
            

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <?php 
                if(!empty($_SESSION['username'])){
                    echo'<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                } else {
                    echo'<li class="nav-item"><a class="nav-link" href="daftar.php">Registrasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                } ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <i class="far fa-search"></i>
                <i class="far fa-shopping-bag"></i>
              </li>
              </ul>
            
          </div>
        </div>
    </nav>
  
      
    <section id="home">
        <div class="container">
            <h2>Welcome To Derapedia</h2>
            <h1><span>Harga Terjangkau,</span> Penawaran Menarik</h1>
            <p>Produk-produk kami merupakan produk yang sangat berkualitas</p>
            <button>Belanja Sekarang</button>
        </div>
    </section>

    <section id="brand" class="container">
        <div class="row m-0 py-5">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/brand1.png?raw=true " alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/brand2.jpg?raw=true" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/brand3.jpg?raw=true" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/brand4.jpg?raw=true " alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/brand7.jpg?raw=true" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/brand9.png?raw=true" alt="">
        </div>
    </section>

    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/kacamataoutfit.jpg?raw=true" alt="">
                <div class="details">
                    <h2>Cashback 40%</h2>
                    <button class="text-uppercase">Belanja Sekarang</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatu1.jpg?raw=true" alt="">
                <div class="details">
                    <h2>Flash Sale</h2>
                    <button class="text-uppercase">Belanja Sekarang</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Outfitbaju.jpg?raw=true" alt="">
                <div class="details">
                    <h2>Diskon s/d 50%</h2>
                    <button class="text-uppercase">Belanja Sekarang</button>
                </div>
            </div>

    </div>
    </section>

    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Produk-Produk Terbaik</h3>
            <hr class="mx-auto">
            <p>Disini Anda bisa membeli sesuai keinginan Anda</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatu2bnr.jpg?raw=true" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sneakers</h5>
            <h4 class="p-price">250.000</h4>
            <button class="buy-btn">Beli Sekarang</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatu3.jpg?raw=true" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sepatu Sekolah</h5>
            <h4 class="p-price">150.000</h4>
            <button class="buy-btn">Beli Sekarang</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatu5.jpg?raw=true" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Flat Shoes</h5>
            <h4 class="p-price">80.000</h4>
            <button class="buy-btn">Beli Sekarang</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatu6bnr.jpg?raw=true" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sepatu Olahraga Pria</h5>
            <h4 class="p-price">350.000</h4>
            <button class="buy-btn">Beli Sekarang</button>
          </div>
        </div>
    </section>

    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>Diskon Khusus Hari ini</h4>
        <h1>Dera Collection</h1>
        <button class="text-uppercase">Belanja Sekarang</button>
      </div>
    </section>


    <section id="clothes" class="my-5">
      <div class="container text-center mt-5 py-5">
          <h3>Fashion Wanita</h3>
          <hr class="mx-auto">
          <p>Produk dengan kualitas baik</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/cardigan%20rajut.jpg?raw=true" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Cardigan Rajut</h5>
          <h4 class="p-price">80.000</h4>
          <button class="buy-btn">Beli Sekarang</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/kemejawanita.jpg?raw=true" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Kemeja Wanita</h5>
          <h4 class="p-price">120.000</h4>
          <button class="buy-btn">Beli Sekarang</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/bajurajut%20-%20Copy.jpg?raw=true" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Baju Rajut</h5>
          <h4 class="p-price">100.000</h4>
          <button class="buy-btn">Beli Sekarang</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/bajupoloswanita%20-%20Copy.jpg?raw=true" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Baju Polos Wanita</h5>
          <h4 class="p-price">50.000</h4>
          <button class="buy-btn">Beli Sekarang</button>
        </div>
      </div>
  


    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Pocket%20Sling%20Bag.jpg?raw=true" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Pocket Sling Bag</h5>
        <h4 class="p-price">55.000</h4>
        <button class="buy-btn">Beli Sekarang</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Tas%20Punggung%20Kecil.jpg?raw=true" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Tas Punggung Kecil</h5>
        <h4 class="p-price">70.000</h4>
        <button class="buy-btn">Beli Sekarang</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Tas%20sekolah.jpg?raw=true" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Tas Sekolah</h5>
        <h4 class="p-price">175.000</h4>
        <button class="buy-btn">Beli Sekarang</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Tas%20selempang%20wanita.jpg?raw=true" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Tas Selempang Wanita</h5>
        <h4 class="p-price">40.000</h4>
        <button class="buy-btn">Beli Sekarang</button>
      </div>
    </div>
 


<div class="row mx-auto container-fluid">
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/celana%20pendek.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Celana Pendek Wanita</h5>
    <h4 class="p-price">55.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/celanajeanswanita.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Celana Jeans Wanita</h5>
    <h4 class="p-price">140.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/celanapanjang.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Celana Panjang Wanita</h5>
    <h4 class="p-price">100.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/kulotwanita.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Kulot Wanita</h5>
    <h4 class="p-price">120.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
</div>



<div class="row mx-auto container-fluid">
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Kalung.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Kalung</h5>
    <h4 class="p-price">35.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/cincin.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Cincin</h5>
    <h4 class="p-price">30.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/gelang.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Gelang</h5>
    <h4 class="p-price">20.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/jam%20tangan.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Jam Tangan</h5>
    <h4 class="p-price">80.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
</div>
</section>

<section id="footwear" class="my-5">
  <div class="container text-center mt-5 py-5">
      <h3>Fashion Pria</h3>
      <hr class="mx-auto">
      <p>Produk dengan Harga Terjangkau</p>
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/kemejapanjang.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Kemeja Lengan Panjang Pria</h5>
      <h4 class="p-price">95.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/kemejapendek.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Kemeja Lengan Pendek Pria</h5>
      <h4 class="p-price">70.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sweater%20pria.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Sweater Pria</h5>
      <h4 class="p-price">130.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/hoodie%20pria.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Hoodie Pria</h5>
      <h4 class="p-price">150.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
  </div>


  <div class="row mx-auto container-fluid">
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Sepatu%20Pantofel%20Pria.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Sepatu Pantofel Pria</h5>
    <h4 class="p-price">160.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatu%20pdh.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Sepatu PDH Pria</h5>
    <h4 class="p-price">250.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatu%20sandal%20pria.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Sepatu Sandal Pria</h5>
    <h4 class="p-price">120.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/sepatuformal.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Sepatu Formal Pria</h5>
    <h4 class="p-price">165.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
</div>


<div class="row mx-auto container-fluid">
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/jam%20tangan%20anti%20air.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Jam Tangan Anti Air Pria</h5>
    <h4 class="p-price">300.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Jam%20Tangan%20Analog%20Pria.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Jam Tangan Analog Pria</h5>
    <h4 class="p-price">130.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Jam%20tangan%20pria%20digital.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Jam Digital Pria</h5>
    <h4 class="p-price">210.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Swiss%20Army.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Swiss Army</h5>
    <h4 class="p-price">195.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
</div>
</section>


<section id="baby" class="my-5">
  <div class="container text-center mt-5 py-5">
      <h3>Perlengkapan Bayi</h3>
      <hr class="mx-auto">
      <p>Berbagai macam produk bayi sesuai kebutuhan Anda</p>
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Baju%20tidur%20bayi.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Baju Tidur Bayi</h5>
      <h4 class="p-price">70.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Dress%20Bayi.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Dress Bayi</h5>
      <h4 class="p-price">85.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Newborn%20Baby%20Dress.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Newborn Baby Dress</h5>
      <h4 class="p-price">60.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Piyama%20Anak.jpg?raw=true" alt="">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Piyama Anak</h5>
      <h4 class="p-price">70.000</h4>
      <button class="buy-btn">Beli Sekarang</button>
    </div>
  </div>


  <div class="row mx-auto container-fluid">
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Baby%20Walker.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Baby Walker</h5>
    <h4 class="p-price">460.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Babyelle%20walker.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Babyelle Walker</h5>
    <h4 class="p-price">300.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Kereta%20Dorong%20Bayi.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Kereta Dorong Bayi</h5>
    <h4 class="p-price">1.450.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Kursi%20Mainan%20Bayi.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Kursi Mainan Bayi</h5>
    <h4 class="p-price">355.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
</div>


<div class="row mx-auto container-fluid">
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Kasur%20Bayi.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Kasur Bayi</h5>
    <h4 class="p-price">350.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Selimut%20bayi%20polos.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Selimut Bayi Polos</h5>
    <h4 class="p-price">80.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Selimut%20rajut%20bayi.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Selimut Rajut Bayi</h5>
    <h4 class="p-price">110.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
  <div class="product text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/tas%20bayi.jpg?raw=true" alt="">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name">Tas Untuk Perlengkapan Bayi</h5>
    <h4 class="p-price">215.000</h4>
    <button class="buy-btn">Beli Sekarang</button>
  </div>
</div>
</section>


<footer class="mt-5 py-5">
  <div class="row container mx-auto pt-5" >
    <div class="footer-one col-lg-3 col-md-6 col-12">
      <img src="https://github.com/deracahyani19610084/deracahyani08/blob/main/logo1.png?raw=true" alt="">
      <p class="pt-3">Derapedia merupakan salah satu tempat pembelanjaan online yang memiliki harga yang terjangkau dan kualitas baik</p>
    </div>
    <div class="footer-one col-lg-3 col-md-6 col-12">
      <h5 class="pb-2">Produk</h5>
      <ul clasa="text-uppercase list-unstyled">
        <li><a href="#">Celana</a></li>
        <li><a href="#">Baju</a></li>
        <li><a href="#">Aksesoris</a></li>
        <li><a href="#">Sepatu</a></li>
        <li><a href="#">Tas</a></li>
      </ul>
    </div>
    <div class="footer-one col-lg-3 col-md-6 col-12">
      <h5 class="pb-2">Contact Us</h5>
      <div>
        <h6 class="text-uppercase">Alamat</h6>
        <p>Jalan Sumber Taman No.8A</p>
      </div>
      <div>
        <h6 class="text-uppercase">No. Telp</h6>
        <p>083835970994</p>
      </div>
      <div>
        <h6 class="text-uppercase">Instagram</h6>
        <p>deracahyani.08</p>
      </div>
      <div>
        <h6 class="text-uppercase">E-mail</h6>
        <p>deracahyani08@gmail.com</p>
      </div>
    </div>
    <div class="footer-one col-lg-3 col-md-6 col-12">
      <h5 class="pb-2">Instagram</h5>
      <div class="row">
        <img class="img-fluid w-25 h-100 m-2" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/kacamataoutfit.jpg?raw=true" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/celanapanjang.jpg?raw=true" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Outfitbaju.jpg?raw=true" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/kemejawanita.jpg?raw=true" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="https://github.com/deracahyani19610084/deracahyani08/blob/main/Tas%20Punggung%20Kecil.jpg?raw=true" alt="">
      </div>
    </div>
  </div>
  </div>
  <div class="copyright mt-5">
    <div class="row container mx-auto">
      <div class="col-lg-3 col-md-6 col-12">
        <img src="https://github.com/deracahyani19610084/deracahyani08/blob/main/bca1.jpg?raw=true" alt="">
        <img src="https://github.com/deracahyani19610084/deracahyani08/blob/main/bni.jpg?raw=true" alt="">
        <img src="https://github.com/deracahyani19610084/deracahyani08/blob/main/mandiri.png?raw=true" alt="">
      </div>
      <div class="col-lg-4 col-md-6 col-12 text-nowrap">
        <p>dera eCommerce © 2021. All Rights Reserved</p>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
       <a href="#"> <i class="fab fa-facebook-square"></i></a>
       <a href="#"> <i class="fab fa-twitter-square"></i></a>
       <a href="#"> <i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </div>
</footer>
    
    
    
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    </body>
</html>