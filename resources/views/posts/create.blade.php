<!DOCTYPE html>
<html>
<head>
    <title>Tambah Post</title>
</head>
<body>
    <h1>Tambah Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Judul:</label>
        <input type="text" name="title" required>
        <label>Konten:</label>
        <textarea name="content" required></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
