<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Create</title>
</head>
<style></style>
<body>
    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" required>
        </div>
    
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" required>
        </div>
    
        <div>
            <label for="rating">Rating:</label>
            <input type="text" name="rating" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" required>
        </div>
        <div>
            <label id="" for="imgSrc">Image Source:</label>
            <input id="" type="file" name="imgSrc" accept="image/*" required>
        </div>
    
        <button type="submit">Add Book</button>
    </form>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
</body>
</html>