 <section class="Data-barang1">
     <div class="container">
         <form action="" method="POST">
             <div class="row">
                 <div class="col-lg-12 justify-content-center text-center">
                     <h1>DATA BARANG</h1>
                     <?php if (validation_errors()) : ?>
                         <div class="alert alert-danger" role="alert">
                             <?php echo validation_errors(); ?>
                         </div>
                     <?php endif; ?>
                     <?php if ($this->session->flashdata('flash')) : ?>
                         <div class="alert alert-success alert-dismissible fade show" role="alert">
                             Data Barang <strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                     <?php endif; ?>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group row">
                         <label for="Namabarang" class="col-sm-5 col-form-label nb">Barcode</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" id="barcode" name="barcode">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="Namabarang" class="col-sm-5 col-form-label nb">Nama barang</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="Namabarang" class="col-sm-5 col-form-label nb">Catagory</label>
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
                         <label for="Namabarang" class="col-sm-5 col-form-label nb">Stock</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" id="stock" name="stock">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="Namabarang" class="col-sm-5 col-form-label nb">Harga Beli</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" id="harga_beli" name="harga_beli">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="Namabarang" class="col-sm-5 col-form-label nb">Harga Jual</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" id="harga_jual" name="harga_jual">
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col justify-content-end">
                     <a href="<?php echo base_url('master') ?>">
                         <button type="button" class="btn btn-danger btn-brng-2 float-right">Exit</button>
                     </a>
                     <button type="submit" class="btn btn-primary btn-brng-1 float-right" name="tambah" id="tambah">Simpan</button>
                     </a>
                 </div>
             </div>
         </form>
         <section class="data-barangg">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body  stock-barangg">
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
                                             <th rowspan="2">Action</th>
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
                                                 <td><a href="<?php echo base_url(); ?>data_barang/hapus/<?php echo $barang['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?')">hapus</a>
                                                     <a href="">ndao</a>
                                                 </td>
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
 </section>