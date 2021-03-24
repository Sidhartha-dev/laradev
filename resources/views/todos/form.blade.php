<div class="form-group">
    <label for="name">Category name</label>
    <input type="text" name="name" class="form-control" placeholder="Name...">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="image">Category image</label>
    <input type="file" name="category_img">
    <div>{{ $errors->first('name') }}</div>
</div>
@csrf
