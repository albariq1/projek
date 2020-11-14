<!DOCTYPE html>
<html lang="ar">
<!-- <html lang="ar"> for arabic only -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Express Wash Customer Invoice</title>
    <style>
        @media print {
            @page {
                margin: 0 auto;
                /* imprtant to logo margin */
                sheet-size: 300px 250mm;
                /* imprtant to set paper size */
            }

            html {
                direction: rtl;
            }

            html,
            body {
                margin: 0;
                padding: 0
            }

            #printContainer {
                width: 250px;
                margin: auto;
                /*padding: 10px;*/
                /*border: 2px dotted #000;*/
                text-align: justify;
            }

            .text-center {
                text-align: center;
            }
        }
    </style>
</head>

<body onload="window.print();">
    <h1 id="logo" class="text-center"><img src='<?= base_url() ?>/assets/image/market.png' alt='Logo' width="100px"></h1>

    <div id='printContainer'>
        <h2 id="slogan" style="margin-top:0" class="text-center">Toko Albariq</h2>

        <table>
            <tr>
                <td>Invoice Num</td>
                <td><b><?php echo $struk[0]['id_penjualan'] ?></b></td>
            </tr>
            <tr>
                <td>Created At</td>
                <td><b><?= date("d-m-Y H:i:s", time()); ?><br></b></td>
            </tr>

            <tr>
                <td>Nama Pelayan :</td>
                <td><b><?php echo $struk[0]['Nama'] ?></b></td>
            </tr>
        </table>
        <hr>

        <table>
            <tr>
                <td><b>Barang</b></td>
                <td><b>Quantity</b></td>
                <td><b>Harga</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <?php foreach ($struk as $strk) :  ?>
                <tr>
                    <td><b><?php echo $strk['nama_barang'] ?></b></td>
                    <td><b><?php echo $strk['qty'] ?></b></td>
                    <td><b><?php echo $strk['total_harga'] ?></b></td>
                </tr>
            <?php endforeach; ?>

        </table>
        <hr>

        <table>
            <tr>
                <td><b>Total Belanjaan</b></td>
                <td><b>Rp.<?php echo number_format($strk['total_belanja']) ?></b></td>
            </tr>
            <tr>
                <td><b>Uang Belanjaan</b></td>
                <td><b>Rp.<?php echo number_format($strk['total_bayar']) ?></b></td>
            </tr>
            <tr>
                <td><b>Kemabalian </b></td>
                <td><b>Rp.<?php echo number_format($strk['kembalian']) ?></b></td>
            </tr>
        </table>
        <hr>

    </div>
</body>

</html>