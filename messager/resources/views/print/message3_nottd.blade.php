<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/style.css">

    <style>
        body{
            margin: 0cm 1.5cm;
        }
        .container {
            font-family: 'Times New Roman', Times, serif;
            margin-left: 0%;
            width: 130%;
        }

        table#head, table#tbl-2 {
            width: 77%;
        }

        table#tbl-2 {
            text-align: center;
        }

        /* .head-empty {
            background: yellow;
        } */
        .head-text-first {
            /* background: rgb(143, 222, 143); */
            text-align: right;
            font-size: 9px;
        }
        .head-text-second {
            /* background: rgb(143, 222, 143); */
            text-align: left;
            font-size: 9px;
        }

        .text-title {
            text-align: center;
            margin: 25px 0px 0px 0px;
            width: 77%;
        }

        .text-content {
            font-size: 12px;
        }

        .text-cb {
            text-decoration: line-through;
        }

        ul li {
            margin-bottom: 10px;
            list-style: none;
            margin-left: -4%;
        }

        .list-nama {
            margin-left: 75px;
        }
        .list-nip {
            margin-left: 36px;
        }
        .list-grade {
            margin-left: 27px;
        }
        .list-satuan {
            margin-left: 15px;
        }

        .footer-ttd {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        .tgl-text {
            width: 109%;
            margin-top: 35px;
            margin-left: 45%;
        }

        .ttd-img {
            padding: 10px;
            margin: 22px;
        }

        .nottd {
            margin: 20px 0px;
        }

        .ttd-pemohon {
            margin-top: 5%;
            margin-bottom: 38px;
        }

        .text-pemohon {
            margin-top: 5px;
        }

        .footer-text {
            margin-top: 25px;
            font-size: 11px;
        }

        .text-important {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <table id="head">
            <tr>
                <td class="head-empty">
                    
                </td>
                <td class="head-text-first">
                    Lampiran I  :  Keputusan Direksi PT PLN ( Persero)
                </td>
            </tr>
        </table>
        <table id="head">
            <tr>
                <td class="head-text-second">
                    Nomor 	: 1003.K/DIR/2011
                    <br>
                    Tanggal 	: 9 Juni 2011
                    <br>
                    ---------------------------------------------------------------
                </td>
                <td class="head-empty">
                    
                </td>
            </tr>
        </table>
        <div class="text-title">
            SURAT PERMOHONAN
            <br>
            PELAKSANAAN CUTI <span class="text-cb">TAHUNAN</span> / BESAR *)
        </div>
        <br>

        <div class="text-content">
            Yang bertandatangan di bawah ini :
            <br>
            <br>
            <ul>
                <li>Nama<span class="list-nama">: {{$data->users->nama_lengkap}}</span></li>
                <li>Nomor Induk <span class="list-nip">: {{$data->users->nip}}</span></li>
                <li>Jabatan / Grade <span class="list-grade">: {{$data->users->jabatan}} / {{$data->users->grade}}</span></li>
                <li>Satuan Organisasi <span class="list-satuan">: {{$data->users->bagian}}</span></li>
            </ul>
            <br>
            Hak cuti <span class="text-cb">tahunan</span> / besar *) jatuh pada tanggal {{Carbon\carbon::createFromFormat('Y-m-d', $data->hak_cuti)->isoFormat('D MMMM Y')}}
            <br>
            <br>
            Mohon diizinkan melaksanakan cuti <span class="text-cb">tahunan</span> / BESAR *) 
            
            @if ($data->akan == 1)
                Pada tanggal <span class="text-important">{{Carbon\carbon::createFromFormat('Y-m-d', $data->mulai_tgl)->isoFormat('D MMMM Y')}}</span>
            
            @else
                Mulai tanggal <span class="text-important">{{Carbon\carbon::createFromFormat('Y-m-d', $data->mulai_tgl)->isoFormat('D MMMM Y')}}</span> <br>
                sampai dengan tanggal <span class="text-important">{{Carbon\carbon::createFromFormat('Y-m-d', $data->sampai_tgl)->isoFormat('D MMMM Y')}}</span> 
            @endif
    
            <br>
            <br>
            Untuk permohonan cuti <span class="text-cb">tahunan</span> / besar   diisi :
            <br>
            Cuti <span class="text-cb">tahunan</span> / besar  yang telah diambil  nol( <span class="text-important">{{$data->sudah}}</span> ) hari <br>
            Cuti <span class="text-cb">tahunan</span> / besar  yang akan diambil  satu ( <span class="text-important">{{$data->akan}}</span> ) hari <br>
            Sisa cuti <span class="text-cb">tahunan</span> / besar  tahun 2022 adalah  sebelas ( <span class="text-important">{{$data->sisa}}</span>) hari 

            <br><br>
            Alamat dan nomor telepon selama cuti : <br>
            <div class="text-important">{{$data->alamat}} / No HP : {{$data->no_hp}}</div>
            <div class="tgl-text">
                Asam asam, {{Carbon\carbon::now()->isoFormat('D MMMM Y')}}
            </div>
    
            <table id="tbl-2">
                <tr>
                    <td>
                        Menyetujui
                        <br>
                        @if ($data->users->jabatan != 'Supervisor Dasar')
                            <strong>Manajer Bagian Operasi</strong>
                            <div class="ttd-img">
                                
                            </div>
                            <strong>(ISKANDAR SETIYAWAN)</strong>
                        @else
                            <strong>Manajer UPK Asam asam</strong>
                            <div class="ttd-img">
                                
                            </div>
                            <strong>(DANI ESA WINDIARTO)</strong>
                        @endif
    
                    </td>
                    <td width="50%">
                        <div class="text-pemohon">
                            Pemohon
                        </div>
                        <div class="ttd-img ttd-pemohon">
                            
                        </div>
                        <strong>({{$data->users->nama_lengkap}})</strong>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="footer-text">
            Persetujuan cuti sebagai berikut : <br>
            Pegawai Fungsional : diparaf oleh Spv & disetujui Asman <br>
            Pegawai Struktural : diparaf oleh Manbag & disetujui Manajer <br><br>

            Dalam hal pelaksana cuti tahunan / besar diijinkan maka : <br>
            a.	Sebelum menjalankan cuti agar melaporkan pekerjaan yang menjadi tanggungjawabnya kepada <br> atasan langsung atau pejabat yang ditunjuk. <br>
            b.	Setelah menjalankan cuti, wajib melaporkan diri kepada atasan lansung dan bekerja kembali <br> sebagaimana biasa. <br>
            c.	Dalam hal setelah menjalankan cuti, Pegawai tidak melaporkan diri kepada atasan langsung dan <br> atau tidak bekerja kembali <br> sebagaimana biasa tanpa keterangan yang sah, dianggap mangkir dan diproses sesuai Peraturan <br> Disiplin Pegawai yang berlaku.
        </div>
    </div>
</body>
</html>