<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo_pp.png">
    <title><?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="node_modules/selectric/public/selectric.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/components.css" />

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/stisla.js"></script>

	<!-- JS Libraies -->

	<!-- Template JS File -->
	<script src="<?= base_url(); ?>assets/js/scripts.js"></script>
	<script src="<?= base_url(); ?>assets/js/custom.js"></script>
</head>
        <div id="app">
        <section class="section">
          <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
              <div class="p-4 m-3">
              <img src="https://smktelkom-pwt.sch.id/wp-content/uploads/2019/02/logo-telkom-schools.png" alt="logo" width="80" class="shadow-light mb-5 mt-2">
              <h4 class="text-dark font-weight-normal">Welcome to<span class="font-weight-bold"> E-Buku Saku</span></h4>
              <p class="text-muted">Sistem Pencatatan Aktivitas Pelanggaran Siswa</p>
          <form method="POST" action="" class="needs-validation" novalidate="">
                <input type="hidden" name="_token" value="yQnyh4r2oOF5rW9wTMkF5XHYuKmnDgdloAI4XpOd"> <div class="form-group">
                  <label for="email">Email</label>
				  <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" />
				  <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

				  <div class="invalid-feedback">
              Masukan email dengan benar!
            </div>
            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
              </div>
            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
            <div class="invalid-feedback">
              Mohon isi password anda!
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
              Login
            </button>
          </div>
		  <center> Belum memiliki akun ? <a href="http://localhost/pelanggaransiswa/Auth/registrasi">Daftar</a>
        </form>
      </div>
    </div>
    <div class="simple-footer">
      Copyright &copy; Buku Saku Siswa 2023
      <br><center><p>by <a href='https://adityaekasantoso.my.id/' title='adityaekasantoso.my.id' target='_blank'>Aditya Eka Santoso</a></p></center>
    <div class="text-center mt-5 text-small">
    </div>
  </div>
</div>
<div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="https://foto.data.kemdikbud.go.id/getImage/20301902/16.jpg">
  <div class="absolute-bottom-left index-2">
  <div class="text-light p-5 pb-2">
  </div>
</div>
</section>
</div>
      <!-- General JS Scripts -->
      <script src="../assets/modules/jquery.min.js"></script>
      <script src="../assets/modules/popper.js"></script>
      <script src="../assets/modules/tooltip.js"></script>
      <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
      <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
      <script src="../assets/modules/moment.min.js"></script>
      <script src="../assets/js/stisla.js"></script>

      <!-- Template JS File -->
      <script src="../assets/js/scripts.js"></script>
      <script src="../assets/js/custom.js"></script>
      <!-- Sweet Alert -->
      <script src="../assets/modules/sweetalert/sweetalert.min.js"></script>
      <script src="../assets/js/page/modules-sweetalert.js"></script>
</body>

</html>

