@extends('layouts.master')
@section('content')

<head>
    <title>Spécialité</title>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/form.css')}}">
</head>
<body>
<br><br>

    <div class="container">
        <h1>Spécialité ajout/modification</h1>
        @isset($posseder)
            {{ Form::open(array('url' => 'updateSpecialite', 'class' => 'my-form')) }}
        @else
            {{ Form::open(array('url' => 'insertSpecialite', 'class' => 'my-form')) }}
        @endisset
        <ul>
            <input type="hidden" name="idPraticien" value="{{$idPraticien}}">
            <li>
                @isset($posseder)
                    <input type="hidden" name="idSpecialite" value="{{$posseder->id_specialite}}">
                    <select disabled>
                        <option selected>{{$posseder->lib_specialite}}</option>
                    </select>
                @else
                <select name="idSpecialite" required>
                    <option value="" selected disabled>-- Spécialité --</option>
                    @foreach($specialites as $specialite)
                        <option value="{{$specialite->id_specialite}}">{{$specialite->lib_specialite}}</option>
                    @endforeach
                </select>
                @endisset
            </li>
            <li>
                <div class="grid grid-2">
                    @isset($posseder)
                        <input type="text" name="diplome" placeholder="Diplôme" value="{{$posseder->diplome}}" required>
                        <input type="number" step="0.01" name="coefPrescription" placeholder="Coef" value="{{$posseder->coef_prescription}}" required>
                    @else
                        <input type="text" name="diplome" placeholder="Diplôme" required>
                        <input type="number" step="0.01" name="coefPrescription" placeholder="Coef" required>
                    @endisset
                </div>
            </li>

            <li>
                <div class="grid grid-3">
                    <div class="required-msg">                </div>
                    <button class="btn-grid" type="submit" >
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
            </span>
                        <span class="front">VALIDER</span>
                    </button>
                    <button class="btn-grid" type="reset" >
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
            </span>
                        <span class="front">ANNULER</span>
                    </button>
                </div>
            </li>
        </ul>
        {{ Form::close() }}
    </div>
</form>
</body>
@stop