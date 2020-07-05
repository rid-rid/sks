<?php
require_once('../Connections/koneksi.php');
require_once('hak_akses.php');

function rupiah($angka)
{

    $hasil = number_format($angka, 2, '.', ',');
    return $hasil;
}

$tahun    = $_GET['tahun'];
?>


<link rel="stylesheet" type="text/css" href="assets/style.css">

<div class="tengah">ANGGARAN PENDAPATAN DAN BELANJA DESA</div>
<div class="tengah">PEMERINTAH DESA MANUNTUNG</div>
<div class="tengah">TAHUN ANGGARAN <?= $tahun; ?></div>

<table cellspacing="0" class="tbisi">
    <thead>
        <tr>
            <td style="width: 60px; text-align: center" colspan="2">KODE<br>REKENING</td>
            <td style="width: 320px; text-align: center">URAIAN</td>
            <td style="width: 100px; text-align: center">ANGGARAN<br>( Rp )</td>
            <td style="width: 70px; text-align: center">SUMBERDANA</td>
        </tr>
        <tr>
            <td style="width: 35px; text-align: center">1</td>
            <td style="width: 25px; text-align: center">2</td>
            <td style="width: 320px; text-align: center">3</td>
            <td style="width: 100px; text-align: center">4</td>
            <td style="width: 70px; text-align: center">5</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width: 35px; text-align: left; padding-left: 10px"></td>
            <td style="width: 25px; text-align: left; padding-left: 10px">4</td>
            <td style="width: 320px; text-align: left; padding-left: 10px; font-weight: bold">PENDAPATAN</td>
            <td style="width: 100px; text-align: right"></td>
            <td style="width: 70px"></td>
        </tr>
        <?php
        mysql_select_db($database_koneksi, $koneksi);
        $pendapatan = "SELECT * FROM trans_pendapatan AS a LEFT JOIN pendapatan AS b ON b.kd_pendapatan = a.kd_pendapatan WHERE thn_pendapatan=$tahun ORDER BY a.kd_pendapatan";
        $query_pendapatan = mysql_query($pendapatan, $koneksi) or die(mysql_error());
        while ($data = mysql_fetch_assoc($query_pendapatan)) {
        ?>
            <tr>
                <td style="width: 35px; text-align: left; padding-left: 10px"></td>
                <td style="width: 25px; text-align: left; padding-left: 10px"><?= $data['kd_pendapatan']; ?></td>
                <td style="width: 320px; padding-left: 20px"><?= $data['nama_pendapatan']; ?></td>
                <td style="width: 100px; text-align: right; padding-right: 10px"><?= rupiah($data['besar_pendapatan']); ?></td>
                <td style="width: 70px; padding-left: 10px"></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td style="width: 35px; text-align: left; padding-left: 10px"></td>
            <td style="width: 25px; text-align: left; padding-left: 10px">5</td>
            <td style="width: 320px; text-align: left; padding-left: 10px; font-weight: bold">BELANJA</td>
            <td style="width: 100px; text-align: right"></td>
            <td style="width: 70px"></td>
        </tr>

        <?php
        //perulangan sub rekening
        $belanja = "SELECT a.id_belanja, a.besar_belanja, a.thn_belanja, a.kd_sumber, a.kd_sub_rekening, a.kd_belanja, b.nama_sub_rekening, b.kd_rekening, c.nama_belanja, d.singkatan, e.nama_rekening FROM trans_belanja AS a LEFT JOIN sub_rekening AS b ON b.kd_sub_rekening = a.kd_sub_rekening LEFT JOIN belanja AS c	ON c.kd_belanja = a.kd_belanja LEFT JOIN sumber AS d ON d.kd_sumber = a.kd_sumber LEFT JOIN rekening AS e ON b.kd_rekening = e.kd_rekening WHERE thn_belanja = '$tahun' ORDER BY a.kd_sub_rekening ASC, a.kd_belanja ASC";
        $query_belanja = mysql_query($belanja, $koneksi) or die(mysql_error());
        while ($data = mysql_fetch_assoc($query_belanja)) {
        ?>
            <tr>
                <td style="width: 35px; text-align: left; padding-left: 10px"><?= $data['kd_sub_rekening']; ?></td>
                <td style="width: 25px; text-align: left; padding-left: 10px"></td>
                <td style="width: 320px; padding-left: 20px"><?= $data['nama_sub_rekening']; ?></td>
                <td style="width: 100px; text-align: right; padding-right: 10px"><?= rupiah($data['besar_belanja']); ?></td>
                <td style="width: 70px; padding-left: 10px"><?= $data['singkatan']; ?></td>
            </tr>
            <tr>
                <td style="width: 35px; text-align: left; padding-left: 10px"><?= $data['kd_sub_rekening']; ?></td>
                <td style="width: 25px; text-align: left; padding-left: 10px"><?= $data['kd_belanja']; ?></td>
                <td style="width: 320px; padding-left: 30px"><?= $data['nama_belanja']; ?></td>
                <td style="width: 100px; text-align: right; padding-right: 10px"><?= rupiah($data['besar_belanja']); ?></td>
                <td style="width: 70px; padding-left: 10px"></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tfoot>
</table>

<div style="padding-bottom: 20pt"></div>
<table style="margin-left: 350pt">
    <tr>
        <td>Kota, Tanggal Bulan Tahun</td>
    </tr>
    <tr>
        <td style="padding-bottom: 40pt">Kepala Desa,</td>
    </tr>
    <tr>
        <td>Nama Kepala Desa</td>
    </tr>
    <tr>
        <td>NIP Kepala Desa</td>
    </tr>
</table>