@extends('layouts.mainlayout')

@section('maincontent')
    <div class="row">
        <div class="col-12">
            <div class="card shadow border-radius" style="margin-top: 100px;">
                <div class="card-body table-responsive p-3" style="height: 300px;">
                    <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Supp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nom}}</td>
                                    <td>{{$user->prenom}}</td>
                                    <td>{{$user->telephone}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a onClick="return confirm('You sure??');" href="{{url ('destroyUser/'.$user->id) }}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
