@extends('layouts.mainlayout')

@section('maincontent')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-dark" style="border-left: 3px solid black;">
                    <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-dark">
                            Nombre de cas
                        </div>
                    </div>
                    <div class="inner">
                        <h3>{{$cameroun->count()}}</h3>
                        <h3>Cameroun</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-warning" style="border-left: 3px solid black;">
                    <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-warning">
                            Nombre de cas
                        </div>
                    </div>
                    <div class="inner">
                        <h3>{{$centraf->count()}}</h3>
                        <h3>Centrafrique</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-folder-open"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary" style="border-left: 3px solid #F3695A;">
                    <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-secondary">
                            Nombre de cas
                        </div>
                    </div>
                    <div class="inner">
                        <h3>{{$congo->count()}}</h3>
                        <h3>Congo</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <a href="1202" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-danger" style="border-left: 3px solid #E487E4;">
                    <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-danger">
                            Nombre de cas
                        </div>
                    </div>
                    <div class="inner">
                        <h3>{{$gabon->count()}}</h3>
                        <h3>Gabon</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-success" style="border-left: 3px solid #9AE6AD;">
                    <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-success">
                            Nombre de cas
                        </div>
                    </div>
                    <div class="inner">
                        <h3>{{$guinee->count()}}</h3>
                        <h3>Guinée-equatoriale</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-basket"></i>
                    </div>
                    <a href="" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4">
                <!-- small box -->
                <div class="small-box bg-info" style="border-left: 3px solid #95A3E7;">
                    <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-info">
                            Nombre de cas
                        </div>
                    </div>
                    <div class="inner">
                        <h3>{{$tchad->count()}}</h3>
                        <h3>Tchad</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
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
