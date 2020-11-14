<body>
    <section class="atas">
        <div class="container">
            <div class="row justify-content-between kasir-atas">
                <div class="col-lg-5 background-barcode">
                    <h4>tambah barang</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning col-6 mt-5" data-toggle="modal" data-target="#exampleModalLong">
                        Cari Barang
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Daftar Barang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <table class="table table1" id="table10">
                                            <thead>
                                                <tr>
                                                    <th>barcode</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga</th>
                                                    <th>Stock</th>
                                                    <th>Qty</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tb_barang as $barang) : ?>
                                                    <tr>
                                                        <form action="<?php echo base_url('kasir/insert_keranjang') ?>" method="post">
                                                            <input type="hidden" name="id_barang" value="<?php echo $barang['id']; ?>">
                                                            <td><?php echo $barang['barcode']; ?></td>
                                                            <td><?php echo $barang['nama_barang']; ?></td>
                                                            <td><?php echo number_format($barang['harga_jual']); ?></td>
                                                            <td><?php echo $barang['stock_awal']; ?></td>
                                                            <input type="hidden" name="harga_jual" value="<?php echo $barang['harga_jual']; ?>">
                                                            <input type="hidden" name="harga_beli" value="<?php echo $barang['harga_beli']; ?>">
                                                            <?php if ($barang['stock_awal'] < 1) { ?>
                                                                <td>
                                                                    <input type="number" name="qty" disabled>
                                                                </td>
                                                            <?php } else { ?>
                                                                <td>
                                                                    <input type="number" name="qty">
                                                                </td>
                                                                <td><button class="btn-primary" type="submit"><i class="fa fa-check" aria-hidden="true"></i>PILIH</button></td>
                                                            <?php } ?>
                                                        </form>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 background-total">
                    <h4>
                        Total
                    </h4>
                    <h3><span id="totalbl"><?php echo number_format($jumlah['total_harga']) ?></span></h3>
                </div>
            </div>
        </div>
    </section>

    <section class="order mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body  jarak">
                            <table class="table table1" id="table10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Quantity</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0 ?>
                                    <?php $noo = 1 ?>
                                    <?php foreach ($list_keranjang as $jual) : ?>
                                        <tr>
                                            <td><?php echo $noo++ ?></td>
                                            <td><?php echo $jual['nama_barang'] ?></td>
                                            <td><?php echo $jual['qty'] ?></td>
                                            <td><?php echo number_format($jual['harga_jual']) ?></td>
                                            <td id="hasil_indeks<?php echo $no++ ?>" class="hasil_indeks"><?php echo number_format($jual['total_harga']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row kasir-bawah justify-content-between">
                <div class="col-lg-3">
                    <p><?php echo date('Y-m-d') ?></p>
                </div>
                <div class="col-lg-3">
                    <!-- <p>User :<?php echo ($this->session->userdata('Nama')); ?></p> -->
                </div>
                <!-- modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Selesai
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Proses Check Out</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <form action="<?php echo base_url('kasir/checkout') ?>" method="POST">
                                        <div class="col">
                                            <label for=""><b>Total Harga</b></label>
                                            <input type="text" class="form-control" name="total_harga" id="total_harga" readonly value="<?php echo $jumlah['total_harga'] ?>" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for=""><b>Total Bayar</b></label>
                                        <input type="text" class="form-control" id="total_bayar" name="total_bayar" onkeyup="sum();" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for=""><b>Kembalian</b></label>
                                        <input type="text" class="form-control" id="kembalian" name="kembalian" readonly required>
                                    </div>
                                </div>
                                <div>
                                    <?php foreach ($list_keranjang as $jual) : ?>
                                        <tr>
                                            <input type="hidden" name="id_barang[]" value="<?php echo $jual['id_barang'] ?>">
                                            <input type="hidden" name="id_pegewai[]" value="<?php echo $jual['id_pegawai'] ?>">
                                            <input type="hidden" name="harga_modal[]" value="<?php echo $jual['harga_beli'] ?>">
                                        </tr>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Check Out</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal selesai -->
                <a href="<?php echo base_url('Dashboard') ?>">
                    <button type="button" class="btn btn-danger button-exit">EXIT</button>
                </a>
            </div>
        </div>
    </section>
    <!-- <script type="text/javascript">
        $(function() {
            var grandtotal = 0;
            $("[id*=hasil_indeks]").each(function() {
                grandtotal = grandtotal + parseFloat($(this).html());
            });
            $("[id*=totalbl]").html(+grandtotal.toString());
        });
    </script> -->

    <!-- js -->
    <script>
        function sum() {
            var txtFirstNumberValue = document.getElementById('total_bayar').value;
            var txtSecondNumberValue = document.getElementById('total_harga').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('kembalian').value = result;
            }
        }
    </script>