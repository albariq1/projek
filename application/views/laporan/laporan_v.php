<section class="backround-laporan1">
    <section class="laporan-keuangan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>LAPORAN KEUANGAN</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <h5>Laporan Harian : <?php echo date('d-m-Y') ?></h5>
                </div>
            </div>
        </div>
    </section>
    <section class="warna1">
        <div class="container">
            <div class="row justify-content-start ">

                <div class="row justify-content-start">
                    <div class="col-lg-2 btn-4 mr-5">
                        <input type="date" id="date" name="date">
                    </div>
                    <div class="col-lg-2 ml-5 ">
                        <button type="submit" class="btn btn-primary btn-1">Lihat Laporan</button>
                    </div>
                    <form action="<?php echo base_url('Laporan/bulan') ?>" method="POST">
                        <div class="col-lg-2 ml-5">
                            <button type="submit" class="btn btn-primary btn-3" name="bulan">Bulan Ini</button>
                        </div>
                    </form>
                </div>

                <form action="<?php echo base_url() ?>Laporan/karyawan" method="POST">
                    <div class="row justify-content-start ">
                        <div class="col-lg-2 ">
                            <!-- <select class="custom-select" name="nama_karyawan">
                            <option selected>Nama karyawan</option>
                            <?php foreach ($karyawan as $kry) : ?>
                                <option value="<?php echo $kry['id'] ?>"><?php echo $kry['Nama'] ?> <?php echo $kry['level'] ?></option>
                            <?php endforeach; ?>
                        </select> -->
                            <button type="submit" class="btn btn-primary btn-3" name="bulan">Karyawan</button>
                        </div>
                        <div class="col-lg-2 ml-5">
                            <a href="<?php echo base_url('Dashboard') ?>">
                                <button type="button" class="btn btn-danger btn-ex">Exit</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <section class="isi-laporan">
        <div class="row">
            <div class="col">
                <div class="card-body  laporan-dalam">
                    <table class="table table3 " border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Modal</th>
                                <th>Laba</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jumlah as $jml) : ?>
                                <tr>
                                    <td>2</td>
                                    <?php if ($tgl == null) { ?>
                                        <td><?php echo date('d-m-Y') ?></td>
                                    <?php } else { ?>
                                        <td><?php echo date('d-m-Y', strtotime($tgl)) ?></td>
                                    <?php } ?>
                                    <td>Rp.<?php echo number_format($jml['total_belanja']) ?></td>
                                    <?php foreach ($modal as $mdl) : ?>
                                        <td>Rp.<?php echo number_format($mdl['harga_modal']) ?></td>
                                    <?php endforeach; ?>
                                    <td>Rp.<?php echo number_format($jml['total_belanja'] - $mdl['harga_modal']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>