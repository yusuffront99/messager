@extends('layouts.main')

@section('content')
    <div class="container my-4">
        <h1>CEK SURAT IJIN</h1>
        <br>
        <hr>

        <table class="table table-dark table-hovered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Keperluan</th>
                    {{-- <th>Tanda Tangan</th> --}}
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="tb-view">
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $dt)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$dt->nip}}</td>
                        <td>{{$dt->nama_lengkap}}</td>
                        <td>{{$dt->keperluan}}</td>
                        {{-- <td><img src="{{asset('storage/ttd_images/' . $dt->ttd_image)}}" alt="" width="100px" height="100px"></td> --}}
                        <td>
                            <a href="{{route('message.1.print', $dt->id)}}" class="btn btn-primary mb-2"><i class="bi bi-printer fs-5"></i></a>
                            
                            <form method="post" action="{{route('message_ijin.destroy',$dt->id)}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-x-circle fs-5"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection