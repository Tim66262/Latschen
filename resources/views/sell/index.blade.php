@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Verkaufen</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" align="center">
                <h3>Oh, du willst Schuhe verkaufen!?  <i class="fas fa-info-circle" title="Füllen sie das Formular vollständig aus und schicken sie es ab. Falls der Preis nach unserem Ermessen realistisch ist, wird es freigegeben. Bitte beachten sie, dass von dem Preis 5% Vermittlungsgebühr abgezogen wird, falls ein Käufer gefunden werden kann" data-toggle="tooltip"></i></h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8" align="center">
                <form>
                    <div class="form-group">
                        <label for="shoesname">Schuhname</label>
                        <input type="text" class="form-control" id="shoesname" placeholder="Yeezy boost 350 v2 beluga">
                    </div>
                    <div class="form-group">
                        <label for="shoesquality">Qualität</label>
                        <select class="form-control" id="shoesquality">
                        <option>Neu</option>
                        <option>Leicht gebraucht</option>
                        <option>Stark gebraucht</option>
                        <option>Defekt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="shoesquality">Schuhkarton vorhanden</label>
                        <select class="form-control" id="shoesquality">
                        <option>Ja</option>
                        <option>Nein</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="shoesprice">Erwünschter Preis (Franken)</label>
                        <input type="number" min="50" class="form-control" id="shoesprice" value="100" step="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <button type="submit" class="btn btn-primary">Anfrage stellen</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection