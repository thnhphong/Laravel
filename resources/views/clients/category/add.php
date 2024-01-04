<h1>Add Category</h1>
<form method="POST" action="<?php echo route('category.add'); ?>">
@csrf
<div>
    <label for="category_name">Category Name: </label>
    <input type="text" name="category_name" id="category_name" placeholder="Enter category" value="<?php echo old('category_name')?>">
</div>
<button type="submit">Add Category</button>
</form>