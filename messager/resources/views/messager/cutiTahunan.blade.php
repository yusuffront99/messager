@extends('layouts.main')

@section('content')
    <div class="container my-4">
        <h1>CEK SURAT CUTI TAHUNAN</h1>
        <div class="my-3">
            <a href="{{route('home')}}" class="badge bg-primary"><i class="bi bi-arrow-left-circle"></i> To Home</a>
        </div>
        <hr>

        <div class="my-2">
            <strong>Keterangan Cetak Surat :</strong>
            <br>
            <ul>
                <li class="text-primary">
                    Surat Auto Tanda Tangan <div class="bx-list1"></div>  
                </li>
                <li class="text-success">
                    Surat Tanpa Tanda tangan <div class="bx-list2"></div>  
                </li>
                <li class="text-danger">
                    Menghapus surat <div class="bx-list3"></div>  
                </li>
            </ul>
        </div>

        <table class="table table-dark table-hovered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody class="tb-view">
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $dt)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>
                            <a href="{{route('message.2.print', $dt->id)}}" class="btn btn-primary mb-2"><i class="bi bi-printer fs-5"></i></a>
                            <a href="{{route('message.2.print_ttd', $dt->id)}}" class="btn btn-success mb-2"><i class="bi bi-printer fs-5"></i></a>
                            
                            <form method="post" action="{{route('message_cutiTahunan.destroy',$dt->id)}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-x-circle fs-5"></i></button>
                            </form>
                        </td>
                        <td>{{$dt->nip}}</td>
                        <td>{{$dt->nama_lengkap}}</td>
                        <td>{{$dt->users->jabatan}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection