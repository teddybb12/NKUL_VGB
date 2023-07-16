@extends('layouts.mainlayout2')

@section('maincontent')
    <div class="row">
        <div class="col-12">
            <div class="card box-shadow border-radius p-2">
                <div class="card-body table-responsive p-3" style="min-height: 300px;">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Date incident</th>
                                <th>Pays</th>
                                <th>Type violence</th>
                                <th>Nature violence</th>
                                <th>Identité genre</th>
                                <th>Suivi - Documentation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquettes as $enquette)
                                <tr>
                                    <td>{{$enquette->id}}</td>
                                    <td>{{$enquette->date_couverture}}</td>
                                    <td>{{$enquette->pays}}</td>
                                    <td>{{$enquette->type_violence_violation}}</td>
                                    <td>{{$enquette->nature_violence}}</td>
                                    <td>{{$enquette->identite_genre}}</td>
                                    <td><a href="{{ route ('gestion_enquete.show', [$enquette->id]) }}"><i class="fa fa-edit text-secondary" aria-hidden="true"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
