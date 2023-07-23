@extends('layouts.mainlayout2')

@section('maincontent')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row text-center pt-5">
            <h3>Bienvenue sur votre espace de travail</h3>
        </div>

        <div class="container p-4 position-relative border-radius" style="max-width: 300px;">
            <img src="{{asset('img/logo_rita.jpeg')}}" alt="logo" style="width: 100%; border-radius:50%;">
        </div>

    </div><!-- /.container-fluid -->
</section>

@endsection
