@extends('home')
@section('content')
   <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($produits as $produit)
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="{{asset('produits/'.$produit->photo_principale)}}" width="100%" height="300" alt="image"/>


            <div class="card-body">
              <p class="card-text">{{$produit->nom}} <br> {{$produit->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
       @endforeach
      </div>
    </div>
   </div>
@endsection