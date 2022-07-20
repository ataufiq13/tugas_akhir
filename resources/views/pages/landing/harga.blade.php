<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Id Digital - Harga</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets_landing_page/css/style.css') }}" />

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
</head>

<body>
  <!--
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <a href="#" class="logo">
        <img src="{{ asset('assets_landing_page/images/logo-dark.png') }}" alt="Id Digital" />
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">
          <li>
            <a href="{{ route('landing') }}" class="navbar-link">Beranda</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Harga</a>
          </li>

          <li>
            <a href="#product" class="navbar-link">Produk</a>
          </li>
        </ul>

        <div class="header-actions">
          <a href="{{ route('login') }}" class="header-action-link">Masuk</a>

          <a href="{{ route('register') }}" class="header-action-link">Daftar</a>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <article>
      <!--
        - HARGA
      -->

      <section class="harga" id="harga">
        <div class="container">
          <h2 class="h2 section-title">List Harga</h2>

          <p class="section-text">Berikut merupakan detail harga dari masing masing produk yang kami tawarkan.</p>

          <div class="harga-wrapper">
            <figure class="harga-banner">
              <img src="{{ asset('assets_landing_page/images/harga-img-1.svg') }}" alt="illustration art" />
            </figure>

            <div class="harga-content">
              <table id="" class="display">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis / Bahan</th>
                  <th>Ukuran</th>
                  <th>Harga</th>
                </tr>
                <tr>
                  <td rowspan="3">1</td>
                  <td rowspan="3">Print HVS</td>
                  <td>HVS 70gr</td>
                  <td>A4 / F4</td>
                  <td>Rp. 500/pcs</td>
                </tr>
                <tr>
                  <td>HVS 80gr</td>
                  <td>A4 / F4</td>
                  <td>Rp. 750/pcs</td>
                </tr>
                <tr>
                  <td>HVS 70gr</td>
                  <td>A3</td>
                  <td>Rp. 2.000/pcs</td>
                </tr>
                <tr>
                  <td rowspan="4">2</td>
                  <td rowspan="4">Print Art Paper</td>
                  <td>AP 150gr</td>
                  <td>F4</td>
                  <td>Rp. 4.000/pcs</td>
                </tr>
                <tr>
                  <td>AP 230gr</td>
                  <td>F4</td>
                  <td>Rp. 5.000/pcs</td>
                </tr>
                <tr>
                  <td>AP 150gr</td>
                  <td>A3</td>
                  <td>Rp. 8.000/pcs</td>
                </tr>
                <tr>
                  <td>AP 230gr</td>
                  <td>A3</td>
                  <td>Rp. 10.000/pcs</td>
                </tr>
                <tr>
                  <td rowspan="3">3</td>
                  <td rowspan="3">Print Sticker</td>
                  <td>Chromo</td>
                  <td>A3</td>
                  <td>Rp. 10.000/pcs</td>
                </tr>
                <tr>
                  <td>Vinyl</td>
                  <td>A3</td>
                  <td>Rp. 15.000/pcs</td>
                </tr>
                <tr>
                  <td>Transparan</td>
                  <td>A3</td>
                  <td>Rp. 20.000/pcs</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Print Sertifikat</td>
                  <td>Linen</td>
                  <td>F4</td>
                  <td>Rp. 5.000/pcs</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Laminating</td>
                  <td>HVS / Art Paper</td>
                  <td>F4</td>
                  <td>Rp. 3.000/pcs</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Scan Berkas</td>
                  <td>-</td>
                  <td>F4</td>
                  <td>Rp. 2.000/pcs</td>
                </tr>
              </table>
            </div>
          </div>

          <div class="harga-wrapper">
            <figure class="harga-banner">
              <img src="{{ asset('assets_landing_page/images/harga-img-2.svg') }}" alt="illustration art" />
            </figure>

            <div class="harga-content">
              <table id="" class="display">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis / Bahan</th>
                  <th>Ukuran</th>
                  <th>Harga</th>
                </tr>
                <tr>
                  <td rowspan="3">7</td>
                  <td rowspan="3">Nama Dada</td>
                  <td>Grafir</td>
                  <td>8 x 2cm</td>
                  <td>Rp. 20.000/pcs</td>
                </tr>
                <tr>
                  <td>Resin</td>
                  <td>8 x 2cm</td>
                  <td>Rp. 25.000/pcs</td>
                </tr>
                <tr>
                  <td>Kuningan</td>
                  <td>8 x 2cm</td>
                  <td>Rp. 30.000/pcs</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Custom Mug</td>
                  <td>Putih Polos</td>
                  <td>-</td>
                  <td>Rp. 20.000/pcs</td>
                </tr>
                <tr>
                  <td rowspan="2">9</td>
                  <td rowspan="2">Kartu Nama</td>
                  <td>AP 230gr (1 sisi)</td>
                  <td>8.7 x 5.5cm</td>
                  <td>Rp. 50.000/box</td>
                </tr>
                <tr>
                  <td>AP 230gr (2 sisi)</td>
                  <td>8.7 x 5.5cm</td>
                  <td>Rp. 30.000/box</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>ID Card</td>
                  <td>PVC</td>
                  <td>8.7 x 5.5cm</td>
                  <td>Rp. 15.000/box</td>
                </tr>
                <tr>
                  <td rowspan="6">11</td>
                  <td rowspan="6">Cetak Foto</td>
                  <td>Lustre</td>
                  <td>2x3, 3x4, 4x6 cm</td>
                  <td>Rp. 5.000/paket</td>
                </tr>
                <tr>
                  <td>Lustre</td>
                  <td>3R</td>
                  <td>Rp. 4.000/pcs</td>
                </tr>
                <tr>
                  <td>Lustre</td>
                  <td>4R</td>
                  <td>Rp. 5.000/pcs</td>
                </tr>
                <tr>
                  <td>Lustre</td>
                  <td>5R</td>
                  <td>Rp. 6.000/pcs</td>
                </tr>
                <tr>
                  <td>Lustre</td>
                  <td>10R</td>
                  <td>Rp. 10.000/pcs</td>
                </tr>
                <tr>
                  <td>Lustre</td>
                  <td>12R</td>
                  <td>Rp. 15.000/pcs</td>
                </tr>
              </table>
            </div>
          </div>

          <div class="harga-wrapper">
            <figure class="harga-banner">
              <img src="{{ asset('assets_landing_page/images/harga-img-3.svg') }}" alt="illustration art" />
            </figure>

            <div class="harga-content">
              <table id="" class="display">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis / Bahan</th>
                  <th>Ukuran</th>
                  <th>Harga</th>
                </tr>
                <tr>
                  <td rowspan="2">12</td>
                  <td rowspan="2">Vandel</td>
                  <td>Keramik</td>
                  <td>40 x 30cm</td>
                  <td>Rp. 40.000/pcs</td>
                </tr>
                <tr>
                  <td>Akrilik</td>
                  <td>20 x 15cm</td>
                  <td>Rp. 150.000/pcs</td>
                </tr>
                <tr>
                  <td rowspan="7">13</td>
                  <td rowspan="7">Sablon</td>
                  <td>DTF (Kain)</td>
                  <td>21 x 28cm</td>
                  <td>Rp. 30.000</td>
                </tr>
                <tr>
                  <td>DTF (Kain)</td>
                  <td>28 x 42cm</td>
                  <td>Rp. 45.000</td>
                </tr>
                <tr>
                  <td>DTF (Kain)</td>
                  <td>58 x 50cm</td>
                  <td>Rp. 80.000</td>
                </tr>
                <tr>
                  <td>DTF (Kain)</td>
                  <td>58 x 100cm</td>
                  <td>Rp. 115.000</td>
                </tr>
                <tr>
                  <td>Cup (Plastik)</td>
                  <td>-</td>
                  <td>Rp. 400/pcs</td>
                </tr>
                <tr>
                  <td>Label (Pita)</td>
                  <td>1.5 - 3cm</td>
                  <td>Rp. 35.000/rol</td>
                </tr>
                <tr>
                  <td>Souvenir</td>
                  <td>-</td>
                  <td>Rp. 1.500/pcs</td>
                </tr>
                <tr>
                  <td rowspan="2">14</td>
                  <td rowspan="2">Pin / Gantungan Kunci</td>
                  <td>-</td>
                  <td>4cm</td>
                  <td>Rp. 4.000/pcs</td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>6cm</td>
                  <td>Rp. 6.000/pcs</td>
                </tr>
                <tr>
                  <td rowspan="3">15</td>
                  <td rowspan="3">Buku Yasin</td>
                  <td>Biasa</td>
                  <td>-</td>
                  <td>Rp. 7.000/pcs</td>
                </tr>
                <tr>
                  <td>Art Paper</td>
                  <td>-</td>
                  <td>Rp. 12.000/pcs</td>
                </tr>
                <tr>
                  <td>Bludru</td>
                  <td>-</td>
                  <td>Rp. 35.000/pcs</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Stempel</td>
                  <td>Biasa</td>
                  <td>-</td>
                  <td>Rp. 40.000/pcs</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>

      <!--
        - PRODUCT
      -->

      <section class="product" id="product">
        <div class="container">
          <h2 class="h2 section-title">Produk Kami</h2>

          <p class="section-text">Beberapa produk yang kami kerjakan selama ini.</p>

          <ul class="product-list">
            <li>
              <div class="product-card">
                <figure class="product-banner">
                  <img src="{{ asset('assets_landing_page/images/blog-banner-1.jpg') }}" alt="Best Traveling Place" />
                </figure>

                <h3 class="product-title">Sticker</h3>
                <hr />

                <p class="product-text">Integer ante arcu accumsan a consectetuer eget posuere mauris praesent
                  adipiscing phasellus ullamcorper ipsum rutrum punc.</p>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <!--
    - FOOTER
  -->

  <footer>
    <!-- <div class="footer-top">
        <div class="container">
          <div class="footer-brand">
            <a href="#" class="logo">
              <img src="./assets/images/logo-footer.svg" alt="Landio logo" />
            </a>

            <p class="footer-text">Cras ultricies mi eu turpis sit hendrerit fringilla vestibulum ante ipsum primis in faucibus ultrices posuere cubilia.</p>

            <ul class="social-list">
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
            </ul>
          </div>

          <div class="footer-link-box">
            <ul class="footer-list">
              <li>
                <p class="footer-item-title">ABOUT US</p>
              </li>

              <li>
                <a href="#" class="footer-link">Works</a>
              </li>

              <li>
                <a href="#" class="footer-link">Strategy</a>
              </li>

              <li>
                <a href="#" class="footer-link">Releases</a>
              </li>

              <li>
                <a href="#" class="footer-link">Press</a>
              </li>

              <li>
                <a href="#" class="footer-link">Mission</a>
              </li>
            </ul>

            <ul class="footer-list">
              <li>
                <p class="footer-item-title">CUSTOMERS</p>
              </li>

              <li>
                <a href="#" class="footer-link">Tranding</a>
              </li>

              <li>
                <a href="#" class="footer-link">Popular</a>
              </li>

              <li>
                <a href="#" class="footer-link">Customers</a>
              </li>

              <li>
                <a href="#" class="footer-link">harga</a>
              </li>
            </ul>

            <ul class="footer-list">
              <li>
                <p class="footer-item-title">SUPPORT</p>
              </li>

              <li>
                <a href="#" class="footer-link">Developers</a>
              </li>

              <li>
                <a href="#" class="footer-link">Support</a>
              </li>

              <li>
                <a href="#" class="footer-link">Customer Service</a>
              </li>

              <li>
                <a href="#" class="footer-link">Get Started</a>
              </li>

              <li>
                <a href="#" class="footer-link">Guide</a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">&copy; 2022 <a href=""></a> All Right Reserved</p>
      </div>
    </div>
  </footer>

  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Datatables-->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  <script>
    for (let index = 0; index < 3; index++) {
      $(document).ready(function() {
        $('table.display').DataTable();
      });
    }
  </script>
</body>

</html>
