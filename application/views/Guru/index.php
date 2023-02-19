            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= base_url('Guru/Dashboard'); ?>">E-Buku Saku</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('Guru/Dashboard'); ?>">PS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Guru</li>
                        <li class="nav-item active">
                            <a href="<?= base_url('Guru/Dashboard'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Master</li>
                        <li class="nav-item">
                            <a href="<?= base_url('Guru/Pelanggar'); ?>" class="nav-link"><i class="fas fa-user-tie"></i> <span>Pelanggar</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Guru/Jenispelanggaran'); ?>"><i class="fas fa-exclamation"></i>
                                <span>Jenis Pelanggaran</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Guru/Siswa'); ?>"><i class="fas fa-users"></i> <span>Siswa</span></a>
                        </li>
                    </ul>

                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-info">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Pelanggar Hari Ini</h4>
                                    </div>
                                    <div class="card-body">
                                        <?= $countPelanggarHariIni; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-exclamation"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Jenis Pelanggaran</h4>
                                    </div>
                                    <div class="card-body">
                                        <?= $countJenisPelanggaran; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-warning">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Kelas</h4>
                                    </div>
                                    <div class="card-body">
                                        <?= $countKelas ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-success">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Siswa</h4>
                                    </div>
                                    <div class="card-body">
                                        <?= $countSiswa; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 1 -->
                    <div class="row">
                        <!-- Laporan Pelanggar -->
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Laporan Pelanggar Terbaru Oleh Anda</h4>
                                    <div class="card-header-action">
                                        <a href="<?= base_url('Guru/Pelanggar') ?>" class="btn btn-warning">View All</a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <?php if ($rowPelanggar == 0) : ?>
                                        <div class="empty-state" data-height="500">
                                            <img class="img-fluid" src="<?= base_url(''); ?>/assets/img/drawkit/drawkit-nature-man-colour.svg" alt="image">
                                            <h2 class="mt-0">Sepertinya kamu belum pernah lapor</h2>
                                            <p class="lead">
                                                Yuk mulai lapor pelanggar sekarang agar tercatat di sistem
                                            </p>
                                            <a href="<?= base_url('Guru/Pelanggar/tambah') ?>" class="btn btn-warning">Lapor Sekarang</a>
                                        </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="table-responsive" style="max-height: 375px;">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th width="20%">Siswa</th>
                                            <th width="10%">Kelas</th>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Points</th>
                                            <th width="15%">Tanggal Melanggar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($latestReportById as $lri) : ?>
                                            <tr>
                                                <td>
                                                    <?= $lri['nama']; ?>
                                                </td>
                                                <td>
                                                    <?= $lri['kelas']; ?>
                                                </td>
                                                <td>
                                                    <?= $lri['jenis_pelanggaran']; ?>
                                                </td>
                                                <td>
                                                    <?= $lri['point']; ?>
                                                </td>
                                                <td>
                                                    <?= date('d M Y', $lri['tgl_melanggar']); ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Aktifitas Pelaporan Dari Guru</h4>
                                </div>
                                <div class="card-body" style=" height: 375px; overflow-y: scroll;">
                                    <?php if ($countPelanggar != 0) : ?>
                                        <ul class="list-unstyled list-unstyled-border">
                                            <?php foreach ($latestReportByAll as $lr) : ?>
                                                <li class="media">
                                                    <img class="mr-3 rounded-circle" width="50" src="https://ui-avatars.com/api/?background=3ABBF4&length=1&bold=true&color=fff&size=128&name=<?= $lr['nama_user']; ?>" alt="avatar" />
                                                    <div class="media-body">
                                                        <div class="float-right text-primary">
                                                            <?php
                                                            $now = date('j M');
                                                            $yesterday = date('j M', strtotime("-1 days"));
                                                            $userDate = date('j M', $lr['tgl_melanggar']);
                                                            if ($userDate == $now) {
                                                                $userDate = 'Hari ini';
                                                            } else if ($userDate == $yesterday) {
                                                                $userDate = 'Kemarin';
                                                            } else {
                                                                $userDate = date('j M', $lr['tgl_melanggar']);
                                                            }
                                                            $nama = '';
                                                            if ($lr['nama_user'] == $user['nama_user']) {
                                                                $nama = 'Anda';
                                                            } else {
                                                                $nama = $lr['nama_user'];
                                                            }

                                                            ?>

                                                            <?= $userDate; ?>
                                                        </div>
                                                        <div class="media-title"><?= $nama ?></div>
                                                        <span class="text-small text-muted">Siswa dengan nama
                                                            <span class="text-dark"><?= $lr['nama']; ?></span>, Dari kelas
                                                            <span class="text-dark"> <?= $lr['kelas']; ?></span> Melakukan
                                                            pelanggaran yaitu <?= $lr['jenis_pelanggaran']; ?></span>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else : ?>
                                        <div class="empty-state" data-height="300">
                                            <div class="empty-state-icon bg-warning">
                                                <i class="fas fa-comment-slash"></i>
                                            </div>
                                            <h2>Belum ada aktifitas</h2>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Jenis Pelanggaran Yang Sering Terjadi</h4>
                                </div>
                                <div class="card-body p-0">
                                    <?php if ($noMostCase == 0) : ?>
                                        <div class="empty-state" data-height="375">
                                            <img class="img-fluid" src="<?= base_url(''); ?>/assets/img/drawkit/drawkit-nature-man-colour.svg" alt="image">
                                            <h4 class="mt-0">Sepertinya belum ada kasus yang terjadi</h4>
                                        </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="table-responsive" style="max-height: 375px;">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Jenis Pelanggaran</th>
                                            <th width="20%">Jumlah Kasus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($mostCase as $mc) : ?>
                                            <tr>
                                                <td>
                                                    <?= $mc['jenis_pelanggaran']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?= $mc['counter']; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
            </div>
            </div>
            </div>
            </section>
            </div>