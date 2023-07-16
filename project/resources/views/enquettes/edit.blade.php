@extends('layouts.mainlayout2')

@section('maincontent')
    <div class="text-center">
        <h4>Documentation & suivi du cas:</h4>
        <p>RITA {{ date('Y') }}/{{ $finds->pays }}/{{ $finds->user->association }}/00{{ $finds->id }}</p>
    </div>
    <div class="container bg-white p-4 position-relative border-radius" style="max-width: 1000px;">
        <div class="col-md-12">
            <form action="{{route ('gestion_enquete.update', [$finds->id])}}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <h4 class="px-4 text-warning bold-800">Documentation</h4>
                <div class="card border-radius border-0 box-shadow p-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Detail de la violence</label>
                                    <textarea class="form-control" name="detail"value="{{$finds->detail}}" rows="2" style="width: 100%;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Qu’est ce qui a été fait ?</label>
                                    <textarea class="form-control" name="quest_ce_qui_ete_fait" value="{{$finds->quest_ce_qui_ete_fait}}" rows="2" style="width: 100%;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Que pensez-vous de ce qui a été fait ?</label>
                                    <textarea class="form-control" name="que_pensez_vous_ete_fait" value="{{$finds->que_pensez_vous_ete_fait}}" rows="2" style="width: 100%;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Attentes de la survivante</label>
                                    <textarea class="form-control" name="attentes_survivante" value="{{$finds->attentes_survivante}}" rows="2" style="width: 100%;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Qu’est ce qui doit être fait ?</label>
                                    <textarea class="form-control" name="quest_doit_etre_fait" value="{{$finds->quest_doit_etre_fait}}" rows="2" style="width: 100%;"></textarea>
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

        <div class="col-md-12">

            <form action="{{route ('gestion_enquete.update', [$finds->id])}}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <h4 class="px-4 pt-4 text-warning bold-800">Suivi</h4>
                <div class="card border-radius border-0 box-shadow p-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Service reçu</label>
                                    <textarea class="form-control" name="s_recu" value="{{$finds->s_recu}}" rows="2" style="width: 100%;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Que pensez-vous du service reçu ?</label>
                                    <textarea class="form-control" name="pense_srecu" value="{{$finds->pense_srecu}}" rows="2" style="width: 100%;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Situation actuelle de la/du survivant(e)</label>
                                    <textarea class="form-control" name="etat_actuel" value="{{$finds->etat_actuel}}" rows="2" style="width: 100%;"></textarea>
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
    </div>
@endsection
