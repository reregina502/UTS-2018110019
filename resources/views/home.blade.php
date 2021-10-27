@extends('tampilan.master')

@section('title','Home')

@section('content')

<div class="container position-relative py-5">
    <div class="row">
        <div class="col">
        <form action="/home/search/search_from_list"method="GET">
            <div class="input-group">
                <input name="nama" class="form-control" type="text" placeholder="Type Pokemon Name here..." aria-label="Type Pokemon Name here..." aria-describedby="button-search">
                <button style="color: white;" class="btn btn-dark" id="button-search" type="submit">Who's that Pokemon</button>
            </div>
        </form>
        </div>
        </div>
    <div class="row py-3">
        <div class="col">
            <a class="btn btn-warning btn-block" href="/home/surpriseme">Suprise Me!</a>
        </div>
        <div class="col">
            <a class="btn btn-success btn-block dropdown-toggle" href="#" data-toggle="dropdown">
                Order by
            </a>
            <div class="dropdown-menu  btn-block">
                <a class="dropdown-item" href="/home/Lowest_Number">Lowest Number</a>
                <a class="dropdown-item" href="/home/Highest_Number">Highest Number</a>
                <a class="dropdown-item" href="/home/A-Z">A-Z</a>
                <a class="dropdown-item" href="/home/Z-A">Z-A</a>
            </div>
        </div>
    </div>
</div>

<div class="container px-4 px-lg-5 mt-1">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @forelse ($pokemons as $pokemon)
        <div class="col mb-5">
            <div class="card h-100">
                <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                    #{{str_pad($pokemon->id, 3, "000", STR_PAD_LEFT)}}
                </div>
                <a href="/detail/{{$pokemon->id}}"><img class="card-img-right flex-auto d-none d-md-block"  data-src="holder.js/500x700?theme=thumb" alt="Thumbnail [500x700]" style="width: 200px; height: 250px;" src="/img/{{$pokemon->image}}" data-holder-rendered="true"></a>
                <div class="card-body p-4">
                    <div class="text-center">
                        {{$pokemon->name}}
                    </div>
                    <div class="text-center">
                        @php
                            $tipe=json_decode($pokemon->types);
                        @endphp
                        @foreach ($tipe as $types )
                        <div class="badge bg-success text-white">
                            {{$types}}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @empty

        @endforelse
    </div>
</div>
@endsection
