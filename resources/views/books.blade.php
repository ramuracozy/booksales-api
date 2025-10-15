<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Genre</th>
            <th>Tahun</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->year }}</td>
            </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ url('/authors') }}">Lihat Daftar Authors</a>
</body>
</html>
