<!DOCTYPE html>
<html>

<body>
 
    <table border="1">
        <tr>
        <th>NAMA</th>
        <th>NID</th>
        <th>JABATAN</th>
        <th>WAKTU_DATANG</th>
        <th>WAKTU_KELUAR</th>
        </tr>
        <tr>
        <td>{{ $data_dosen->nama }}</td>
        <td>{{ $data_dosen->nid }}</td>
        <td>{{ $data_dosen->jabatan }}</td>
        <td>{{ $data_dosen->waktu_datang }}</td>
        <td>{{ $data_dosen->waktu_keluar }}</td>
        </tr>
    </table>
</body>
</html>