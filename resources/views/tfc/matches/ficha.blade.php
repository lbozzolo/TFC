<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Grilla TFC - Partido del Día</title>

    <!-- paste this code into your webpage -->
    <link href="assets/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- end -->

    <style>

        body{
            margin:0;
            padding:0;
            font:70% Arial, Helvetica, sans-serif;
            color:#555;
            line-height:150%;
            text-align:left;
        }
        a{
            text-decoration:none;
            color:#057fac;
        }
        a:hover{
            text-decoration:none;
            color:#999;
        }
        h1{
            font-size:140%;
            margin:0 20px;
            line-height:80px;
        }
        h2{
            font-size:120%;
        }
        #container{
            margin:0 auto;
            width:60%;
            background:#fff;
            padding-bottom:20px;
        }
        #content{margin:0 20px;}
        p.sig{
            margin:0 auto;
            width:680px;
            padding:1em 0;
        }
        form{
            margin:1em 0;
            padding:.2em 20px;
            background:#eee;
        }
        .margin1
        {
            height:150px !important;
        }
    </style>

</head>

<body>


    <h1><img src="logo-white.png" width="306" height="70" alt=""/></h1>
    <h1>Grilla TFC - Partido del Día</h1>



        <!-- all you need with Tablecloth is a regular, well formed table. No need for id's, class names... -->
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th style="text-align: center">Dia</th>
                <th style="text-align: center">Torneo</th>
                <th style="text-align: center">Sede</th>
                <th style="text-align: center">Cancha</th>
                <th style="text-align: center">Serie</th>
                <th style="text-align: center">Hora</th>
            </tr>
            <tr>
                <td>{{$match->date}}</td>
                <td>Bundesliga</td>
                <td>{{$match->Canchas->Sedes->name}}</td>
                <td>{{$match->Canchas->name}}</td>
                <td>{{$match->FasesWeek->Fases->name}}</td>
                <td>{{$match->hour}}</td>
            </tr>

        </table>


        <table cellspacing="0" cellpadding="0">
            <tr>
                <th colspan="7">{{$match->HomeTeam->name}}</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Firma</th>
                <th>N°</th>
                <th>Amarilla</th>
                <th>Roja</th>
                <th>Goles</th>
                <th>Observaciones</th>
            </tr>
            <?php  $countH = 0; ?>
            @foreach($match->HomeTeam->Players as $player)

                <tr class="margin1">
                    <td>{{$player->fullName()}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php $countH++  ?>
            @endforeach



            @for($i = $countH ; $i <  20 ; $i++)
            <tr>
                <td>.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endfor


        </table>

    <table cellspacing="0" cellpadding="0">
        <tr>
            <th colspan="7">{{$match->HomeTeam->name}}</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th>Firma</th>
            <th>N°</th>
            <th>Amarilla</th>
            <th>Roja</th>
            <th>Goles</th>
            <th>Observaciones</th>
        </tr>
        <?php  $countA = 0; ?>
        @foreach($match->AwayTeam->Players as $player)

            <tr>
                <td>{{$player->fullName()}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php $countA++  ?>
        @endforeach



        @for($i = $countA ; $i <  20 ; $i++)
            <tr>
                <td>.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endfor


    </table>

    <h2>Resultado Final</h2>

        <table width="38%" cellpadding="0" cellspacing="0">
            <tr>
                <th width="18%">{{$match->HomeTeam->name}}</th>
                <td width="82%">.</td>
            </tr>
            <tr>
                <th>{{$match->AwayTeam->name}}</th>
                <td>.</td>
            </tr>
        </table>

        <h2>&nbsp;</h2>

        <table cellspacing="0" cellpadding="0">
            <tr>
                <td>&nbsp;</td>
                <th>Nombre</th>
                <th>Firma</th>
            </tr>
            <tr>
                <th>Arbitro</th>
                <td>.</td>
                <td>.</td>
            </tr>
            <tr>
                <th>Juez de Linea 1</th>
                <td>.</td>
                <td>.</td>
            </tr>
            <tr>
                <th>Juez de Linea 2</th>
                <td>.</td>
                <td>.</td>
            </tr>
        </table>

        <h2>Observaciones</h2>

        <table width="38%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="82%">Campo de Observaciones</td>
            </tr>
        </table>




</body>
</html>