
@extends('layouts.mainlayout')

@section('maincontent')
    <div class="col-md-12">
        <a href="{{route('export_data')}}">Export data to excel</a>
        <br><br>
        @foreach ($enquettes as $enquette)
        
            <div class="card card-primary">
                <div class="card-body box-profile">

                    <div class="d-flex justify-content-center">
                        <p>
                            RITA{{ date('Y') }}/{{ $enquette->pays }}/{{ $enquette->user->association }}/00{{ $enquette->id }}
                        </p>
                    </div>
                    <p class="mt-2 text-center">
                            Code unique : {{ $enquette->code_unique }}
                    </p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Date incident</b> <a class="float-right">{{ $enquette->date_couverture }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Pays</b> <a class="float-right">{{ $enquette->pays }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Type violence</b> <a class="float-right">{{ $enquette->type_violence_violation }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nature violence</b> <a class="float-right">{{ $enquette->nature_violence }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Identité genre</b> <a class="float-right">{{ $enquette->identite_genre }}</a>
                        </li>
                    </ul>
                    <div class="d-flex" style="justify-content: space-between">
                        <a class="btn btn-primary" href="{{ url('print_info', [$enquette->id]) }}">document</a>
                        <a class="btn btn-primary" href="{{ url('print_info2', [$enquette->id]) }}">suivi</a>
                        <a class="btn btn-danger" onClick="return confirm('You sure??');" href="{{ url('destroyInfo/' . $enquette->id) }}">X</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

