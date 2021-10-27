@extends('tampilan.master')

@section('title','Detail')

@section('content')

<div class="container px-4 px-lg-5 mt-5">
    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start py-3">
        <div class="col mb-1  col-md-6 col-sm-6 col-xs-12">
            @php
                if($evolution[0]->id-1<=0){
                    $evolve=151;

                }else {
                    $evolve=$evolution[0]->id-1;
                }
                if($evolution[0]->id+1>=151){
                    $evolve2=1;

                }else {
                    $evolve2=$evolution[0]->id+1;
                }
            @endphp
            <a class="btn btn-danger btn-block" href="/detail/{{$evolve}}">#{{str_pad($evolve,3,"000", STR_PAD_LEFT)}} {{$evolutions[$evolve-1]->name}}</a>
        </div>
        <div class="col mb-1  col-md-6 col-sm-6 col-xs-12">
            <a class="btn btn-success btn-block" href="/detail/{{$evolve2}}">#{{str_pad($evolve2,3,"000", STR_PAD_LEFT)}} {{$evolutions[$evolve2-1]->name}}</a>
        </div>
    </div>
</div>

<div class="container px-4 px-lg-5 mt-1">
    @forelse ($evolution as $pokemon)
    <div class="card h-100">
        <div class="row">
            <div class="col">
                <img style="margin-top:85px;" class="card-img-top" src="/img/{{$pokemon->image}}">
                    <div class="card-body p-4">
                    </div>
            </div>
                <div style="margin-top:85px;" class="col">
                    <p>#{{str_pad($pokemon->id, 3, "000", STR_PAD_LEFT)}}</p>
                    <p style="font-size:3rem">{{$pokemon->name}}</p>
                    <p style="font-size:2rem">Abilities</p>
                    <p>
                    @php
                    $tipe=json_decode($pokemon->types);
                    @endphp
                    @foreach ($tipe as $types )
                        <div class="badge bg-success text-white">
                            {{$types}}
                        </div>
                    @endforeach
                    </p>
                    <p style="font-size:2rem">Profile</p>
                    <hr style="height:2px;border-width:0;color:rgb(2, 2, 2);background-color:rgb(2, 2, 2); opacity: 2;">
                    <div class="row">
                        <div class="col-auto font-weight-bold">
                            Height
                        </div>
                        <div class="col">
                            {{$pokemon->height}}ft. ({{substr($pokemon->height/0.3048,0,-11)}}m)
                        </div>
                        <div class="col-auto font-weight-bold">
                            Weight
                        </div>
                        <div class="col">
                            {{$pokemon->weight}}lbs ({{substr($pokemon->weight*0.45359237,0,-7)}}kg)
                        </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(0, 0, 0); opacity: 1;">
                    <div class="row">
                        <div class="col-auto font-weight-bold">
                            Species
                        </div>
                        <div class="col">
                            {{$pokemon->species}}
                        </div>
                        <div class="col-auto font-weight-bold">
                            Types
                        </div>
                        <div class="col">
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
                    <p style="font-size:2rem; margin-top:30px;">
                        Stats
                    </p>
                    <div class="row"><div class-#{$color}to">
                        <p class="col-auto font-weight-bold">HP</p>
                        <p class="col-auto font-weight-bold">Attack</p>
                        <p class="col-auto font-weight-bold">Defense</p>
                        <p class="col-auto font-weight-bold">Sp.Attack</p>
                        <p class="col-auto font-weight-bold">Sp.Defense</p>
                        <p class="col-auto font-weight-bold">Speed</p>
                        </div>
                        <div class="col">
                            <div class="progress"> <div class="progress-bar bg-primary" role="progressbar" style="width: {{$pokemon->hp/2}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="text-left">{{$pokemon->hp}}</div>
                            </div></div>
                            <div style="margin-top:25px;" class="progress"> <div class="progress-bar bg-secondary" role="progressbar"  style="width: {{$pokemon->attack/2}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="text-left">{{$pokemon->attack}}</div>
                            </div></div>
                            <div style="margin-top:25px;" class="progress"> <div class="progress-bar bg-success" role="progressbar" style="width: {{$pokemon->defense/2}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="text-left">{{$pokemon->defense}}</div>
                            </div></div>
                            <div style="margin-top:20px;" class="progress"> <div class="progress-bar bg-danger" role="progressbar" style="width: {{$pokemon->sp_attack/2}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="text-left">{{$pokemon->sp_attack}}</div>
                            </div></div>
                            <div style="margin-top:20px;" class="progress"> <div class="progress-bar bg-warning" role="progressbar" style="width: {{$pokemon->sp_defense/2}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="text-left">{{$pokemon->sp_defense}}</div>
                            </div></div>
                            <div style="margin-top:24px;" class="progress"> <div class="progress-bar bg-info" role="progressbar" style="width: {{$pokemon->speed/2}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="text-left">{{$pokemon->speed}}</div>
                            </div></div>
                        </div></div>
            </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                EVOLUTIONS
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @php
                        $evolusi=json_decode($evolution[0]->evolutions);
                    @endphp
                    @forelse ($evolusi as $berubah)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                #{{str_pad($evolutions[$berubah-1]->id, 3, "000", STR_PAD_LEFT)}}
                            </div>
                            <a href="/detail/{{$evolutions[$berubah-1]->id}}"><img class="card-img-right flex-auto d-none d-md-block"  data-src="holder.js/500x700?theme=thumb" alt="Thumbnail [500x700]" style="width: 200px; height: 250px;" src="/img/{{$evolutions[$berubah-1]->image}}" data-holder-rendered="true"></a>
                                <div class="card-body p-2">
                                    <div class="text-center">
                                        {{$evolutions[$berubah-1]->name}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col mb-5">
                            <div class="card h-100">
                                    <div class="card-body p-2">
                                        <div class="text-center">
                                            No Evolution for this Pokemon
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty

    @endforelse
</div>
@endsection
