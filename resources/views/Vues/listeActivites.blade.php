@extends('layouts.master')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/131a59443f.js" crossorigin="anonymous"></script>
    <style>
        a{
            text-decoration: none;
            color: inherit;
        }
        a:hover{
            color: #2aabd2;
        }
        h1{
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
        }
        table{
            width:100%;
            table-layout: fixed;
        }
        .tbl-header{
            background-color: rgba(255,255,255,0.3);
        }
        .tbl-content{
            height:300px;
            overflow-x:auto;
            margin-top: 0px;
            border: 1px solid rgba(255,255,255,0.3);
        }
        th{
            padding: 20px 15px;
            text-align: center;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
        }
        td{
            padding: 15px;
            text-align: center;
            vertical-align:middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border-bottom: solid 1px rgba(255,255,255,0.1);
        }


        /* demo styles */

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        body{

            background: linear-gradient(#141e30, #243b55);
            font-family: 'Roboto', sans-serif;
        }
        section{
            margin: 50px;
        }


        /* follow me template */
        .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: #fff;
        }
        .made-with-love i {
            font-style: normal;
            color: #F50057;
            font-size: 14px;
            position: relative;
            top: 2px;
        }
        .made-with-love a {
            color: #fff;
            text-decoration: none;
        }
        .made-with-love a:hover {
            text-decoration: underline;
        }


        /* for custom scrollbar for webkit browser*/

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        button {
            margin: 20px;
        }
        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
            7px 7px 20px 0px rgba(0,0,0,.1),
            4px 4px 5px 0px rgba(0,0,0,.1);
            outline: none;
        }
        .btn-3 {
            background: rgb(0,172,238);
            background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
            width: 130px;
            height: 40px;
            line-height: 42px;
            padding: 0;
            border: none;

        }
        .btn-3 span {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }
        .btn-3:before,
        .btn-3:after {
            position: absolute;
            content: "";
            right: 0;
            top: 0;
            background: rgba(2,126,251,1);
            transition: all 0.3s ease;
        }
        .btn-3:before {
            height: 0%;
            width: 2px;
        }
        .btn-3:after {
            width: 0%;
            height: 2px;
        }
        .btn-3:hover{
            background: transparent;
            box-shadow: none;
        }
        .btn-3:hover:before {
            height: 100%;
        }
        .btn-3:hover:after {
            width: 100%;
        }
        .btn-3 span:hover{
            color: rgba(2,126,251,1);
        }
        .btn-3 span:before,
        .btn-3 span:after {
            position: absolute;
            content: "";
            left: 0;
            bottom: 0;
            background: rgba(2,126,251,1);
            transition: all 0.3s ease;
        }
        .btn-3 span:before {
            width: 2px;
            height: 0%;
        }
        .btn-3 span:after {
            width: 0%;
            height: 2px;
        }
        .btn-3 span:hover:before {
            height: 100%;
        }
        .btn-3 span:hover:after {
            width: 100%;
        }


    </style>
    <script>// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();</script>
</head>
<body id="body">
<section>
    <!--for demo wrap-->
    <h1>Liste des activités de {{$praticien->prenom_praticien}} {{$praticien->nom_praticien}}</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Date</th>
                <th>Lieu</th>
                <th>Thème</th>
                <th>Motif</th>
                <th>Spécialiste</th>
                <th>Modifier Supprimer</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            @foreach($activites as $activite)
                <tr>
                    <td>{{$activite->date_activite}}</td>
                    <td>{{$activite->lieu_activite}}</td>
                    <td>{{$activite->theme_activite}}</td>
                    <td>{{$activite->motif_activite}}</td>
                    <td>{{$activite->specialiste}}</td>
                    <td>
                        <a class="list-group-item" href={{url("formUpdateActivite/$praticien->id_praticien/$activite->id_activite_compl")}}><i class="fas fa-edit" aria-hidden="true"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <button type="submit" class="custom-btn btn-3">
        <!-- <input type="submit" hidden> -->
        <span>Ajouter</span>
    </button>
</section>
</body>

@stop