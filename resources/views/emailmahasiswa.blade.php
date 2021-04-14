<!DOCTYPE html>
<html>

<body>
 
    <table border="1">
        <tr>
        <th>NAMA</th>
        <th>NPM</th>
        <th>JURUSAN</th>
        <th>KELAS</th>
        <th>WAKTU_DATANG</th>
        <th>WAKTU_KELUAR</th>
        </tr>
        <tr>
        <td>{{ $data_mahasiswa->nama }}</td>
        <td>{{ $data_mahasiswa->npm }}</td>
        <td>{{ $data_mahasiswa->jurusan }}</td>
        <td>{{ $data_mahasiswa->kelas }}</td>
        <td>{{ $data_mahasiswa->waktu_datang }}</td>
        <td>{{ $data_mahasiswa->waktu_keluar }}</td>
        </tr>
    </table>
</body>
</html>