<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equif="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="pure-table pure-table-bordered">
        <tr>
            <th>NAMA</th>
            <th>NIM</th>
            <th>MATA KULIAH</th>
            <th>DOSEN</th>
            <th>ASISTEN PRAKTIKUM</th>
        </tr>
        <tr>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nim; ?></td>
            <td><?php echo $kelas; ?></td>
            <td><?php echo $matkul; ?></td>
            <td><?php echo $dosen; ?></td>
            <td><?php echo $asisten; ?></td>
        </tr>
    </table>
</body>

</html>