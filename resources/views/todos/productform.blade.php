<div class="form-group">
    <label for="slug"><h3 class="text-danger">Product slug(Should be Unique)</h3></label>
    <input type="text" name="slug" class="form-control" placeholder="slug name..." value="{{old('slug')?? $product->amazon_product_name}}">
    <div>{{ $errors->first('slug') }}</div>
</div>
<div class="form-group">
    <label for="Amazon_PRODUCT_NAME"><h3 class="text-danger">amazon_product_name</h3></label>
    <input type="text" name="amazon_product_name" class="form-control" placeholder="amazon_product_name..." value="{{old('amazon_product_name')?? $product->amazon_product_name}}">
    <div>{{ $errors->first('amazon_product_name') }}</div>
</div>
<div class="form-group">
    <label for="flipkart-name"><h3 class="text-danger">Flipkart product name</h3></label>
    <input type="text" name="flipk_product_name" class="form-control" placeholder="flipk_product_name..." value="{{old('flipk_product_name')?? $product->flipk_product_name}}">
    <div>{{ $errors->first('flipk_product_name') }}</div>
</div>
<div class="form-group">
    <label for="amazon price"><h3 class="text-danger">Amazon Price</h3></label>
    <input type="number" name="amazon_prize" class="form-control" placeholder="amazon_prize..." value="{{old('amazon_prize')?? $product->amazon_prize}}">
    <div>{{ $errors->first('amazon_prize') }}</div>
</div>
<div class="form-group">
    <label for="Flipkart Price"><h3 class="text-danger">Flipkart Price</h3></label>
    <input type="number" name="flipkart_prize" class="form-control" placeholder="flipkart_prize..." value="{{old('flipkart_prize')?? $product->flipkart_prize}}">
    <div>{{ $errors->first('flipkart_prize') }}</div>
</div>
<div class="form-group">
    <label for="Amazon Details"><h3 class="text-danger">Amazon Details</h3></label>
    <input type="text" class="form-control" placeholder="Enter amazon details.." name="amazon_details" value="{{old('amazon_details')?? $product->amazon_details}}">
    <div>{{ $errors->first('amazon_details') }}</div>
</div>
<div class="form-group">
    <label for="Flipkart Details"><h3 class="text-danger">Flipkart Details</h3></label>
    <input type="text" class="form-control" placeholder="Enter flipkart details.." name="flipkart_details" value="{{old('flipkart_details')?? $product->flipkart_details}}">
    <div>{{ $errors->first('flipkart_details') }}</div>
</div>
<div class="form-group">
    <label for="Amazon Description"><h3 class="text-danger">Amazon Description</h3></label>
    <textarea class="form-control" placeholder="Enter amazon description.." name="amazon_description" value="{{old('amazon_description')?? $product->amazon_description}}"></textarea>
    <div>{{ $errors->first('amazon_description') }}</div>
</div>
<div class="form-group">
    <label for="Flipkart Description"><h3 class="text-danger">Flipkart Description</h3></label>
    <textarea class="form-control" placeholder="Enter flipkart description.." name="flipkart_description" value="{{old('flipkart_description')?? $product->flipkart_description}}"></textarea>
    <div>{{ $errors->first('flipkart_description') }}</div>
</div>
<div class="form-group">
    <label for="amazon link"><h3 class="text-danger">Amazon link</h3></label>
    <input type="text" class="form-control" placeholder="Enter amazon link.." name="amazon_link" value="{{old('amazon_link')?? $product->amazon_link}}">
    <div>{{ $errors->first('amazon_link') }}</div>
</div>
<div class="form-group">
    <label for="flipkart link"><h3 class="text-danger">flipkart link</h3></label>
    <input type="text" class="form-control" placeholder="Enter flipkart link.." name="flipkart_link" value="{{old('flipkart_link')?? $product->flipkart_link}}">
    <div>{{ $errors->first('flipkart_link') }}</div>
</div>
<div class="form-group">
    <label for="Flipkart ratings"><h3 class="text-danger">Flipkart ratings</h3></label>
    <input type="number" class="form-control" placeholder="Enter flipkart ratings.." name="flipkart_ratings" value="{{old('flipkart_ratings')?? $product->flipkart_ratings}}">
    <div>{{ $errors->first('flipkart_ratings') }}</div>
</div>
<div class="form-group">
    <label for="amazon ratings"><h3 class="text-danger">Amazon ratings</h3></label>
    <input type="number" class="form-control" placeholder="Enter amazon ratings.." name="amazon_ratings" value="{{old('amazon_ratings')?? $product->amazon_ratings}}">
    <div>{{ $errors->first('amazon_ratings') }}</div>
</div>
<div class="form-group">
    <label for="Flipkart assured"><h3 class="text-danger">Flipkart assured</h3></label>
    <input type="checkbox" placeholder="Enter flipkart assured.." name="flipkart_assured" value="1" {{($product->flipkart_assured==1 ? ' checked': '')}}>
    <div>{{ $errors->first('flipkart_assured') }}</div>
</div>
<div class="form-group">
    <label for="Amazon Fullfield"><h3 class="text-danger">Amazon Fullfield</h3></label>
    <input type="checkbox" placeholder="Enter Amazon Fullfield.." name="amazon_verify" value="1" {{($product->flipkart_verify==1 ? ' checked': '')}}>
    <div>{{ $errors->first('amazon_verify') }}</div>
</div>
<div class="form-group">
    <label for="Featured"><h3 class="text-danger">Featured</h3></label>
    <input type="checkbox" placeholder="Enter Featured.." name="featured" value="1" {{($product->featured==1 ? ' checked': '')}}>
    <div>{{ $errors->first('featured') }}</div>
</div>
<div class="form-group">
    <label for="Top Two Featured"><h3 class="text-danger">Top Two Featured</h3></label>
    <input type="checkbox" placeholder="Enter Top Two Featured.." name="top_two_featured" value="1" {{($product->top_two_featured==1 ? ' checked': '')}}>
    <div>{{ $errors->first('top_two_featured') }}</div>
    <p>(select any two Products for Top page not more than 2)</p>
</div>
<div class="form-group">
    <label for="flipkart image"><h3 class="text-danger">flipkart image</h3></label>
    <input type="file" name="flipkart_image" value="{{old('flipkart_image')?? $product->flipkart_image}}">
    <div>{{ $errors->first('flipkart_image') }}</div>
</div>
<div class="form-group">
    <label for="amazon image"><h3 class="text-danger">amazon image</h3></label>
    <input type="file" name="amazon_image" value="{{old('amazon_image')?? $product->amazon_image}}">
    <div>{{ $errors->first('amazon_image') }}</div>
</div>
<div class="form-group">
    <label for="Category"><h3 class="text-danger">Product Category</h3></label>
    <select name="category_id" id="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $category->id== $product->category_id ? 'selected': ''}}>{{ $category->name }}</option>
        @endforeach
    </select>
    <div>{{ $errors->first('category_id') }}</div>
</div>

@csrf