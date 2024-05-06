<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha384-XgFllFTUJDVF7aOVOiZLSGtASqjVAU8hVwnZ6RxYzmOLU/vGGnlq8GexXIMgmDJo" crossorigin="anonymous">
  <style>
    .navbar-brand img {
      margin-right: 10px;
      /* Menyesuaikan margin logo agar lebih ke kiri */
    }

    .navbar-nav {
      margin-left: auto;
      /* Menggeser menu ke kanan */
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-transparant navigation">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="image/logo-black.png" width="120" height="120" class="d-inline-block align-top" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reservasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="image/profile.png" width="40" height="40" style="border-radius: 20px; border: 1px solid;" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/login') }}">Masuk</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="section-1">
    <div class="s1-div-1">
      <div class="s1-div-2">
        <div class="s1-div-3">
          Kelezatan Pilihan di <br>
          <span style="color: rgba(85, 91, 187, 1)">Mono Cafe</span>
        </div>
        <div class="s1-div-4">
          Nikmati Menu Andalan Kami dari Minuman Pilihan, Snack Menggiurkan,
          Hingga Hidangan Berat Menggoda. Reservasi Meja dan Rasakan Sensasi
          Kuliner Terbaik di Mono Cafe!
        </div>
        <button class="s1-div-5">Reservasi Sekarang</button>
      </div>
      <img src="image/hero-1.png" width="500" height="500" alt="Hero Image" class="img-1" />
    </div>
  </div>

  <div class="section-2">
    <div class="s2-div-2">Menu Terpopuler !!</div>
    <div class="s2-div-3">
      Rasakan kelezatan terpopuler dari Mono Cafe dengan sensasi tak <br>
      tertandingkan.
    </div>
    <div class="s2-div-4">
      <div class="s2-div-5">
        <img src="image/terpopuler-1.png" width="200" height="250" alt="Food 1" class="img-2" />
        <div class="s2-div-6">Garlic Bread Delight</div>
        <div class="s2-div-7">
          Diselimuti dengan campuran mentega bawang yang harum dan taburan keju parmesan yang melengkapi cita rasa
          lezatnya.
        </div>
      </div>
      <div class="s2-div-8">
        <img src="image/terpopuler-2.png" width="200" height="250" alt="Food 2" class="img-2" />
        <div class="s2-div-9">Creamy Chill Coffee</div>
        <div class="s2-div-10">
          Kesegaran kopi dingin kami yang lembut dan kaya rasa, dicampur dengan susu yang creamy.
        </div>
      </div>
      <div class="s2-div-11">
        <img src="image/terpopuler-3.png" width="200" height="250" alt="Food 3" class="img-2" />
        <div class="s2-div-12">Mentai Beef BBQ Rice</div>
        <div class="s2-div-13">
          Daging sapi panggang dengan saus mentai lezat yang kaya rasa, disajikan di atas nasi putih yang lembut.
        </div>
      </div>
    </div>

  </div>
  <div class="section-3">
    <div class="s3-div-2">
      <br>
      <div class="s3-div-5">Fasilitas Mono Cafe</div>
      <div class="s3-div-3">
        <img src="image/Decorative-Image-1.png" width="251" height="258" alt="Food 4" class="s3-img" />
        <div class="s3-div-4">
          <div class="s3-div-6">
            <div class="s3-div-7">
              Wifi Gratis
              <br />
              Mushola
              <br />
              Restroom
              <br />
            </div>
            <div class="s3-div-8">
              Parkir Luas
              <br />
              Meeting Room
              <br />
              Ruang Indoor dan Outdoor
            </div>
            <div class="s3-div-10">
               Reservasi Online
              <br />
              Pilihan Menu Beragam
              <br />
              Sudut Baca Buku
            </div>
          </div>
        </div>
        <img src="image/Decorative-Image-2.png" width="251" height="258" alt="Food 5" class="s3-img-3 " />
      </div>
    </div>
    <div class="s3-div-11">
      <div class="slider">
        <div class="slides">
            <img src="image/slider-1.png" alt="Slide 1" class="slide">
            <img src="image/slider-2.png" alt="Slide 2" class="slide">
            <img src="image/slider-3.png" alt="Slide 3" class="slide">
            <img src="image/slider-4.png" alt="Slide 4" class="slide">
            <img src="image/slider-5.png" alt="Slide 5" class="slide">
            <img src="image/slider-6.png" alt="Slide 6" class="slide">
          </div>

      </div>
      <div class="s3-div-12">
        <span style="font-weight: 600">Selamat datang di Mono Cafe!</span>
        <br />
        <br />
        Kami adalah destinasi yang mengutamakan kenyamanan dan kenikmatan kuliner.
        Di Mono Cafe, kami menawarkan suasana yang cozy dan nyaman, cocok untuk
        bersantai sendiri atau berkumpul dengan orang-orang terkasih.
        <br />
        <br />
        Ruang kami didesain dengan teliti untuk menciptakan tempat yang
        menginspirasi dan menyenangkan. Dari furnitur yang nyaman hingga dekorasi
        yang menawan, setiap sudut Mono Cafe menghadirkan suasana yang mengundang
        dan menyenangkan.
        <br />
        <br />
        Nikmati berbagai pilihan snack dan makanan setiap hari, mulai dari roti
        gurih hingga berbagai macam olahan nasi yang lezat. Kami juga menyediakan
        kopi berkualitas tinggi dan minuman non kopi lainnya untuk menemani
        pengalaman bersantap Anda. Dari kopi spesial hingga minuman segar, semua
        ada di Mono Cafe untuk memuaskan berbagai selera.
        <br />
        <br />
        Staf kami yang ramah dan penuh perhatian siap memberikan layanan terbaik,
        sehingga setiap kunjungan ke Mono Cafe menjadi pengalaman kuliner yang
        istimewa dan tak terlupakan.
      </div>
    </div>
  </div>
  <div class="section-4">
    <div class="s4-div-2">
      <div class="s4-div-3">
        <div class="s4-div-4">
          <div class="s4-div-5">Temukan Kami Di Sini</div>
          <div class="s4-div-6">
            Alamat: Jalan Merdeka No. 123, Semarang, Jawa Tengah 12345
          </div>
          <div class="s4-div-7">Jam Operasional Mono Cafe</div>
          <div class="s4-div-8">
            Senin - Jumat: 08.00 - 22.00 WIB - Sabtu - Minggu: 09.00 - 23.00 WIB
          </div>
        </div>
        <div class="s4-div-9">
          Kami dengan senang hati menantikan kunjungan Anda untuk merasakan
          pengalaman menyantap sajian luar biasa di Mono Cafe
        </div>
      </div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.08130183794!2d110.51503019726562!3d-6.5960092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f0184a0f599%3A0xf60b34b26a86d226!2sMONOKOPI!5e0!3m2!1sid!2sid!4v1714557694439!5m2!1sid!2sid"
        width="850" height="560" style="border:30cm;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="footer-wrap">
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-left">
          <img src="image/logo-white.png"  alt="Logo" class="footer-logo" />
        </div>
        <div class="menu">
          <ul style="list-style-type: none;">
            <li>beranda</li>
            <li>menu</li>
            <li>reservasi</li>
            <li>tentang kami</li>
            <li>kontak</li>
          </ul>
        </div>
        <div class="contact">
          <ul style="list-style-type: none; font-size: 18px;">
            <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <path fill="white"
                  d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4l217.6 163.2c11.4 8.5 27 8.5 38.4 0l217.6-163.2c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48zM0 176v208c0 35.3 28.7 64 64 64h384c35.3 0 64-28.7 64-64V176L294.4 339.2a63.9 63.9 0 0 1-76.8 0z" />
              </svg> monocafeservices@gmail.com</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                  <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01" />
                </g>
              </svg></i> @monocafe</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="white"
                  d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
              </svg> 0857269412398</li>
          </ul>
        </div>

      </div>
    </footer>
    <p class="footer-text">© 2024 Mono Cafe. Hak Cipta Dilindungi Undang- Undang.</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const slideWidth = slides[0].offsetWidth; // Mendapatkan lebar slide

    function showSlide(index) {
      slides.forEach((slide, i) => {
        if (i === index) {
          slide.style.opacity = '1'; // Tampilkan slide yang dipilih
        } else {
          slide.style.opacity = '0'; // Sembunyikan slide yang tidak dipilih
        }
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      const newPosition = -currentSlide * slideWidth;
      document.querySelector('.slides').style.transform = `translateX(${newPosition}px)`; // Geser slider ke samping
      showSlide(currentSlide);
    }

    setInterval(nextSlide, 3000); // Ubah slide setiap 3 detik (3000 milidetik)
  </script>

</body>

</html>
