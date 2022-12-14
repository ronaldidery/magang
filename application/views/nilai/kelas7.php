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
                        <div style="font-size:25px;font-family:Times New Roman,Times,serif">NILAI UJIAN MURNI SISWA</div>
                        <div style="font-size:20px;">MTs Bima Bhakti Pertiwi</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table border="0" align="center" width="900" cellpadding="0" cellspacing="5" >
            <tbody style="font-size: 20px;font-family:Times New Roman,Times,serif">
                <?php ($value) ?>
                <tr>
                    <td width="100"><strong>NAMA</strong></td>
                    <td width="12"><strong>:</strong></td>
                    <td width="470"><strong><?= $valuepts1['nama_siswa']; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>NIS</strong></td>
                    <td><strong>:</strong></td>
                    <td><strong><?= $valuepts1['nis_siswa']; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>KELAS</strong></td>
                    <td><strong>:</strong></td>
                    <td><strong><?= $valuepts1['kelas_siswa']; ?></strong></td>
                </tr>
            </tbody>
        </table>
        <table width="900" align="center" border="0" cellpadding="0" cellspacing="0" class="krs_box">
            <tbody>
                
<?php $no = 0;
foreach ($pts1 as $valuepts1) : $no++ ?>
<?php $no = 0;
foreach ($pas as $valuepas) : $no++ ?>
<?php $no = 0;
foreach ($pts2 as $valuepts2) : $no++ ?>
<?php $no = 0;
foreach ($pts1 as $valuepat) : $no++ ?>
                <tr>
                    <th style="font-size: 15px;" rowspan="2" width="30">NO</th>
                    <th style="font-size: 15px;" rowspan="2" width="300">MATA PELAJARAN</th>
                    <th style="font-size: 15px;" colspan="4">NILAI</th>
                </tr>
                <tr>
                    <th style="font-size: 15px;" width="60">PTS 1</th>
                    <th style="font-size: 15px;" width="60">PAS</th>
                    <th style="font-size: 15px;" width="60">PTS 2</th>
                    <th style="font-size: 15px;" width="60">PAT</th>
                </tr>
                <tr>
                    <td height="30">1</td>
                    <td class="tl">ILMU PENGETAHUAN ALAM (IPA)<br></td>
                    <td><?= $valuepts1['ipa']; ?></td>
                    <td><?= $valuepas['ipa']; ?></td>
                    <td><?= $valuepts2['ipa']; ?></td>
                    <td><?= $valuepat['ipa']; ?></td>
                </tr>
                <tr>
                    <td height="30">2</td>
                    <td class="tl">ILMU PENGETAHUAN SOSIAL (IPS)<br></td>
                    <td><?= $valuepts1['ips']; ?></td>
                    <td><?= $valuepas['ips']; ?></td>
                    <td><?= $valuepts2['ips']; ?></td>
                    <td><?= $valuepat['ips']; ?></td>
                </tr>
                <tr>
                    <td height="30">3</td>
                    <td class="tl">MATEMATIKA<br></td>
                    <td><?= $valuepts1['matematika']; ?></td>
                    <td><?= $valuepas['matematika']; ?></td>
                    <td><?= $valuepts2['matematika']; ?></td>
                    <td><?= $valuepat['matematika']; ?></td>
                </tr>
                <tr>
                    <td height="30">4</td>
                    <td class="tl">BAHASA INDONESIA<br></td>
                    <td><?= $valuepts1['bhs_indo']; ?></td>
                    <td><?= $valuepas['bhs_indo']; ?></td>
                    <td><?= $valuepts2['bhs_indo']; ?></td>
                    <td><?= $valuepat['bhs_indo']; ?></td>
                </tr>
                <tr>
                    <td height="30">5</td>
                    <td class="tl">BAHASA INGGRIS<br></td>
                    <td><?= $valuepts1['bhs_ing']; ?></td>
                    <td><?= $valuepas['bhs_ing']; ?></td>
                    <td><?= $valuepts2['bhs_ing']; ?></td>
                    <td><?= $valuepat['bhs_ing']; ?></td>
                </tr>
                <tr>
                    <td height="30">6</td>
                    <td class="tl">BAHASA JAWA<br></td>
                    <td><?= $valuepts1['bhs_jawa']; ?></td>
                    <td><?= $valuepas['bhs_jawa']; ?></td>
                    <td><?= $valuepts2['bhs_jawa']; ?></td>
                    <td><?= $valuepat['bhs_jawa']; ?></td>
                </tr>
                <tr>
                    <td height="30">7</td>
                    <td class="tl">PENDIDIKAN PANCASILA dan KEWARGANEGARAAN (PPKn)<br></td>
                    <td><?= $valuepts1['pkn']; ?></td>
                    <td><?= $valuepas['pkn']; ?></td>
                    <td><?= $valuepts2['pkn']; ?></td>
                    <td><?= $valuepat['pkn']; ?></td>
                </tr>
                <tr>
                    <td height="30">8</td>
                    <td class="tl">SENI BUDAYA dan KETERAMPILAN (SBK)<br></td>
                    <td><?= $valuepts1['sbk']; ?></td>
                    <td><?= $valuepas['sbk']; ?></td>
                    <td><?= $valuepts2['sbk']; ?></td>
                    <td><?= $valuepat['sbk']; ?></td>
                </tr>
                <tr>
                    <td height="30">9</td>
                    <td class="tl">PENDIDIKAN JASMANI (PENJAS)<br></td>
                    <td><?= $valuepts1['pjok']; ?></td>
                    <td><?= $valuepas['pjok']; ?></td>
                    <td><?= $valuepts2['pjok']; ?></td>
                    <td><?= $valuepat['pjok']; ?></td>
                </tr>
                <tr>
                    <td height="30">10</td>
                    <td class="tl">TEKNOLOGI INFORMASI dan KOMUNIKASI (TIK)<br></td>
                    <td><?= $valuepts1['tik']; ?></td>
                    <td><?= $valuepas['tik']; ?></td>
                    <td><?= $valuepts2['tik']; ?></td>
                    <td><?= $valuepat['tik']; ?></td>
                </tr>
                <tr>
                    <td height="30">11</td>
                    <td class="tl">PRAKARYA<br></td>
                    <td><?= $valuepts1['prakarya']; ?></td>
                    <td><?= $valuepas['prakarya']; ?></td>
                    <td><?= $valuepts2['prakarya']; ?></td>
                    <td><?= $valuepat['prakarya']; ?></td>
                </tr>
                <tr>
                    <td height="30">12</td>
                    <td class="tl">BAHASA ARAB<br></td>
                    <td><?= $valuepts1['bhs_arab']; ?></td>
                    <td><?= $valuepas['bhs_arab']; ?></td>
                    <td><?= $valuepts2['bhs_arab']; ?></td>
                    <td><?= $valuepat['bhs_arab']; ?></td>
                </tr>
                <tr>
                    <td height="30">13</td>
                    <td class="tl">AKIDAH<br></td>
                    <td><?= $valuepts1['akidah']; ?></td>
                    <td><?= $valuepas['akidah']; ?></td>
                    <td><?= $valuepts2['akidah']; ?></td>
                    <td><?= $valuepat['akidah']; ?></td>
                </tr>
                <tr>
                    <td height="30">14</td>
                    <td class="tl">AKHLAK<br></td>
                    <td><?= $valuepts1['akhlak']; ?></td>
                    <td><?= $valuepas['akhlak']; ?></td>
                    <td><?= $valuepts2['akhlak']; ?></td>
                    <td><?= $valuepat['akhlak']; ?></td>
                </tr>
                <tr>
                    <td height="30">15</td>
                    <td class="tl">QUR'AN HADITS<br></td>
                    <td><?= $valuepts1['quran_hadits']; ?></td>
                    <td><?= $valuepas['quran_hadits']; ?></td>
                    <td><?= $valuepts2['quran_hadits']; ?></td>
                    <td><?= $valuepat['quran_hadits']; ?></td>
                </tr>
                <tr>
                    <td height="30">16</td>
                    <td class="tl">SEJARAH KEBUDAYAAN ISLAM (SKI)<br></td>
                    <td><?= $valuepts1['ski']; ?></td>
                    <td><?= $valuepas['ski']; ?></td>
                    <td><?= $valuepts2['ski']; ?></td>
                    <td><?= $valuepat['ski']; ?></td>
                </tr>
                <tr>
                    <td height="30">17</td>
                    <td class="tl">KEPESANTRENAN<br></td>
                    <td><?= $valuepts1['pesantren']; ?></td>
                    <td><?= $valuepas['pesantren']; ?></td>
                    <td><?= $valuepts2['pesantren']; ?></td>
                    <td><?= $valuepat['pesantren']; ?></td>
                </tr>
                <tr>
                    <td height="30">18</td>
                    <td class="tl">FIQIH<br></td>
                    <td><?= $valuepts1['fiqih']; ?></td>
                    <td><?= $valuepas['fiqih']; ?></td>
                    <td><?= $valuepts2['fiqih']; ?></td>
                    <td><?= $valuepat['fiqih']; ?></td>
                </tr>
                <tr>
                    <td height="30">19</td>
                    <td class="tl">TAHFIDZ<br></td>
                    <td><?= $valuepts1['tahfidz']; ?></td>
                    <td><?= $valuepas['tahfidz']; ?></td>
                    <td><?= $valuepts2['tahfidz']; ?></td>
                    <td><?= $valuepat['tahfidz']; ?></td>
                </tr>
                <tr>
                    <th class="tr" colspan="2">Jumlah&nbsp;</th>
                    <th class="tc">20</th>
                    <th class="tc">20</th>
                    <th class="tc">20</th>
                    <th class="tc">20</th>
                </tr>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <br>
        <table width="900" align="center" border="0" cellpadding="0" cellspacing="0" class="krs_box">
            <tbody>
                <tr>
                    <th style="font-size: 15px;" rowspan="2" width="30">NO</th>
                    <th style="font-size: 15px;" rowspan="2" width="300">EKSTRAKURIKULER</th>
                    <th style="font-size: 15px;" colspan="4">NILAI</th>
                </tr>
                <tr>
                    <th style="font-size: 15px;" width="60">PTS 1</th>
                    <th style="font-size: 15px;" width="60">PAS</th>
                    <th style="font-size: 15px;" width="60">PTS 2</th>
                    <th style="font-size: 15px;" width="60">PAT</th>
                </tr>
                <tr>
                    <td height="30">1</td>
                    <td class="tl">PRAMUKA<br></td>
                    <td>2</td>
                    <td> / &nbsp; &nbsp; / </td>
                    <td> / &nbsp; &nbsp; /</td>
                    <td> / &nbsp; &nbsp; /</td>
                </tr>
                <tr>
                    <td height="30">2</td>
                    <td class="tl">HADROH<br></td>
                    <td>2</td>
                    <td> / &nbsp; &nbsp; / </td>
                    <td> / &nbsp; &nbsp; /</td>
                    <td> / &nbsp; &nbsp; /</td>
                </tr>
                <tr>
                    <th class="tr" colspan="2">Jumlah&nbsp;</th>
                    <th class="tc">20</th>
                    <th class="tc">20</th>
                    <th class="tc">20</th>
                    <th class="tc">20</th>
                </tr>
            </tbody>
        </table>
        <br>
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
</body>
</html>