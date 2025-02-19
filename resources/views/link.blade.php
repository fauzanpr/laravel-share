<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1>Data Link</h1>
    <a href="/link/create">Insert data</a>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th></th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d['id'] }}</td>
                <td>{{ $d['name'] }}</td>
                <td>{{ $d['category'] }}</td>
                <td>
                    <a href="{{ route("link.show", $d->id) }}">Show</a>
                    <span>|</span>
                    <a href="{{ route("link.edit", $d->id) }}">Edit</a>
                    <span>|</span>
                    <form action="{{ route('link.destroy', $d->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
