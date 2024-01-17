</div>
<style>
  /* CSS untuk kontainer halaman */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  /* Kontainer utama */
  .main-container {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    position: relative;
  }

  /* Konten utama */
  .content {
    flex: 1;
    /* Tambahkan padding jika diperlukan untuk memisahkan konten dengan footer */
    padding-bottom: 50px; /* Ubah angka sesuai dengan tinggi footer */
  }

  /* Footer */
  footer {
    background-color: #f8f9fa;
    text-align: center;
    padding: 10px;
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
  }
</style>

<!-- Struktur HTML -->
<div class="main-container">
  <div class="content">
    <!-- Konten utama Anda di sini -->
  </div>

  <footer class="bg-primary text-white pt-2 pb-2 mt-3">
    PN 2023 - <?=date('Y')?> | Pengadilan Negeri Tondano
  </footer>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  </body>
</html>