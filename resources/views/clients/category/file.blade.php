<form action="{{route('handle.file')}}" method="post" enctype="multipart/form-data">
@csrf 
<input type="file" name="file"><br>
<button type="submit">Upload</button>
</form>

@if(session('success'))
<div>{{ session('success') }}</div>
@endif

@if(session('error'))
<div>{{ session('error') }}</div>
@endif