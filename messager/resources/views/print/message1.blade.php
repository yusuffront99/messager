<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/style.css">

    {{-- styles --}}
    <style>
        body {
            border: 1px solid black;
        }
        .container {
            font-family: 'Times New Roman', Times, serif;
            
            /* padding-right: 10rem; */
            margin-left: 0%;
            width: 130%;
        }

        table {
            width: 130%;
        }

        table#tbl-2 {
            text-align: center;
        }

        .header-logo, .header-text {
            opacity: 75%;
            font-weight: bold;
            font-size: 12px;
        }

        .header-text {
            width: 90%;
        }

        .title {
            width: 130%;
            margin: 60px 0px 15px 0px;;
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
        }

        .content {
            margin-left: 9%;
        }

        ol.content-list1 li{
            margin-left: 25px;
            margin-top: 10px;
            font-weight: bold;
        }

        ol li span#list1-a {
            margin-left: 15px;
        }
        ol li span#list1-b {
            margin-left: 28px;
        }
        ol li span#list1-c {
            margin-left: 8px;
        }

        ul.content-list2 li {
            margin-top: 10px;
            list-style: none;
            margin-left: 5px;
            font-weight: bold;
        }

        ul li span#list2-a {
            margin-left: 45px;
        }
        ul li span#list2-b {
            margin-left: 22px;
        }
        ul li span#list2-c {
            margin-left: 5px;
        }

        .tgl-text {
            width: 130%;
            margin-top: 35px;
            margin-left: 80%;
        }

        .footer-ttd {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        .ttd-img {
            padding: 10px;
        }

        .ttd-pemohon {
            margin-bottom: 0px;
        }

        .text-pemohon {
            margin-top: 15px;
        }
    </style>
    {{-- styles --}}
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td class="header-logo">
                    <img src="<?php echo $img ?>" width="50px" height="50px" alt="">
                </td>
                <td class="header-text">
                    PT PLN (PERSERO) INDUK UNIT PEMBANGKITAN DAN PENYALURAN KALIMANTAN 
                    <br>
                    UNIT PELAKSANA PEMBANGKITAN ASAM ASAM
                </td>
            </tr>
        </table>
        <div class="title">
            SURAT IJIN TIDAK MASUK KERJA
        </div>
        <br>

        <div class="content">
            Saya yang bertanda tangan dibawah ini

            <ol class="content-list1">
                <br>
                <li>Nama <span id="list1-a">: {{$data->users->nama_lengkap}}</span></li>
                <li>NIP <span id="list1-b">: {{$data->users->nip}}</span></li>
                <li>Bagian <span id="list1-c">: {{$data->users->bagian}}</span></li>
            </ol>
            <br>

            Mengajukan permohonan ijin untuk tidak masuk kerja pada :
            <ul class="content-list2">
                <li>Hari <span id="list2-a">: {{$data->hari}}</span></li>
                <li>Tanggal <span id="list2-b">: {{Carbon\carbon::createFromFormat('Y-m-d', $data->tanggal)->isoFormat('D MMMM Y')}}</span></li>
                <li>Keperluan <span id="list2-c">: {{$data->keperluan}}</span></li>
            </ul>
            <br>

            Demikian permohonan ini disampaikan, mohon persetujuan.   
        </div>
        <br>
        <div class="tgl-text">
            Asam asam, {{Carbon\carbon::now()->isoFormat('D MMMM Y')}}
        </div>
        <br>

        <table id="tbl-2">
            <tr>
                <td>
                    Mengetahui
                    <br>
                    <strong>MANBAGOP</strong>
                    <div class="ttd-img">
                        <img src="<?php echo $ttd ?>" alt="" width="100px" height="60px">
                    </div>
                    <strong>ISKANDAR SETIYAWAN</strong>

                </td>
                <td width="50%">
                    <div class="text-pemohon">
                        Pemohon
                    </div>
                    <div class="ttd-img ttd-pemohon">
                        <img src="<?php echo $ttd_image ?>" alt="" width="100px" height="60px">
                    </div>
                    <strong>{{$data->users->nama_lengkap}}</strong>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>