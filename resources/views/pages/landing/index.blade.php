<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Id Digital - Landing page</title>

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
            <a href="#hero" class="navbar-link">Beranda</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">Tentang</a>
          </li>

          <li>
            <a href="{{ route('harga') }}" class="navbar-link">Harga</a>
          </li>

          <li>
            <a href="#product" class="navbar-link">Produk</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Kontak</a>
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
        - HERO
      -->

      <section class="hero" id="hero">
        <div class="container">
          <div class="hero-content">
            <h1 class="h1 hero-title">Id Digital Printing</h1>

            <p class="hero-text"><strong> Solusi Cetak Sesuai Dengan Yang Anda Inginkan.</strong> Pengerjaan Cepat Tanpa
              Minimal Order.</p>
          </div>

          <figure class="hero-banner">
            <img src="{{ asset('assets_landing_page/images/hero-banner.png') }}" alt="Hero image" />
          </figure>
        </div>
      </section>

      <!--
        - ABOUT
      -->

      <section class="about" id="about">
        <div class="container">
          <div class="about-content">
            <div class="about-icon">
              <ion-icon name="cube"></ion-icon>
            </div>

            <h2 class="h2 about-title">Mengapa Memilih Kami ?</h2>

            <p class="about-text">Banyak fitur dan keunggulan jasa kami daripada jasa yang ada diluar sana. Dapatkan
              harga terjangkau dengan kualitas yang berkualitas.</p>
          </div>

          <ul class="about-list">
            <li>
              <div class="about-card">
                <div class="card-icon">
                  <ion-icon name="thumbs-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Jasa terpercaya</h3>

                <p class="card-text">Jasa printing yang sudah didirikan sejak tahun 2015 dan memiliki lebih dari 1jt
                  pelanggan.</p>
              </div>
            </li>

            <li>
              <div class="about-card">
                <div class="card-icon">
                  <ion-icon name="cash"></ion-icon>
                </div>

                <h3 class="h3 card-title">Harga Terjangkau</h3>

                <p class="card-text">Harga yang tidak terlalu tinggi sesuai dengan produk yang dihasilkan.</p>
              </div>
            </li>

            <li>
              <div class="about-card">
                <div class="card-icon">
                  <ion-icon name="bag"></ion-icon>
                </div>

                <h3 class="h3 card-title">Produk Berkualitas</h3>

                <p class="card-text">Menerima berbagai produk dan tentu memiliki kualitas diatas rata rata.</p>
              </div>
            </li>

            <li>
              <div class="about-card">
                <div class="card-icon">
                  <ion-icon name="cart"></ion-icon>
                </div>

                <h3 class="h3 card-title">Minimum Order</h3>

                <p class="card-text">Kami melayani tanpa menggunakan minimum order.</p>
              </div>
            </li>
          </ul>
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
                  <img src="{{ asset('assets_landing_page/images/blog-banner-1.jp') }}g" alt="Best Traveling Place" />
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

      <!--
        - CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">
          <h2 class="h2 section-title">Kontak</h2>

          <p class="section-text">Silakan mengirim kritik saran di form yang sudah kami sediakan.</p>

          <div class="contact-wrapper">
            <form action="" class="contact-form">
              <div class="wrapper-flex">
                <div class="input-wrapper">
                  <label for="name">Nama</label>

                  <input type="text" name="name" id="name" required placeholder="Enter Your Name"
                    class="input-field" />
                </div>

                <div class="input-wrapper">
                  <label for="emai">Email</label>

                  <input type="text" name="email" id="email" required placeholder="Enter Your Email"
                    class="input-field" />
                </div>
              </div>

              <label for="message">Pesan</label>

              <textarea name="message" id="message" required placeholder="Type Your Message" class="input-field"></textarea>

              <button type="submit" class="btn btn-primary">
                <span>Send Message</span>

                <ion-icon name="paper-plane-outline"></ion-icon>
              </button>
            </form>

            <ul class="contact-list">
              <li>
                <a href="mailto:support@website.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>: support@website.com</span>
                </a>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="globe-outline"></ion-icon>

                  <span>: www.website.com</span>
                </a>
              </li>

              <li>
                <a href="tel:+0011234567890" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>

                  <span>: (+001) 123 456 7890</span>
                </a>
              </li>

              <li>
                <div class="contact-link">
                  <ion-icon name="time-outline"></ion-icon>

                  <span>: 9:00 AM - 6:00 PM</span>
                </div>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>: 1644 Deer Ridge Drive Rochelle Park, NJ 07662</address>
                </a>
              </li>
            </ul>
          </div>
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
                <a href="#" class="footer-link">Features</a>
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
  <script src="{{ asset('assets_landing_page/js/script.js') }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
