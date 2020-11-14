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
        <form action="<?php echo base_url('Laporan/Karyawan') ?>" method="POST">
            <div class="container">
                <div class="row justify-content-start ">
                    <div class="col-lg-2 mt-3">
                        <select class="custom-select" name="nama_karyawan">
                            <option selected>Nama karyawan</option>
                            <?php foreach ($karyawan as $kry) : ?>
                                <option value="<?php echo $kry['id'] ?>"><?php echo $kry['Nama'] ?> <?php echo $kry['level'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="btn btn-primary btn-3" name="bulan">Karyawan</button>
                    </div>
                    <div class="col-lg-2 ml-5 mt-2">
                        <a href="<?php echo base_url('Laporan') ?>">
                            <button type="button" class="btn btn-danger btn-ex">Exit</button>
                        </a>
                    </div>
                </div>
        </form>
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
                                <!-- <th>Tanggal</th> -->
                                <th>Total</th>
                                <th>Modal</th>
                                <th>Laba</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rp.<?php echo number_format($total_karyawan[0]['total_belanja']) ?></td>
                                <td>Rp.<?php echo number_format($modal_karyawan[0]['harga_modal']) ?></td>
                                <td>Rp.<?php echo number_format($total_karyawan[0]['total_belanja'] - $modal_karyawan[0]['harga_modal']) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>