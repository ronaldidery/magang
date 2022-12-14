<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html"; charset="windows-1252">
    <title>Nilai siswa</title>
    <style type="text/css">
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
        
        .box_content {
            border: 1px solid #000;
        }
        
        .box_content * {
            text-align: center;
            padding: 0 1px;
        }
        
        .box_content td,
        .box_content th {
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        
        .box_content th {
            font-size: 12px;
        }
        
        .tl {
            text-align: left;
            padding-left: 10px
        }
        
        .tc {
            text-align: center;
            height: 27px;
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
    <div style="margin:0 auto;width:900px;">
        <br>
        <br>
        <table align="center" width="900" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td width="350" style="font-weight: bold;text-align: center;">
                        <div style="font-size:25px;font-family:Times New Roman,Times,serif">DAFTAR PENDAFTARAN SISWA</div>
                        <div style="font-size:20px;">MTs Bima Bhakti Pertiwi</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table width="900" align="center" border="0" cellpadding="0" cellspacing="0" class="box_content">
            <thead>
                <tr height="40px">
                    <th style="font-size: 15px;" width="30">No</th>
                    <th style="font-size: 15px;" width="300">Nama</th>
                    <th style="font-size: 15px;" width="150">NISN</th>
                    <th style="font-size: 15px;" width="150">NIK</th>
                    <th style="font-size: 15px;" width="150">No HP</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($pendaftaran as $value) : ?>
                <tr height="30px">
                    <td><?= $i++ ?></td>
                    <td class="tl"><?= $value['nama']; ?></td>
                    <td><?= $value['nisn']; ?></td>
                    <td><?= $value['nik']; ?></td>
                    <td><?= $value['no_tlp']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <div class="line"></div>
        <!--<table width="100%" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <img src="http://amikom.ac.id/public/fotomhs/2018/18_02_0287.jpg" alt="MUHAMMAD FARRIJ RIFAI" width="150" style="border:2px outset #777777;"> </td>
                </tr>
            </tbody>
        </table>-->
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
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>