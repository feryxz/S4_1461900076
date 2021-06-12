<!DOCTYPE html>
<html>
<title>Data</title>

<head>
    <style>
        input[type=text],
        select {
            width: 15%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }

        .button {
            /* width: 100%; */
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none
        }

        .button-hijau {
            background-color: #4CAF50;
        }

        .button-biru {
            background-color: #03A9F4;
        }

        .button-orange {
            background-color: #eda215;
        }

        .button-merah {
            background-color: #ed4015;
        }
    </style>
</head>

<body>
    <br>
    <a href="{{route('home.create')}}" class="button button-hijau">Import Data</a>
    <div style="text-align: right;">
        <form action="/home/show" method="GET">
            <input type="text" name="cari" placeholder="Cari Data .." value="{{ old('cari') }}">
            <input type="submit" class="button button-hijau" value="CARI">
        </form>
    </div>
    <br><br>
    <table id="customers">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        @foreach($pasien as $bu => $b)
        <tr>
            <td>{{$bu + 1}}</td>
            <td>{{$b->nama}}</td>
            <td>{{$b->alamat}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>