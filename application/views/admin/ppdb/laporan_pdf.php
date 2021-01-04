<!DOCTYPE html>
<html>
<head>
	<title>Daftar PPDB</title>
</head>
<body>
	<table>
        <thead>
            <tr>
               	<th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>NIK</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pendaftaran as $value) : ?>
                <tr>
                    <th><?= $i++ ?></th>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['nisn']; ?></td>
                    <td><?= $value['nik']; ?></td>
                    <td><?= $value['no_tlp']; ?></td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</body>
</html>