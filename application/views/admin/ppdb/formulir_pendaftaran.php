<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html"; charset="windows-1252">
    <title>Nilai siswa</title>
    <style type="text/css">
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
        
        .krs_box {
            border: 1px solid #000;
        }
        
        .krs_box * {
            text-align: center;
            padding: 0 1px;
        }
        
        .krs_box td,
        .krs_box th {
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        
        .krs_box th {
            font-size: 12px;
        }
        
        .tl {
            text-align: left;
            padding-left: 10px
        }
        
        .tc {
            text-align: center;
        }
        
        .tr {
            text-align: right;
        }
        
        .tj {
            text-align: justify;
        }
        
        .fb {
            font-weight: bold;
        }
        
        .line {
            border-bottom: 1px dashed #000;
            clear: both;
        }

    </style> 
    <script type="text/javascript" src="chrome-extension://aadgmnobpdmgmigaicncghmmoeflnamj/ng-inspector.js"></script>
</head>
<body cz-shortcut-listen="true">
    <div style="margin:0 auto;width:800px;">
        <br>
        <br>
        <table align="center" width="800" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td width="350" style="font-weight: bold;text-align: center;">
                        <div style="font-size:25px;font-family:Times New Roman,Times,serif">FORMULIR PENDAFTARAN SISWA</div>
                        <div style="font-size:20px;">MTs Bima Bhakti Pertiwi</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table border="0" align="center" width="800" cellpadding="0" cellspacing="8" >
            <tbody>
                <?php ($value) ?>
                <tr>
                    <td colspan="3"><strong>DATA DIRI :</strong></td>
                </tr>
                <tr>
                    <td width="180">Nama</td>
                    <td width="12">:</td>
                    <td width="470"><?= $value['nama'];?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?= $value['nik'];?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $value['tmp_lahir'];?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $value['tt_lahir'];?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $value['jenis_kelamin'];?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><?= $value['kewarganegaraan'];?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $value['agama'];?></td>
                </tr>
                <tr>
                    <td>Nama Wali</td>
                    <td>:</td>
                    <td><?= $value['nama_wali'];?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $value['email'];?></td>
                </tr>
                <tr>
                    <td>No Telpon</td>
                    <td>:</td>
                    <td><?= $value['no_tlp'];?></td>
                </tr>
            </tbody>
            <tbody>
                <?php ($value) ?>
                <tr>
                    <td colspan="3"><strong>Data Alamat Asal :</strong></td>
                </tr>
                <tr>
                    <td width="180">Alamat</td>
                    <td width="12">:</td>
                    <td width="470"><?= $value['alamat_pendaftar'];?></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><?= $value['pos'];?></td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td><?= $value['nama_prov'];?></td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>:</td>
                    <td><?= $value['nama_kab'];?></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td><?= $value['nama_kec'];?></td>
                </tr>
            </tbody>
            <tbody>
                <?php ($value) ?>
                <tr>
                    <td colspan="3"><strong>Data Pendidikan :</strong></td>
                </tr>
                <tr>
                    <td width="180">Pendidikan Terakhir</td>
                    <td width="12">:</td>
                    <td width="470"><?= $value['pend_akhir'];?></td>
                </tr>
                <tr>
                    <td>Nama Sekolah</td>
                    <td>:</td>
                    <td><?= $value['nama_sekolah'];?></td>
                </tr>
                <tr>
                    <td>Rata Nilai Raport</td>
                    <td>:</td>
                    <td><?= $value['nilai_raport'];?></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $value['nisn'];?></td>
                </tr>
            </tbody>
        </table>
        <br> 
        <div class="line"></div>
        <br>
        <table width="100%" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <img src="<?php echo base_url().'assets/foto/document/'.$value['pas_foto'];?>"width="150" alt="<?= $value['nama'];?>" width="150" style="border:2px outset #777777;"> </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
    </div>
    <div style="text-align:center;" class="tc">
        [
        <a href="javascript:void()" onclick="print()">CETAK</a>
        ]
    </div>
    <br>
    <br>
</body>
</html>