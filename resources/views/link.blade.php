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
    <div class="flex justify-center">
        <div class="bg-gray-100 p-8 mt-4 rounded-lg">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-xl font-semibold">Data Link</h1>
                <a href="/link/create" class="bg-blue-500 text-white px-4 py-2 rounded-xl hover:bg-blue-600">Insert data</a>
            </div>
            <table>
                <tr class="border-b-2 border-gray-200">
                    <th class="p-4 text-start">No</th>
                    <th class="p-4 text-start">Name</th>
                    <th class="p-4 text-start">Category</th>
                    <th class="p-4"></th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td class="p-4">{{ $d['id'] }}</td>
                        <td class="p-4">{{ $d['name'] }}</td>
                        <td class="p-4">{{ $d['category'] }}</td>
                        <td class="p-4">
                            <a href="{{ route('link.show', $d->id) }}" class="text-yellow-500">Show</a>
                            <span>|</span>
                            <a href="{{ route('link.edit', $d->id) }}" class="text-blue-500">Edit</a>
                            <span>|</span>
                            <form action="{{ route('link.destroy', $d->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
