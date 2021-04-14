<!DOCTYPE html>
<html>
<head>
    <title>Alat_Absensi</title>
</head>
<body>


    <header>

        <h2>Absensi_mahasiswa</h2>
        <nav>

            <a href="/absen">HOME</a>
            |
            <a href="/absen/users">DAFTAR USER</a>
            |
            <a href="/absen/data_alat">DATA ALAT</a>

        </nav>
    </header>
    <hr/>
    <br/>
    <br/>

    <!-- bagian judul halaman absen -->
    <h3> @yield('judul_halaman') </h3>


    <!-- bagian konten absen -->
    @yield ('konten')


    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="www.youtube.com">www.youtube.com</a>
    </footer>
</body>
</html>