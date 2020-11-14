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
                <div class="row justify-content-start ">
                    <form action="<?php echo base_url('Laporan') ?>" method="POST">
                        <div class="col-lg-12 m-2">
                            <button type="submit" class="btn btn-primary btn-3" name="bulan">Bulan Ini</button>
                        </div>
                    </form>
                </div>

                <form action="<?php echo base_url() ?>Laporan/karyawan" method="POST">
                    <div class="row justify-content-start ">
                        <div class="col-lg-5 m-2 ml-5 ">
                            <button type="submit" class="btn btn-primary btn-3" name="bulan">Karyawan</button>
                        </div>
                        <div class="col-lg-2 m-2 ml-3">
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
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td><?php echo date('d-m-Y') ?></td>
                                <td>Rp.<?php echo number_format($total_bulan[0]['total_belanja']) ?></td>
                                <td>Rp.<?php echo number_format($modal_bulan[0]['harga_modal']) ?></td>
                                <td>Rp.<?php echo number_format($total_bulan[0]['total_belanja'] - $modal_bulan[0]['harga_modal']) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>