@extends('layouts.mainlayout')

@section('maincontent')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-warning bold-800 text-uppercase">Nombre de cas</h3>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary" style="border-left: 3px solid black;">
                    <!-- <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-dark">
                            Nombre de cas
                        </div>
                    </div> -->
                    <div class="inner">
                        <h3>{{$cameroun->count()}}</h3>
                        <h5>Cameroun</h5>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary" style="border-left: 3px solid black;">
                    <!-- <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-warning">
                            Nombre de cas
                        </div>
                    </div> -->
                    <div class="inner">
                        <h3>{{$centraf->count()}}</h3>
                        <h5>Centrafrique</h5>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary" style="border-left: 3px solid #F3695A;">
                    <!-- <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-secondary">
                            Nombre de cas
                        </div>
                    </div> -->
                    <div class="inner">
                        <h3>{{$congo->count()}}</h3>
                        <h5>Congo</h5>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <a href="1202" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary" style="border-left: 3px solid #E487E4;">
                    <!-- <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-danger">
                            Nombre de cas
                        </div>
                    </div> -->
                    <div class="inner">
                        <h3>{{$gabon->count()}}</h3>
                        <h5>Gabon</h5>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary" style="border-left: 3px solid #9AE6AD;">
                    <!-- <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-success">
                            Nombre de cas
                        </div>
                    </div> -->
                    <div class="inner">
                        <h3>{{$guinee->count()}}</h3>
                        <h5>Guinée-equatoriale</h5>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary" style="border-left: 3px solid #95A3E7;">
                    <!-- <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-info">
                            Nombre de cas
                        </div>
                    </div> -->
                    <div class="inner">
                        <h3>{{$tchad->count()}}</h3>
                        <h5>Tchad</h5>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

@endsection
