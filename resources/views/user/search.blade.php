@foreach($products as $product)
<div class="card shadow" style="width: 18rem;">
    <div class="text-center p-2 " style="width: 100%">
        <img src="{{ asset('storage/images/'.$product->imageuri) }}" style="height: 220px; width:220px" class="card-img-top" alt="...">

    </div>
    <div class="card-body d-flex flex-column align-items-center">
        <h5 class="fw-bold card-title"><span>#1</span> {{$product->name}}</h5>
        <p class="card-text" style="height: 76px; overflow: hidden">{{$product->description}}</p>
        <div class="prixinfo d-flex gap-5">
            <button class="btn btn-danger">$ {{$product->price}}</button>
            <button class="btn btn-primary">Order Now</button>  
        </div>
    </div>
</div>
@endforeach