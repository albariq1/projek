 <section class="Data-barang1">
     <div class="container">
         <section class="data-barangg">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-body  stock-barangg text-center">
                             <h1 class="text-center">DATA BARANG</h1>
                             <a href="<?php echo base_url(); ?>data_barang/tambah">
                                 <button type="button" class="btn btn-primary mb-5 float-left">tambah Data</button>
                             </a>
                             <a href="<?php echo base_url(); ?>master">
                                 <button type="button" class="btn btn-danger mb-5 float-right">Exit</button>
                             </a>
                             <?php if ($this->session->flashdata('flash')) : ?>
                                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                                     Data Barang <strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                             <?php endif; ?>
                             <table border="3" class="table table2">
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