@extends('layouts.app')

@section('content')
 <div class="container">
 <div class="row justify-content-center">
        <div class="col-md-8">
          <form methode="post" action="{{ route('search') }}">
              @csrf
              <div class="form-group">
                  <input type="text" class="form-control">
                  <button type="submit" class="btn btn-primary">Rechercher</button>
              </div>
          </form>
<!-- variable ads integrer dans notre vu -->
        @foreach($ads as $ad)
        <div class="card mb-3" style="width: 100%;">
    <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$ad->title}}</h5>
        <small>{{ Carbon\Carbon::parse($ad->created_at)->diffForHumans() }}</small>
        <p class="card-text text-info">{{ $ad->localisation }}</p>
        <p class="card-text"> {{ $ad->description }}</p>
        <a href="#" class="btn btn-primary">Voir l'annonce</a>
    </div>
    </div>
    @endforeach
    {{ $ads->links() }} 
    <!-- bouclé chacune des annonces  -->
   
        </div>
    </div>
 </div>

@endsection

@section('extra-js')
<script>
   
</script>