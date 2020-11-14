<section class="stock">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center judul-stock">
                <H1>STOCK BARANG</H1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 justify-content-center mt-5">
                <form action="" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control float-right" placeholder="Cari Data Barang..." name="keyword" style="height: 50px;">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-right">
            <div class="col m-2 mt-5">
                <button type="button" class="btn btn-primary">SIMPAN</button>
                <a href="<?php echo base_url('Dashboard') ?>">
                    <button type="button" class="btn btn-danger">EXIT</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="data-barang">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body  stock-barang">
                        <table border="1" class="table table2">
                            <thead>
                                <tr>
                                    <th rowspan="2">Barcode</th>
                                    <th rowspan="2">Nama Barang</th>
                                    <th rowspan="2">Stock Sekarang</th>
                                    <th rowspan="2">Harga Beli</th>
                                    <th rowspan="2">Harga Jual</th>
                                    <th rowspan="2">Catagory</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tb_barang as $barang) : ?>
                                    <tr>
                                        <td><?php echo $barang['barcode']; ?></td>
                                        <td><?php echo $barang['nama_barang']; ?></td>
                                        <td><?php echo $barang['stock_awal']; ?></td>
                                        <td><?php echo number_format($barang['harga_beli']); ?></td>
                                        <td><?php echo number_format($barang['harga_jual']); ?></td>
                                        <td><?php echo $barang['catagory']; ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>