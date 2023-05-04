<div class="row mb-4">
    <div class="col form-group">
        <label for="name" class="default mb-2">Product Name</label>
        <input type="text" class="form-control light" name="name" id="name" placeholder="Product Name"
            value="{{ $product->name ?? old('name') }}">
    </div>
</div>

<div class="row mb-4">
    <div class="col form-group">
        <label for="company" class="default mb-2">Company Name</label>
        <select class="form-control" name="company" id="company-select">
            <option value="Apple" value="apple"
                {{ isset($product) ? (Str::lower($product->company) == 'apple' ? 'selected' : '') : (old('name') == 'apple' ? 'selected' : '') }}>
                Iphone</option>
            <option value="samsung"
                {{ isset($product) ? (Str::lower($product->company) == 'samsung' ? 'selected' : '') : (old('name') == 'samsung' ? 'selected' : '') }}>
                Samsung</option>
        </select>
    </div>
    <div class="col form-group">
        <label for="phone_model" class="default mb-2">Phone modal</label><br>
        <select class="form-control" name="model" id="phone_model">
            <option class="phone-model" data-company="option">Select A Option</option>
            <option class="phone-model" data-company="Apple" value="iphone-11"
                {{ isset($product) ? (Str::lower($product->model) == 'iphone-11' ? 'selected' : '') : (old('name') == 'iphone-11' ? 'selected' : '') }}>
                iPhone 11</option>
            <option class="phone-model" data-company="Apple" value="iphone-12"
                {{ isset($product) ? (Str::lower($product->model) == 'iphone-12' ? 'selected' : '') : (old('name') == 'iphone-12' ? 'selected' : '') }}>
                iPhone 12</option>
            <option class="phone-model" data-company="Apple" value="iphone-12-pro"
                {{ isset($product) ? (Str::lower($product->model) == 'iphone-12-pro' ? 'selected' : '') : (old('name') == 'iphone-12-pro' ? 'selected' : '') }}>
                iPhone 12 pro</option>
            <option class="phone-model" data-company="Apple" value="iphone-13-pro"
                {{ isset($product) ? (Str::lower($product->model) == 'iphone-12-pro' ? 'selected' : '') : (old('name') == 'iphone-13-pro' ? 'selected' : '') }}>
                iPhone 13 pro</option>
            <option class="phone-model" data-company="samsung" value="samsung-s22"
                {{ isset($product) ? (Str::lower($product->model) == 'samsung-s22' ? 'selected' : '') : (old('name') == 'samsung-s22' ? 'selected' : '') }}>
                Samsung s22</option>
            <option class="phone-model" data-company="samsung" value="samsung-j7-prime"
                {{ isset($product) ? (Str::lower($product->model) == 'samsung-j7-prime' ? 'selected' : '') : (old('name') == 'samsung-j7-prime' ? 'selected' : '') }}>
                Samsung j7 prime</option>
            <option class="phone-model" data-company="samsung" value="samsung-a"
                {{ isset($product) ? (Str::lower($product->model) == 'samsung-a' ? 'selected' : '') : (old('name') == 'samsung-a' ? 'selected' : '') }}>
                Samsung A</option>
        </select>
    </div>
</div>

<div class="row mb-4">
    <div class="form-group">
        <label for="description" class="default mb-2">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Product Description"
            required>{{ $product->description ?? old('description') }}</textarea>
    </div>
</div>

<div class="row mb-2">
    <div class="col form-group">
        <label for="min_price" class="default mb-2">Mininum price</label><br>
        <input type="number" class="form-control" name="min_price" id="min_price" placeholder="Maximum Price"
            value="{{ $product->min_price ?? old('min_price') }}" required>
    </div>

    <div class="col form-group">
        <label for="max_price" class="default mb-2">Maximum Price</label>
        <input type="number" name="max_price" id="max_price" class="form-control"
            value="{{ $product->max_price ?? old('max_price') }}" required />
    </div>

    <div class="col form-group">
        <label for="end_time" class="default mb-2">End Time</label>
        <input name="end_time" id="end_time" class="form-control"  type="datetime-local"
            value="{{ $product->end_time ?? old('end_time') }}" required />
    </div>
</div>

<div class="row mb-4">
    <div class="form-group">
        <label for="image" class="default mb-2">Upload Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
        @if (isset($product->image))
            <img src="{{ asset('uploads/product/' . $product->image) }}" alt="image of {{ $product->name }}"
                height="250px">
        @endif
    </div>
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
