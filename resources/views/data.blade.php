<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

    <form action="/data/hasil" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        NPM :
        <input type="integer" name="npm">       <br/>
        Password :
        <input type="text" name="password">     <br/>
        <input type="submit" value="ENTER">
        <!-- #membuat type data untuk view -->
    </form>

</body>
</html>  
