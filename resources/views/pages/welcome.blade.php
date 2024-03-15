@extends('layouts.basic')

@section('title', 'Benvenuto | Home')



@section('main')
<main>
    <div class="container">
        <div class="row">
    
            @foreach ($trains as $item)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$item->azienda}}</h5>
                  <span class="card-subtitle mb-2">{{$item->stazione_partenza}} --></span>
                  <span class="card-subtitle mb-2">{{$item->stazione_arrivo}}</span>
                  <h6>{{$item->codice_treno}}</h6>

                  <h3>{{$item->orario_arrivo}}</h3>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</main>
     
@endsection
