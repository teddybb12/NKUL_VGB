@extends('layouts.mainlayout')

@section('maincontent')
    <!-- SELECT2 EXAMPLE -->
    <div class="container p-4 position-relative border-radius" style="max-width: 1000px;">
    <form action="{{route('gestion_users.store')}}" class="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow p-3 border-radius">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Prenom</label>
                            <input type="text" name="prenom" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="number" name="telephone" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role_id" class="form-control select" style="width: 100%;" required>
                                @foreach (App\Models\role::all() as $role)
                                    <option value="{{$role->id}}">{{$role->label}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pays</label>
                            <input type="text" name="pays" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" name="ville" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Association / leaderE Trans</label>
                            <input type="text" name="association" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-3">
                <button onClick="return confirm('You sure??');" class="btn btn-dark" type="submit">Enregistrer</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </div>
        </div>
    </form>
    </div>
    <!-- /.card -->
@endsection
