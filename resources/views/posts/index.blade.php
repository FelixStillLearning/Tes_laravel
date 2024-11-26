<!DOCTYPE html>
<html>
<head>
    <title>Daftar Post</title>
</head>
<body>
    <h1>Daftar Post</h1>
    <a href="{{ route('posts.create') }}">Tambah Post</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Konten</th>
            <th>Aksi</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
