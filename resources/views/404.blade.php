@extends('tampilan.master')

@section('title','404')

@section('content')
<div style="margin-top: 150px" class="container px-4 px-lg-5 mb-5">
    <div class="card h-100">
        <div class="row">
            <div class="col">
                <div style="margin-top: 250px">
                </div>
                <div style="font-size:2rem"  class="text-center">
                Page Not Found!
                </div>
                <div style="font-size:1rem"  class="text-center">
                Sorry! The page you're looking for is not here.
                </div>
                <div class="col">
                    <div class="text-center">
                        <a class="btn btn-primary btn-block" href="/home">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container px-4 px-lg-5 mt-5">
                <img style="margin-top:85px;" class="card-img-top" src="/img/psyduck.jpg">
                    <div class="card-body p-4">
                </div>
            </div>
        </div>
    </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        </div>
    </div>
</div>

@endsection
