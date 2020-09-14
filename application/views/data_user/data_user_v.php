<section class="Data-user1">
    <div class="container data-user2">
        <div class="border1">
            <div class="row">
                <div class="col-lg-12 justify-content-center text-center">
                    <h1>DATA USER</h1>
                </div>
            </div>
            <form action="<?php echo base_url('Data_user') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="Namabarang" class="col-sm-5 col-form-label nb">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama">
                                <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Namabarang" class="col-sm-5 col-form-label nb">Tanggal lahir</label>
                            <div class="col-sm-6">
                                <input type="date" id="date" name="tl"> <br>
                                <?php echo form_error('tl', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="Namabarang" class="col-sm-5 col-form-label nb">password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="passwordd" name="passwordd">
                                <?php echo form_error('passwordd', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Namabarang" class="col-sm-5 col-form-label nb">Level</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="level">
                                    <?php foreach ($level as $l) : ?>
                                        <option value="<?php echo $l ?>"><?php echo $l ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col justify-content-end">
                        <button type="submit" class="btn btn-primary btn-brng-1">Save</button>
                        <a href="<?php echo base_url('master') ?>">
                            <button type="button" class="btn btn-danger btn-brng-2">Exit</button>
                        </a>
                        <?php echo $this->session->flashdata('message'); ?>
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
            </form>
        </div>
    </div>
    <section class="data-user1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body data-userr1">
                            <table border="1" class="table tablell">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($tb_user as $user) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $user['Nama'] ?></td>
                                            <td><?php echo $user['tanggal_lahir'] ?></td>
                                            <td><?php echo $user['level'] ?></td>
                                            <td><a href="<?php echo base_url(); ?>data_user/hapus/<?php echo $user['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin?')">hapus</a></td>
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