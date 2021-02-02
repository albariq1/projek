 <section class="Data-barang1">
     <div class="container">
         <section class="data-barangg">
             <h1 class="text-center">DATA BARANG</h1>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-body text-center stock-barangg1">
                             <?php if (empty($tb_barang)) : ?>
                                 <div class="alert alert-danger" role="alert">
                                     data barang tidak di temukan.
                                 </div>
                             <?php endif; ?>
                             <div class="col-lg-6 mr-5 mt-3">
                                 <form action="" method="POST">
                                     <div class="input-group">
                                         <input type="text" class="form-control" placeholder="Cari Data Barang..." name="keyword">
                                         <div class="input-group-append">
                                             <button class="btn btn-primary" type="submit">Cari</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                             <div class="row">
                                 <a href="<?php echo base_url(); ?>data_barang/tambah">
                                     <button type="button" class="btn btn-primary mb-5 float-right mr-5 mt-3">tambah Data</button>
                                 </a>
                                 <a href="<?php echo base_url(); ?>master">
                                     <button type="button" class="btn btn-danger mb-5 float-right mr-5 mt-3">Exit</button>
                                 </a>
                                 <?php if ($this->session->flashdata('flash')) : ?>
                                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                                         Data Barang <strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                 <?php endif; ?>
                             </div>
                             <table border="3" class="table table2">
                                 <thead>
                                     <tr>
                                         <th rowspan="2">Barcode</th>
                                         <th rowspan="2">Nama Barang</th>
                                         <th rowspan="2">Stock Sekarang</th>
                                         <th rowspan="2">Harga Beli</th>
                                         <th rowspan="2">Harga Jual</th>
                                         <!-- <th rowspan="2">Catagory</th> -->
                                         <th rowspan="2">Action</th>
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
                                             <!-- <td><?php echo $barang['catagory'] ?></td> -->
                                             <td><a href="<?php echo base_url(); ?>data_barang/hapus/<?php echo $barang['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?')">hapus</a>
                                                 <a href="<?php echo base_url(); ?>data_barang/ubah/<?php echo $barang['id'] ?>" class="badge badge-success" onclick="return confirm('yakin?')">Ubah</a>
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