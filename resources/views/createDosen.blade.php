<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("dosen.store") }}" method="POST">
        @csrf
        {{-- Croside Request Forgery --}}
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="pengampu" placeholder="Pengampu">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>