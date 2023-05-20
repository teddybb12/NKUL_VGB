@extends('layouts.mainlayout')

@section('maincontent')

    <div class="container">
        <h5 class="text-center mb-3">FICHE DE SUIVI</h5>
        <div class="d-flex justify-content-center" style="font-style: italic">
            <h6>Code référence :</h6>
            <p>&nbsp &nbsp RITA
                {{ date('Y') }}/{{ $finds->pays }}/{{ $finds->user->association }}/00{{ $finds->id }}</p>
        </div>

        <h5 class="mt-3">IDENTIFICATION DE L’OBSERVATEUR (RICE)</h5>

        <div class="d-flex mt-3">
            <p style="font-weight: bold">Nom et prénom : </p>
            <p>&nbsp &nbsp &nbsp{{ $finds->user->nom }} {{ $finds->user->prenom }}</p>
        </div>

        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p style="font-weight: bold">Contact : </p>
                <p>&nbsp &nbsp &nbsp{{ $finds->user->telephone }}</p>
            </div>
            <div class="d-flex">
                <p style="font-weight: bold">Pays : </p>
                <p>&nbsp &nbsp &nbsp{{ $finds->user->pays }}</p>
            </div>
            <div class="d-flex">
                <p style="font-weight: bold">Ville : </p>
                <p>&nbsp &nbsp &nbsp{{ $finds->user->ville }}</p>
            </div>
        </div>

        <div class="d-flex">
            <p style="font-weight: bold">Association : </p>
            <p>&nbsp &nbsp &nbsp{{ $finds->user->association }}</p>
        </div>

        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p style="font-weight: bold">Date de couverture : </p>
                <p>&nbsp &nbsp &nbsp{{ $finds->date_couverture }}</p>
            </div>
            <div class="d-flex">
                <p style="font-weight: bold">Lieu de couverture : </p>
                <p>&nbsp &nbsp &nbsp{{ $finds->lieu_incident }}</p>
            </div>
        </div>
        <hr>
        <h5 class="mt-3">IDENTIFICATION DE/DES SURVIVANTS(ES)</h5>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">{{ $finds->identite_genre }}  &nbsp &nbsp &nbsp &nbsp &nbsp</label>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">{{ $finds->orientation_sexuel }}</label>
        </div>
        <table class="table table-bordered mb-3">
            <thead>
                <tr>
                    <th scope="col">Code unique</th>
                    <th scope="col">Let</th>
                    <th scope="col">Age</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Pays</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Quartier</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $finds->code_unique }}</th>
                    <td>{{ $finds->let }}</td>
                    <td>{{ $finds->age }}</td>
                    <td>{{ $finds->occupation }}</td>
                    <td>{{ $finds->pays }}</td>
                    <td>{{ $finds->ville }}</td>
                    <td>{{ $finds->quartier }}</td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex m5-3">
            <p style="font-weight: bold">Date de référencement de la/du survivant(e):</p>
            <p>&nbsp &nbsp &nbsp{{ $finds->date_couverture }}</p>
        </div>

        <div class="d-flex mt-3">
            <p style="font-weight: bold">Organisation référente de la/du survivante :</p>
            <p>&nbsp &nbsp &nbsp{{ $finds->organisation_refere }}</p>
        </div>

        <div class="d-flex mt-3">
            <p style="font-weight: bold">Référé pour service de :</p>
            <p>&nbsp &nbsp &nbsp{{ $finds->referer_pour }}</p>
        </div>

        <div class="mt-3 mb-3">
            <p style="font-weight: bold">Service reçu :</p>
            <p>&nbsp &nbsp &nbsp{{ $finds->s_recu }}</p>
        </div>

        <div class="mt-3 mb-3">
            <p style="font-weight: bold">Que pensez-vous du service reçu ?</p>
            <p>&nbsp &nbsp &nbsp{{ $finds->pense_srecu }}</p>
        </div>

        <div class="mt-3 mb-3">
            <p style="font-weight: bold">Situation actuelle de la/du survivant(e)</p>
            <p>&nbsp &nbsp &nbsp{{ $finds->etat_actuel }}</p>
        </div>

    </div>
    
@endsection
