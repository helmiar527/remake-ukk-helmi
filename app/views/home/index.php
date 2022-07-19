<section class="jumbotron">
  <div class="judul">
    <h1 class="display-4 fw-bold">Selamat datang di Peduli Kesehatan</h1>
    <p class="lead">
      Peduli Kesehatan adalah aplikasi yang dikembangkan untuk membantu masnyarakat dalam melakukan kegiatan di luar rumah, selain itu aplikasi ini dapat membantu instansi pemerintah dalam rangka memantau kesehatan masyarakat.
    </p>
    <hr class="my-4">
    <p>
      Daftar untuk memantau kesehatan anda dan menghindari penyakit yang tidak di inginkan.
    </p>
    <a class="btn btn-primary btn-lg" id="daftar2" href="#">Daftar</a>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,186.7C68.6,149,137,75,206,64C274.3,53,343,107,411,112C480,117,549,75,617,64C685.7,53,754,75,823,96C891.4,117,960,139,1029,138.7C1097.1,139,1166,117,1234,112C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>
<section id="tentang">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="text-center mb-3">Tentang</h1>
      <div class="col-4 text-center">
        <h4>Apa itu Peduli Kesehatan</h4>
        <p>
          Peduli Kesehatan adalah aplikasi yang dapat memantau kesehatan anda, aplikasi ini di desain dengan mudah sehingga tidak menyulitkan bagi masyarakat.
        </p>
      </div>
      <div class="col-4 text-center">
        <h4>Bagaimana cara menggunakannya</h4>
        <p>
          Anda cukup daftar dan masuk ke dalam aplikasi, anda bisa menambahkan informasi berupa rekaman kesehatan sebelum berpergian ke suatu tempat.
        </p>
      </div>
      <div class="col-4 text-center">
        <h4>Apa manfaat untuk kita</h4>
        <p>
          Mempermudah kita untuk mencatat status kesehatan selama kita berpergian, bisa memberi informasi kepada dokter jika mengalami sakit tanpa harus menjelaskan secara detail.
        </p>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9ec2ff" fill-opacity="1" d="M0,224L34.3,197.3C68.6,171,137,117,206,122.7C274.3,128,343,192,411,181.3C480,171,549,85,617,74.7C685.7,64,754,128,823,160C891.4,192,960,192,1029,208C1097.1,224,1166,256,1234,234.7C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>
<section id="feedback" class="feedback">
  <div class="container kontak">
    <div class="row text-center">
      <div class="col">
        <h2>Feedback</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show alert-berhasil-feedback d-none" role="alert">
          <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show alert-gagal-feedback d-none" role="alert">
          <strong>Maaf!</strong> Pesan anda gagal terkirim.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <form name="sendtodatabase" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan alamat email" required>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" name="pesan" rows="3" placeholder="Masukkan isi pesan" required maxlength="255" minlength="8"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-kirim-feedback" name="kirim">Kirim</button>
          <button class="btn btn-primary btn-loading-feedback d-none" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...
          </button>
        </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L34.3,181.3C68.6,203,137,245,206,250.7C274.3,256,343,224,411,186.7C480,149,549,107,617,117.3C685.7,128,754,192,823,218.7C891.4,245,960,235,1029,202.7C1097.1,171,1166,117,1234,117.3C1302.9,117,1371,171,1406,197.3L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>