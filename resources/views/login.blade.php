<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mono Cafe</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>

<body>
  <div class="container">
    <!-- left side -->
    <div class="left">
      <img src="image/logo-white.png" alt="Logo" />
      <div class="content" style="direction: rtl;">
        <h2 class="welcome">Selamat Datang <br> di Mono Cafe</h2>
        <p class="desc">Daftarkan diri Anda untuk mendapatkan pelayanan terbaik, akses reservasi online, dan memesan menu
          dari Mono Cafe. Bergabunglah dengan kami untuk menikmati berbagai fasilitas yang kami tawarkan
        </p>
      </div>
    </div>
    <!-- right side -->
    <div class="right">
      <h2 class="create">Buat Akun</h2>
      <!-- form register -->
      <form action="" class="register-account">
        <input type="text" class="nama" placeholder="Masukkan Nama Anda">
        <input type="email" placeholder="Masukkan Email atau No. Telpon Anda">
        <input type="password" placeholder="Masukkan Kata Sandi">
        <input type="password" class="konfirmasi" placeholder="Konfirmasi Kata Sandi">
        <a href="{{ url('/') }}" class="button">Daftar</a>
      </form>
      <!-- form login -->
      <form action="" class="login-account">
        <input type="text" placeholder="Masukkan Email atau No. Telpon Anda">
        <input type="password" placeholder="Masukkan Kata Sandi">
        <a href="{{ url('/') }}" class="button">Masuk</a>
      </form>
      <p class="penawaran">atau daftar dengan</p>
      <a href="#">
        <img src="image/google-icon.png" alt="Google Logo">
      </a>
      <p class="info">Sudah punya akun? <a style="color: #E47146;" class="masuk" href="#">Masuk</a></p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".login-account").hide(); // Sembunyikan form pendaftaran
      $(document).on("click", ".masuk", function () {
        $(".desc").text("Masuk untuk akses reservasi online dan memesan menu"); // Mengubah judul
        $(".welcome").html("Selamat Datang Kembali <br> di Mono Cafe"); // Mengubah judul
        $(".create").text("Masuk"); // Mengubah judul
        $(".create").after("<p style='width: 55%;'>Untuk pengalaman lebih baik di Mono Cafe.</p>");
        $("[style*='color: #E47146']").css("color", "#555BBD"); // Mengubah warna teks
        $("[style*='color: #E47146']").css("background-color", "#555BBD"); // Mengubah warna latar belakang
        $("body, .left").css("background-color", "#555BBD"); // Mengubah warna background body dan .left
        $(".penawaran").html("atau masuk dengan");
        $(".info").html("Belum punya akun? <a style='color: #555BBD;' class='daftar' href='#'>Daftar</a>");
        $(this).text("Daftar"); // Mengubah teks tautan
        $(".masuk").addClass("daftar").removeClass("masuk");
        $(".register-account").hide(); // Tampilkan form pendaftaran
        $(".login-account").show();
      });

      $(document).on("click", ".daftar", function () {
        $(".desc").text("Daftarkan diri Anda untuk mendapatkan pelayanan terbaik, akses reservasi online, dan memesan menu dari Mono Cafe. Bergabunglah dengan kami untuk menikmati berbagai fasilitas yang kami tawarkan"); // Mengubah judul
        $(".welcome").html("Selamat Datang <br> di Mono Cafe"); // Mengubah judul
        $(".create").text("Buat Akun"); // Mengembalikan judul ke semula
        $(".daftar").addClass("masuk").removeClass("daftar"); // Ubah kelas menjadi "masuk"
        $(".create").next().remove(); // Menghapus elemen <p> yang ditambahkan sebelumnya
        $("[style*='color: #555BBD']").css("color", "#E47146"); // Mengembalikan warna teks ke semula
        $("[style*='color: #555BBD']").css("background-color", ""); // Menghapus warna latar belakang
        $("body, .left").css("background-color", "#e47146"); // Mengembalikan warna background body dan .left
        $(".penawaran").html("atau daftar dengan"); // Mengembalikan teks "atau masuk dengan"
        $(".info").html("Sudah punya akun? <a style='color: #E47146;' class='masuk' href='#'>Masuk</a>"); // Mengembalikan teks info
        $(".register-account").show(); // Tampilkan form pendaftaran
        $(".login-account").hide(); // Sembunyikan form login
      });
    });
  </script>

</body>

</html>
