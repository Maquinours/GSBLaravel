@extends('layouts.master')
@section('content')
<head>
    <title>Activité</title>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/form.css')}}">
    @isset($inviter)
    @else
    <script type="text/javascript" src="{{asset('assets/js/selectActivite.js')}}"></script>
    <script type="text/javascript">
        init({!! json_encode($activites) !!});
    </script>
    @endisset
</head>
<body>
<br><br>
    <div class="container">
        <h1>Activité ajout/modification</h1>
        @isset($inviter)
            {{ Form::open(array('url' => 'updateActivite', 'class' => 'my-form')) }}
        @else
            {{ Form::open(array('url' => 'insertActivite', 'class' => 'my-form')) }}
        @endisset
        <ul>
            <input type="hidden" name="idPraticien" value="{{$idPraticien}}">
            <li>
                @isset($inviter)
                    <select disabled>
                        <option selected>{{$inviter->date_activite}}</option>
                    </select>
                @else
                    <select required id="selectDate" onchange="dateChanged()">
                        <option value="" selected disabled>-- Date --</option>
                        @foreach($activites as $activite)
                            <option>{{$activite->date_activite}}</option>
                        @endforeach
                    </select>
                @endisset
            </li>
            <li>
                @isset($inviter)
                    <select disabled>
                        <option selected>{{$inviter->lieu_activite}}</option>
                    </select>
                @else
                    <select required id="selectLieu" onchange="lieuChanged()" disabled>
                        <option value="" selected disabled>-- Lieu --</option>
                    </select>
                @endisset
            </li>
            <li>
                @isset($inviter)
                    <select disabled>
                        <option selected>{{$inviter->theme_activite}}</option>
                    </select>
                @else
                <select required id="selectTheme" onchange="themeChanged()" disabled>
                    <option value="" selected disabled>-- Thème --</option>
                </select>
                @endisset
            </li>
            <li>
                @isset($inviter)
                    <select disabled>
                        <option selected>{{$inviter->motif_activite}}</option>
                    </select>
                @else
                <select required id="selectMotif" onchange="motifChanged()" disabled>
                    <option value="" selected disabled>-- Motif --</option>
                </select>
                @endisset
            </li>
            @isset($inviter)
                <input type="hidden" name="idActivite" value="{{$inviter->id_activite_compl}}">
            @else
                <input type="hidden" name="idActivite">
            @endisset
            <li>
                <div class="grid grid-2">
                    @isset($inviter)
                        <input type="text" minlength="1" maxlength="1" name="specialiste" placeholder="Specialiste" value="{{$inviter->specialiste}}" required>
                    @else
                        <input type="text" minlength="1" maxlength="1" name="specialiste" placeholder="Specialiste" required>
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