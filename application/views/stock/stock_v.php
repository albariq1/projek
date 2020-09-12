<section class="stock">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center judul-stock">
                <H1>STOCK BARANG</H1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group row">
                    <label for="Namabarang" class="col-sm-2 col-form-label nb">Nama barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_bar">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Barcode" class="col-sm-2 col-form-label barcode">Barcode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_bar">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Namabarang" class="col-sm-2 col-form-label cat">Category</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-sm">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-right">
            <div class="col m-2">
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
                                    <th rowspan="2">Stock awal</th>
                                    <th rowspan="2">Harga Beli</th>
                                    <th rowspan="2">Harga Jual</th>
                                    <th colspan="2">Mutasi</th>
                                    <th rowspan="2">Catagory</th>
                                    <th rowspan="2">Stock akhir</th>
                                </tr>
                                <tr>
                                    <th>in</th>
                                    <th>out</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tb_barang as $barang) : ?>
                                    <tr>
                                        <td><?php echo $barang['barcode']; ?></td>
                                        <td><?php echo $barang['nama_barang']; ?></td>
                                        <td><?php echo $barang['stock_awal']; ?></td>
                                        <td><?php echo $barang['harga_beli']; ?></td>
                                        <td><?php echo $barang['harga_jual']; ?></td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>Makanan</td>
                                        <td>10</td>
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