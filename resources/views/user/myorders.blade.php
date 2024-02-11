@extends('user.layoutUser')
@section('content')
<div class="container pt-4">
    <div id="allProducts"  style="min-width: 600px; " class="d-flex flex-wrap gap-4 justify-content-between align-items-center">
        @if(!isset($sales[0]))
        <div class="d-flex justify-content-center w-100 h2 text-secondary fw-bold">
            Not Order Yet !!!
        </div>
        @else
        <form action="/Payment" method="POST">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                <tr>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Quantite</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @php
                    $total = 0;
                    @endphp
                    @foreach($sales as $sale)
                    @php
                    $total += $sale->quantite * $sale->price;
                    @endphp
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/images/'.$sale->product->imageuri) }}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                <p class="fw-bold mb-1">{{$sale->product->name}}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1 text-warning">{{$sale->status}} </p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">$ {{$sale->price}} </p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"> {{$sale->quantite}} </p>
                        </td>
                        <td colspan="2">
                            <p class="fw-normal mb-1 fw-bold">$ {{$sale->quantite * $sale->price}} </p>
                        </td>
                    </tr>
                    <input type="hidden" name="sale_id[]" value=" {{$sale->id}}">
                @endforeach
                <tr>
                    <td colspan="4" class="fw-bold text-secondary">Total Payment</td>
                    <td  class="fw-normal mb-1 fw-bold">$ {{ $total}}</td>
                    <input type="hidden" name="totlaPayment" value="{{$total}}">
                    <td>
                        <button type="submit" class="btn btn-primary">
                            Paiement
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        @endif
    </div>
    <div class="pt-4 mt-2">
        {{-- {{$products->links()}} --}}
    </div>
</div>

@endsection