@extends('layouts.master')
@section('content')
<head>
    <script src="https://kit.fontawesome.com/131a59443f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('assets/js/search.js')}}"></script>
    <script type="text/javascript">initSpecialites({!! $posseders !!})</script>

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
        <h1>Liste des praticiens</h1>

        <div class="grid grid-2">
            <input type="text" id="nameSearch" onkeyup="searchNom()" placeholder="Rechercher par nom">
            <select id="specialiteSearch" onchange="searchSpecialite()">
                <option selected disabled>-- Spécialité --</option>
                @foreach($specialites as $specialite)
                    <option value="{{$specialite->id_specialite}}">{{$specialite->lib_specialite}}</option>
                @endforeach
            </select>
            <button onclick="resetSearch()">Afficher tout</button>
        </div>

        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th style="display: none">Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Type</th>
                    <th>Adresse</th>
                    <th>Spécialites</th>
                    <th>Activités</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0" id="listPraticiens">
                <tbody>
                @foreach($praticiens as $praticien)
                    <tr>
                        <td style="display: none">{{$praticien->id_praticien}}</td>
                        <td>{{$praticien->nom_praticien}}</td>
                        <td>{{$praticien->prenom_praticien}}</td>
                        <td>{{$praticien->lib_type_praticien}}</td>
                        <td>{{$praticien->adresse_praticien}}, {{$praticien->cp_praticien}} {{$praticien->ville_praticien}}</td>
                        <td><a href="{{url("specialites/$praticien->id_praticien")}}"><i class="fa-solid fa-list"></i></a></td>
                        <td><a href="{{url("activites/$praticien->id_praticien")}}"><i class="fa-solid fa-list"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>
@stop