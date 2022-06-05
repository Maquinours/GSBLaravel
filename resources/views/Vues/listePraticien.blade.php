@extends('layouts.master')
@section('content')
<head>
    <script src="https://kit.fontawesome.com/131a59443f.js" crossorigin="anonymous"></script>
    <style>

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


    </style>
    <script>// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();</script>
</head>
<body id="body">
@isset($error)
    <p>Une erreur a eu lieu. Veuillez réessayer ultérieurement</p>
@else
    <section>
        <!--for demo wrap-->
        <h1>Liste praticien</h1>

        <div class="grid grid-2">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            <select required>
                <option value="" selected disabled>-- Spécialité --</option>
                <option value="1">1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>

        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
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
            <table cellpadding="0" cellspacing="0" border="0" id="myTable">
                <tbody>
                @foreach($praticiens as $praticien)
                    <tr>
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
@endif
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>
@stop