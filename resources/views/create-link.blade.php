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
        <div class="bg-gray-100 p-8 rounded-lg mt-4 w-1/2">
            <a href="/link" class="px-4 py-2 bg-blue-500 rounded-lg text-white hover:bg-blue-600">Back to home</a>
            <form action="{{ route('link.store') }}" method="POST" class="mt-8 flex flex-col gap-4">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="block w-full border p-2">
                </div>
                <div>
                    <label for="url">URL</label>
                    <input type="text" id="url" name="url" class="block w-full border p-2">
                </div>
                <div>
                    <label for="category">Category</label>
                    <input type="text" id="category" name="category" class="block w-full border p-2">
                </div>
                <button class="bg-blue-500 w-full py-2 text-white rounded-lg">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
