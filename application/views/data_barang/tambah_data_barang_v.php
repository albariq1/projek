<section class="Data-barang1">
    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <div class="col-lg-12 justify-content-center text-center m-5">
                    <h1 style="color: white;">TAMBAH DATA BARANG</h1>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label for="Namabarang" class="col-sm-5 col-form-label nb" style="color:white;">Barcode</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="barcode" name="barcode">
                            <small class="form-text text-danger"><?php echo form_error('barcode') ?></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Namabarang" class="col-sm-5 col-form-label nb" style="color: white;">Nama barang</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                            <small class="form-text text-danger"><?php echo form_error('nama_barang') ?></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Namabarang" class="col-sm-5 col-form-label nb" style="color:white;">Catagory</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="catagory" name="catagory" name="catagory">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label for="Namabarang" class="col-sm-5 col-form-label nb" style="color:white;">Stock</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="stock" name="stock">
                            <small class="form-text text-danger"><?php echo form_error('stock') ?></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Namabarang" class="col-sm-5 col-form-label nb" style="color:white;">Harga Beli</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="harga_beli" name="harga_beli">
                            <small class="form-text text-danger"><?php echo form_error('harga_beli') ?></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Namabarang" class="col-sm-5 col-form-label nb" style="color:white;">Harga Jual</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="harga_jual" name="harga_jual">
                            <small class="form-text text-danger"><?php echo form_error('harga_jual') ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 justify-content-end">
                    <a href="<?php echo base_url('Data_barang') ?>">
                        <button type="button" class="btn btn-danger btn-brng-2 float-right" style="width: 200px; height :50px">Exit</button>
                    </a>
                    <button type="submit" class="btn btn-primary btn-brng-1 float-right" name="tambah" id="tambah" style="width:200px;height :50px">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</section>