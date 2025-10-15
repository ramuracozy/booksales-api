<!DOCTYPE html>
<html>
<head>
    <title>Author</title>
</head>
<body>
    <h2>Daftar Authors</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Negara</th>
        </tr>
        @foreach ($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->nationality }}</td>
            </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ url('/books') }}">Lihat Daftar Buku</a>
</body>
</html>
