<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Artikel</title>
</head>
<body>
    
</body>
<h2>Input Biodata</h2>
<form action="/output" method="post">
    @csrf
    <label> Judul:</label>
    <input type="text" name="judul"><br><br>

    <label> Kategori:</label>
    <input type="text" name="kategori"><br><br>

     <label> deskripsi</label>
    <textarea name="deskripsi"></textarea><br><br>

    <button type="submit">Kirim</button>
    </form>
</html>