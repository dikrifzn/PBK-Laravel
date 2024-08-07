<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route("dosen.create") }}">Tambah Data +</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Pengampu</td>
            <td>Aksi</td>
        </tr>
        {{-- @foreach ($dosens as $index => $dosen)
            <tr>
                <td>{{ $index+1 }}</td>
        <td>{{ $dosen -> nama }}</td>
        <td>{{ $dosen -> pengampu }}</td>
        <td>
            <a href="">Edit</a>
            <a href="">Hapus</a>
        </td>
        </tr>
        @endforeach --}}
        @forelse ($dosens as $index => $dosen)
        <tr>
            <td>{{ $index+1 }}</td>
            <td>{{ $dosen -> nama }}</td>
            <td>{{ $dosen -> pengampu }}</td>
            <td>
                <a href="{{route("dosen.show", $dosen->id)}}">Detile</a>
                <a href="{{route("dosen.edit", $dosen->id)}}">Edit</a>
                <form action="{{ route('dosen.destroy', $dosen->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">
                <center>Data Kosong</center>
            </td>
        </tr>
        @endforelse
    </table>
</body>

</html>