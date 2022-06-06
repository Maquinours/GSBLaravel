@extends('layouts.master')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/131a59443f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('assets/js/confirm.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/liste.css')}}">
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
                <th>Modifier</th>
                <th>Supprimer</th>
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
                    </td>
                    <td>
                        <a class="list-group-item" style="cursor: pointer;" onclick='needConfirm("Souhaitez-vous vraiment supprimer cette activité ?", "{{url("deleteActivite/$praticien->id_praticien/$activite->id_activite_compl")}}")'><i class="fas fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <button class="custom-btn btn-3">
        <a href="{{url("formInsertActivite/$praticien->id_praticien")}}">
            <span>Ajouter</span>
        </a>
    </button>
</section>
</body>

@stop