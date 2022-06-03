@extends('layouts.master')
@section('content')
        <!DOCTYPE html>
<html lang="en">
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
<section>
    <!--for demo wrap-->
    <h1>Liste des activités de </h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Date</th>
                <th>Lieu</th>
                <th>Thème</th>
                <th>Motif</th>
                <th>Spécialiste</th>
                <th> <a class="list-group-item" href="#">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </a>
                </th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>oui</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>

            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>+2.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>+2.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>+2.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>+2.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+0.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>-1.01</td>
                <td> <a class="list-group-item" href="#"><i class="fas fa-edit" aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a> <a class="list-group-item" href="#"><i class="fas fa-trash" aria-hidden="true"></i>&nbsp;</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
</div>
</body>
</html>
@stop