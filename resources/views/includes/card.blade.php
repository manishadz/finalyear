<h2 class="mt-4 mb-2 mx-auto text-center">Featured Products</h2>



<div class="row row-cols-1 row-cols-md-4 g-4 h-100">
    @foreach($products as $product)
    <div class="col">
      <div class="card">

         <div class="d-flex align-items-center justify-content-between p-2">
            <h6>Ends in <span style="color: red">{{ $product->end_time }}</span class=""></h6>
                <h6><span>{{ $product->category }}</span></h6>
         </div>
        <img class="img-thumbnail"  src="{{ asset('uploads/product/'.$product->image) }}" class="card-img-top"
          alt="Hollywood Sign on The Hill" style="height: 200px;  object-fit:cover; object-position:center" />
        <div class="card-body mx-auto">
          <h5 class="card-title justify-content-between">{{ $product->name }}</h5>
          <p class="card-text ">
          <h5 class="justify-content-between" style="color: rgba(33, 252, 124, 0.918)">starts from NRS:50</h5>
          </p>
          <a href="{{ route('product', $product->id) }}" class="btn btn-primary d-grid gap-3">See Details</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
