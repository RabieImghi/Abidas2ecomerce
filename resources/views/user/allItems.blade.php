@extends('user.layoutUser')
@section('content')
<div class="container d-flex align-items-start pt-4">
    <section class="flter" style="min-width: 250px; ">
        <h4 class="fw-bold text-secondary">Filter : </h4>
        <h5 class="fw-bold text-secondary pt-4">Search : </h5>
        <input type="search" onkeyup="search()" name="search" id="search" class="form-control" style="width: 90%" placeholder="search">
        <h5 class="fw-bold text-secondary pt-4">Category : </h5>
        <section class="d-flex flex-column gap-4">
            @foreach($categorys as $category)
            <label for="Check d-flex gap-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category_id" id="exampleRadios1" value="{{$category->id}}">
                    <label class="form-check-label" for="exampleRadios1">
                        {{$category->name}}
                    </label>
                </div>
            </label>
            @endforeach
        </section>
        <section class="mt-3 pt-4 pe-3">
            <h5 class="fw-bold text-secondary">Price : </h5>
            <input type="range" class="form-range" min="0" max="5000" id="minrange">
            <input type="range" class="form-range" min="5001" max="10000" id="maxrange">
            <div class="d-flex align-items-center justify-content-between">
                <input type="number" readonly id="minrang" class="p-2 border rounded-1 text-secondary fw-bold w-50" value="0">
                <input type="number" readonly id="maxrang" class="p-2 border rounded-1 text-secondary fw-bold w-50" value="5001"> 
            </div>
        </section>
        <script>
            const min = document.getElementById('minrange');
            const max = document.getElementById('maxrange');
            const minspan = document.getElementById('minrang');
            const maxspan = document.getElementById('maxrang');
            min.addEventListener('input', function() {
                minspan.value = this.value;
            });
            max.addEventListener('input', function() {
                maxspan.value = this.value;
            });
        </script>
    </section>
    <section >
        <div id="allProducts" class="d-flex flex-wrap gap-4 justify-content-between align-items-center">
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
        </div>
        <div class="pt-4 mt-2">
            {{$products->links()}}
        </div>
       
    </section>  
    <style>
        .flter{
            position: sticky;
            top: 130px;
        }    
    </style>  
    <script>
        function search(){
            var valueInput = document.getElementById('search').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("allProducts").innerHTML = xhttp.responseText;
                }
            };
            if(valueInput==''){
                var url = '/SearchProduct/AllProductSearch';
            }
            else {
                var url = '/SearchProduct/'+valueInput;
            }
           
            xhttp.open("GET", url, true);
            xhttp.send();  
        }
        
    </script>
</div>

@endsection