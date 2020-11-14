 <section class="Data-user1">
     <div class="container data-user2">
         <div class="border1">
             <div class="row">
                 <div class="col-lg-12 justify-content-center text-center">
                     <h1>DATA CATAGORY</h1>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12 m-4 justify-content-center">
                     <form action="<?php echo base_url('Data_category') ?>" method="POST">
                         <div class="form-group row">
                             <label for="Namabarang" class="col-sm-4 col-form-label nb">Catagory</label>
                             <div class="col-sm-6">
                                 <input type="text" class="form-control" id="category" name="category">
                                 <small class="form-text text-danger"><?php echo form_error('category') ?></small>
                             </div>
                         </div>
                         <?php if ($this->session->flashdata('berhasil')) : ?>
                             <div class="alert alert-success alert-dismissible fade show" role="alert">
                                 Data catagory <?php echo $this->session->flashdata('berhasil'); ?> <strong>DITAMBAHKAN</strong>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                         <?php endif; ?>
                 </div>
             </div>
             <div class="row ">
                 <div class="col-lg-5">
                     <button type="submit" class="btn btn-primary btn-brng-1">Simpan</button>
                     <a href="<?php echo base_url('master') ?>">
                         <button type="button" class="btn btn-danger btn-brng-2">Exit</button>
                     </a>
                 </div>
             </div>
             </form>
         </div>
     </div>
     <section class="data-user1">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-body data-userrr">
                             <table border="1" class="table tablell">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Catagory</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1 ?>
                                     <?php foreach ($tb_catagory as $catagory) : ?>
                                         <tr>
                                             <td><?php echo $no++ ?></td>
                                             <td><?php echo $catagory['catagory']; ?></td>
                                             <td>
                                                 <a href="<?php echo base_url(); ?>data_category/ubah/<?php echo $catagory['id'] ?>" class="badge badge-success" onclick="return confirm('yakin?')">Ubah</a>
                                                 <a href="<?php echo base_url(); ?>data_category/hapus/<?php echo $catagory['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?')">Hapus</a>
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