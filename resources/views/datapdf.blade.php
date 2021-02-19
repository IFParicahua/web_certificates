<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            font-family: sans-serif;
            font-size: 14px;
          }
        .title1{
            text-align: start;
            border-right: none;
        }
        .title2{
            border-right: none;
            border-left: none;
        }
        .title3{
            border-left: none;
        }
        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            margin: 0 0 1em 0;
            caption-side: top;
         }
         caption, td, th {
            padding: 0.3em;
         }
         th, td {
            border: 1px solid #000;
         }
         th:lastchild, td:lastchild {
             border-right: 0;
         }
         th {
            width: 25%;
            padding-bottom: 5px;
         }
    </style>
    <br>
{{--
    <table border="1">
        <tr>
          <td colspan="3">alfa</td>
          <td>bravo</td>
          <td rowspan="2">charlie</td>
        </tr>
        <tr>
          <td>delta</td>
          <td>echo</td>
          <td>foxtrot</td>
          <td>golf</td>
        </tr>
        <tr>
          <td>hotel</td>
          <td colspan="3" rowspan="2">india</td>
          <td>juliet</td>
        </tr>
        <tr>
          <td>kilo</td>
          <td>lima</td>
        </tr>
        <tr>
          <td>mike</td>
          <td>november</td>
          <td>oscar</td>
          <td>papa</td>
          <td>quebec</td>
        </tr>
    </table>  --}}


        <table>
            <thead>
                <tr>
                    <th colspan="5" class="title1">
                        <img src="../public/img/logo_las_lomas-04.png" style="height: 120px" alt="">
                    </th>
                    <td colspan="7" class="title2">
                        Las Lomas Ltda. <br>
                        Primera Siderúrgica Boliviana<br>
                        Telf.: 3593500 <br>
                        Santa Cruz - Bolivia
                    </td>
                    <td colspan="6" class="title3">
                        Nº 2123154444 <br>
                        Versión: 0001 <br>
                        Fecha:{{ $fecha }}
                    </td>
                </tr>
                <tr>
                    <th colspan="18" style="padding-bottom: 0px">
                        <h3>CERTIFICADO DE CALIDAD</h3>
                    </th>
                </tr>
                <tr>
                    {{--  <th rowspan="2">id</th>  --}}
                    <th rowspan="2">Colada</th>
                    <th colspan="5">Datos macanicos</th>
                    <th rowspan="2">Doblado</th>
                    <th colspan="11">%</th>
                </tr>
                <tr>
                    <th>Masa Lineal</th>
                    <th>Fy(MPa)</th>
                    <th>Fs(MPa)</th>
                    <th>Fs/Fy</th>
                    <th>ALARGAM.</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                </tr>
                {{--  <tr>
                    <th colspan="1">Masa Lineal</th>
                    <th colspan="1"></th>
                    <th colspan="1"></th>
                    <th colspan="1">Fs/Fy</th>
                    <th colspan="1">ALARGAM.</th>
                </tr>  --}}
            </thead>
            <tbody>
                @forelse ($valores as $valor)
                    <tr>
                        {{--  <td>{{ $valor->id }}</td>  --}}
                        <td>{{ $valor->colada }}</td>
                        <td>{{ $valor->masa_lineal }}</td>
                        <td>{{ $valor->fy_mpa }}</td>
                        <td>{{ $valor->fs_mpa }}</td>
                        <td>{{ $valor->fs_fy }}</td>
                        <td>{{ $valor->alargamiento }}</td>
                        <td>{{ $valor->doblado }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
</body>
</html>
