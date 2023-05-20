@extends('layouts.mainlayout2')

@section('maincontent')
    <!-- SELECT2 EXAMPLE -->
    <form action="{{route('store2')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <input name="user_id" type="text" value="{{ Auth::User()->id }}" hidden>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date couverture</label>
                            <input type="date" name="date_couverture" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Code unique</label>
                            <input type="text" name="code_unique" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Type de violence / violation</label>
                            <select name="type_violence_violation" class="form-control select1" style="width: 100%;">
                                <option value="Violences physiques">Violences physiques</option>
                                <option value="Violences psychologiques">Violences psychologiques</option>
                                <option value="Violences sexuelles">Violences sexuelles</option>
                                <option value="Arrestation arbitraire">Arrestation arbitraire</option>
                                <option value="Meurtre/Assassinat">Meurtre/Assassinat</option>
                                <option value="Refus de services et soins de santé">Refus de services et soins de santé</option>
                                <option value="Arnaque-Chantage-Extorsion">Arnaque-Chantage-Extorsion</option>
                                <option value="Discours haineux">Discours haineux</option>
                                <option value="Violence économique">Violence économique</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nature de la violence</label>
                            <input type="text" name="nature_violence" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Identité du genre</label>
                            <select name="identite_genre" class="form-control select1" style="width: 100%;">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Trans-homme">Trans-homme</option>
                                <option value="Trans-femme">Trans-femme</option>
                                <option value="Trans-non-binaire">Trans-non-binaire</option>
                                <option value="Queer">Queer</option>
                                <option value="Intersexe">Intersexe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Let</label>
                            <input type="text" name="let" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Occupation</label>
                            <input type="text" name="occupation" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pays</label>
                            <select name="pays" class="form-control select1" style="width: 100%;">
                                <option value="Cameroun">Cameroun</option>
                                <option value="Centrafrique">Centrafrique</option>
                                <option value="Congo">Congo</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Guinée-Equatoriale">Guinée-Equatoriale</option>
                                <option value="Tchad">Tchad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" name="ville" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Quartier</label>
                            <input type="text" name="quartier" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date incident</label>
                            <input type="date" name="date_incident" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Lieu incident</label>
                            <input type="text" name="lieu_incident" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Source information</label>
                            <select name="source_information" class="form-control select1" style="width: 100%;">
                                <option value="Survivant">Survivant</option>
                                <option value="Témoin">Témoin</option>
                                <option value="Réseaux sociaux">Réseaux sociaux</option>
                                <option value="Médias">Médias</option>
                                <option value="Auteur de l’incident">Auteur de l’incident</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Mode de collecte</label>
                            <select name="mode_collect" class="form-control select1" style="width: 100%;">
                                <option value="Interview face à face">Interview face à face</option>
                                <option value="Téléphone">Téléphone</option>
                                <option value="Analyse médias">Analyse médias</option>
                                <option value="Fouille documentaire">Fouille documentaire</option>
                                <option value="Observation terrain">Observation terrain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Transition</label>
                            <select name="transition" class="form-control select1" style="width: 100%;">
                                <option value="Pas commencé">Pas commencé</option>
                                <option value="Commencé">Commencé</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Etat de passing</label>
                            <select name="etat_passing" class="form-control select1" style="width: 100%;">
                                <option value="Aucun">Aucun</option>
                                <option value="Partiel">Partiel</option>
                                <option value="Complet">Complet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Auteur de la violence</label>
                            <input type="text" name="auteur_violence" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ancien.ne/nouveau.elle</label>
                            <input type="text" name="ancien" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Référer pour</label>
                            <input type="text" name="referer_pour" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Organisation référé</label>
                            <input type="text" name="organisation_refere" class="form-control select" style="width: 100%;" required>
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
    <!-- /.card -->
@endsection
