<html lang="en">
<head>
    <title>Genre Buku</title>
</head>
<body>
<h2>Genre Buku</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>
        @foreach ($genres as $genre)
            <tr>
                <td>{{ $genre['id'] }}</td>
                <td>{{ $genre['name'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>