<div class="row">
    <div class="col">
        <label for="">Product Name</label>
        <input type="text" class="form-control"  name="name" placeholder="Product Name" value="{{ $product->name ?? old('name')}}" required>
    </div>
    <div class="col">
        <label for="">Company Name</label>
        <select class="form-control" name="company" id="company-select">
            <option value="">Select A Option</option>
            <option value="Apple" value="apple" {{ isset($product) ? (Str::lower($product->company) == 'apple' ? 'selected' : '') : (old('name') == 'apple' ? 'selected' : '') }}>Iphone</option>
            <option value="samsung" {{ isset($product) ? (Str::lower($product->company) == 'samsung' ? 'selected' : '') : (old('name') == 'samsung' ? 'selected' : '') }}>Samsung</option>
        </select>
    </div>
    <div class="col">
        <label for="">Phone modal</label><br>
        <select class="form-control" name="model" id="phone_model">
            <option class="phone-model" data-company="option">Select A Option</option>
            <option class="phone-model" data-company="Apple" value="iphone-11" {{ isset($product) ? (Str::lower($product->model) == 'iphone-11' ? 'selected' : '') : (old('name') == 'iphone-11' ? 'selected' : '') }}>iPhone 11</option>
            <option class="phone-model" data-company="Apple" value="iphone-12" {{ isset($product) ? (Str::lower($product->model) == 'iphone-12' ? 'selected' : '') : (old('name') == 'iphone-12' ? 'selected' : '') }}>iPhone 12</option>
            <option class="phone-model" data-company="Apple" value="iphone-12-pro" {{ isset($product) ? (Str::lower($product->model) == 'iphone-12-pro' ? 'selected' : '') : (old('name') == 'iphone-12-pro' ? 'selected' : '') }}>iPhone 12 pro</option>
            <option class="phone-model" data-company="samsung" value="samsung-s22" {{ isset($product) ? (Str::lower($product->model) == 'samsung-s22' ? 'selected' : '') : (old('name') == 'samsung-s22' ? 'selected' : '') }}>Samsung s22</option>
            <option class="phone-model" data-company="samsung" value="samsung-j7-prime" {{ isset($product) ? (Str::lower($product->model) == 'samsung-j7-prime' ? 'selected' : '') : (old('name') == 'samsung-j7-prime' ? 'selected' : '') }}>Samsung j7 prime</option>
            <option class="phone-model" data-company="samsung" value="samsung-a" {{ isset($product) ? (Str::lower($product->model) == 'samsung-a' ? 'selected' : '') : (old('name') == 'samsung-a' ? 'selected' : '') }}>Samsung A</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Product Description" required>{{ $product->description ?? old('description') }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="">Condition</label><br>
        <select class="form-control" name="condition" required>
            <option value="used" {{ isset($product) ? ($product->condition == 'used' ? 'selected' : '') : (old('condition') == 'used' ? 'selected' : '' )}}>Used </option>
            <option value="likenew" {{ isset($product) ? ($product->condition == 'likenew' ? 'selected' : '') : (old('condition') == 'likenew' ? 'selected' : '') }}>likenew</option>
            <option value="good" {{ isset($product) ? ($product->condition == 'good' ? 'selected' : '') : (old('condition') == 'good' ? 'selected' : '') }}>good</option>
        </select>
    </div>
    <div class="col">
        <label for="">Age</label><br>
        <input type="number" class="form-control" name="age" placeholder="Estimated Time(years)" value="{{ $product->age ?? old('age')}}" required>
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="">Minimum Price</label><br>
        <input type="number" class="form-control" name="min_price" placeholder="Minimum Price" value="{{ $product->min_price ?? old('min_price')}}" required>
    </div>

    <div class="col">
        <label for="">Maximum price</label><br>
        <input type="number" class="form-control" name="max_price" placeholder="Maximum Price" value="{{ $product->max_price ?? old('max_price')}}" required>
    </div>

    <div class="col">
        <label for="">End Time</label>
        <input name="end_time" class="form-control" type="datetime-local" value="{{ $product->end_time ?? old('end_time')}}" required/>
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <label for="image">Upload Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
        @if (isset($product->image))
            <img src="{{ asset('uploads/product/'.$product->image) }}" alt="image of {{$product->name}}" height="250px">
        @endif
    </div>
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>