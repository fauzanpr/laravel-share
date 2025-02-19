<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/link">Back to home</a>
    <form action="{{ route('link.update', $link->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $link->name }}">
        </div>
        <div>
            <label for="url">URL</label>
            <input type="text" id="url" name="url" value="{{ $link->url }}">
        </div>
        <div>
            <label for="category">Category</label>
            <input type="text" id="category" name="category" value="{{ $link->category }}">
        </div>
        <button>Update</button>
    </form>
</body>

</html>
