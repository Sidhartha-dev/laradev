<div class="form-group">
    <label for="name">Brand name</label>
    <input type="text" name="brand_name" class="form-control" placeholder="Brand Name...">
    <div>{{ $errors->first('brand_name') }}</div>
</div>
<div class="form-group">
    <label for="name">Brand details</label>
    <input type="text" name="brand_details" class="form-control" placeholder="Brand Details...">
    <div>{{ $errors->first('brand_details') }}</div>
</div>
<div class="form-group">
    <label for="name">Brand affilate link</label>
    <input type="text" name="brand_link" class="form-control" placeholder="Brand link...">
    <div>{{ $errors->first('brand_link') }}</div>
</div>
<div class="form-group">
    <label for="image">Brand image</label>
    <input type="file" name="brand_image">
    <div>{{ $errors->first('brand_image') }}</div>
</div>
@csrf