@extends('layouts.master')
@section('content')
        <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Activité</title>
    @isset($inviter)
    @else
    <script type="text/javascript" src="{{asset('assets/js/selectActivite.js')}}"></script>
    <script type="text/javascript">
        init({!! json_encode($activites) !!});
    </script>
    @endisset
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

        /* RESET RULES
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        :root {
            --white: #afafaf;
            --red: #e31b23;
            --bodyColor: #292a2b;
            --borderFormEls: hsl(0, 0%, 10%);
            --bgFormEls: hsl(0, 0%, 14%);
            --bgFormElsFocus: hsl(0, 7%, 20%);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
        }


        a {
            color: inherit;
        }

        input,
        select,
        textarea,
        button {
            font-family: inherit;
            font-size: 100%;
        }

        button,
        label {
            cursor: pointer;
        }

        select {
            appearance: none;
        }

        /* Remove native arrow on IE */
        select::-ms-expand {
            display: none;
        }

        /*Remove dotted outline from selected option on Firefox*/
        /*https://stackoverflow.com/questions/3773430/remove-outline-from-select-box-in-ff/18853002#18853002*/
        /*We use !important to override the color set for the select on line 99*/
        select:-moz-focusring {
            color: transparent !important;
            text-shadow: 0 0 0 var(--white);
        }

        textarea {
            resize: none;
        }

        ul {
            list-style: none;
        }

        body {
            font: 18px/1.5 "Open Sans", sans-serif;
            background: linear-gradient(#141e30, #243b55);
            color: var(--white);

        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }


        /* FORM ELEMENTS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form h1 {
            margin-bottom: 1.5rem;
        }

        .my-form li,
        .my-form .grid > *:not(:last-child) {
            margin-bottom: 1.5rem;
        }

        .my-form select,
        .my-form input,
        .my-form textarea,
        .my-form button {
            width: 100%;
            line-height: 1.5;
            padding: 15px 10px;
            border: 1px solid var(--borderFormEls);
            color: var(--white);
            background: var(--bgFormEls);
            transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
            transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form textarea {
            height: 170px;
        }

        .my-form ::placeholder {
            color: inherit;
            /*Fix opacity issue on Firefox*/
            opacity: 1;
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus,
        .my-form button:enabled:hover,
        .my-form button:focus,
        .my-form input[type="checkbox"]:focus + label {
            background: var(--bgFormElsFocus);
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus {
            transform: scale(1.02);
        }

        .my-form *:required,
        .my-form select {
            background-repeat: no-repeat;
            background-position: center right 12px;
            background-size: 15px 15px;
        }

        .my-form *:required {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);
        }

        .my-form select {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
        }

        .my-form *:disabled {
            cursor: default;
            filter: blur(2px);
        }


        /* FORM BTNS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form .required-msg {
            display: none;
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
            no-repeat center left / 15px 15px;
            padding-left: 20px;
        }

        .my-form .btn-grid {
            position: relative;
            overflow: hidden;
            transition: filter 0.2s;
        }

        .my-form button {
            font-weight: bold;
        }

        .my-form button > * {
            display: inline-block;
            width: 100%;
            transition: transform 0.4s ease-in-out;
        }

        .my-form button .back {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-110%, -50%);
        }

        .my-form button:enabled:hover .back,
        .my-form button:focus .back {
            transform: translate(-50%, -50%);
        }

        .my-form button:enabled:hover .front,
        .my-form button:focus .front {
            transform: translateX(110%);
        }


        /* CUSTOM CHECKBOX
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form input[type="checkbox"] {
            position: absolute;
            left: -9999px;
        }

        .my-form input[type="checkbox"] + label {
            position: relative;
            display: inline-block;
            padding-left: 2rem;
            transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form input[type="checkbox"] + label::before,
        .my-form input[type="checkbox"] + label::after {
            content: '';
            position: absolute;
        }

        .my-form input[type="checkbox"] + label::before {
            left: 0;
            top: 6px;
            width: 18px;
            height: 18px;
            border: 2px solid var(--white);
        }

        .my-form input[type="checkbox"]:checked + label::before {
            background: var(--red);
        }

        .my-form input[type="checkbox"]:checked + label::after {
            left: 7px;
            top: 7px;
            width: 6px;
            height: 14px;
            border-bottom: 2px solid var(--white);
            border-right: 2px solid var(--white);
            transform: rotate(45deg);
        }


        /* FOOTER
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        footer {
            font-size: 1rem;
            text-align: right;
            backface-visibility: hidden;
        }

        footer a {
            text-decoration: none;
        }

        footer span {
            color: var(--red);
        }


        /* MQ
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        @media screen and (min-width: 600px) {
            .my-form .grid {
                display: grid;
                grid-gap: 1.5rem;
            }

            .my-form .grid-2 {
                grid-template-columns: 1fr 1fr;
            }

            .my-form .grid-3 {
                grid-template-columns: auto auto auto;
                align-items: center;
            }

            .my-form .grid > *:not(:last-child) {
                margin-bottom: 0;
            }

            .my-form .required-msg {
                display: block;
            }
        }

        @media screen and (min-width: 541px) {
            .my-form input[type="checkbox"] + label::before {
                top: 50%;
                transform: translateY(-50%);
            }

            .my-form input[type="checkbox"]:checked + label::after {
                top: 3px;
            }
        }
    </style>
</head>
<body>
<br><br>
<form class="my-form">
    <div class="container">
        <h1>Activité ajout/modification</h1>
        <ul>
            <li>
                @isset($inviter)
                    <select disabled>
                        <option selected>{{$inviter->date_activite}}</option>
                    </select>
                @else
                <select required id="selectDate" onchange="dateChanged()">
                    <option selected disabled>-- Date --</option>
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
                    <option selected disabled>-- Thème --</option>
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
                    <option selected disabled>-- Motif --</option>
                </select>
                @endisset
            </li>
            <input type="hidden" name="idActivite">
            <li>
                <div class="grid grid-2">
                    @isset($inviter)
                        <input type="text" placeholder="Specialiste" value="{{$inviter->specialiste}}" required>
                    @else
                    <input type="text" placeholder="Specialiste" required>
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
    </div>
</form>
</body>
</html>
@stop