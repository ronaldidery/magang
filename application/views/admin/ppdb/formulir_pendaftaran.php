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
        <table border="0" align="center" width="800" cellpadding="0" cellspacing="0">
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
        </table>
        <br> 
        <div class="line"></div>
        <table width="100%" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <img src="http://amikom.ac.id/public/fotomhs/2018/18_02_0287.jpg" alt="MUHAMMAD FARRIJ RIFAI" width="150" style="border:2px outset #777777;"> </td>
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