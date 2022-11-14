@extends('layouts.main')

@section('content')
    <div class="logo">
        <div class="item"></div>
        <span class="item"></span>
    </div>

    <div class="menu">
        <div class="d-flex justify-content-evenly">
            <div class="menu-list">
                <a href="" class="menu-button1" data-bs-toggle="modal" data-bs-target="#ijinModal">IJIN</a>
            </div>
            <div class="menu-list">
                <a href="" class="menu-button2" data-bs-toggle="modal" data-bs-target="#cutiTahunanModal">CUTI TAHUNAN</a>
            </div>
            <div class="menu-list">
                <a href="" class="menu-button3" data-bs-toggle="modal" data-bs-target="#cutiBesarModal">CUTI BESAR</a>
            </div>
        </div>
    </div>

    <br>
    <div class="text-center mt-5">
        <a href="" data-bs-toggle="modal" data-bs-target="#profileModal">Buat Profile</a>
    </div>


    {{-- MODAL IJIN --}}
    {{-- <div class="modal fade" id="ijinModal" tabindex="-1" aria-labelledby="ijinModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ijinModal">Form Surat Ijin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-primary text-white">
            <div class="p-2">
                <form action="" id="form-ijin">
                    @csrf
                    <div class="form-group mb-2">
                        <input type="hidden" name="user_id" id="user_id">
                        <input type="hidden" name="ttd_image" id="ttd_image">
                        <select name="nip" id="nip">
                            <option value="">-- NIP --</option>
                            @foreach ($gets as $gt)
                                <option value="{{$gt->nip}}">{{$gt->nip}} - {{$gt->nama_lengkap}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="Bagian">Bagian</label>
                        <input type="text" name="bagian" id="bagian" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="hari">Pilih Hari</label>
                        <select name="hari" id="hari" class="form-select">
                            <option value="">-- Pilih Hari --</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="Keperluan">Keperluan</label>
                        <textarea name="keperluan" id="keperluan" cols="4" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Save</button>
                    </div>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div> --}}
    {{-- MODAL IJIN --}}

    {{-- MODAL TAHUNAN --}}
    <div class="modal fade" id="cutiTahunanModal" tabindex="-1" aria-labelledby="cutiTahunanModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cutiTahunanModal">Surat Cuti Tahunan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-cuti-tahunan">
                    @csrf
                    <div class="form-group mb-2">
                        <input type="hidden" name="user_id" id="user_id">
                        <input type="hidden" name="ttd_image" id="ttd_image">
                        <select name="nip" id="nip">
                            <option value="">-- NIP --</option>
                            @foreach ($gets as $gt)
                                <option value="{{$gt->nip}}">{{$gt->nip}} - {{$gt->nama_lengkap}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="Bagian">Bagian</label>
                        <input type="text" name="bagian" id="bagian" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="hak_cuti">Dapat Cuti Per tanggal</label>
                        <input type="date" id="hak_cuti" name="hak_cuti" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="sudah">Cuti Sudah diambil</label>
                                <input type="text" name="sudah" id="sudah" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="belum">Cuti Akan diambil</label>
                                <input type="text" name="belum" id="belum" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="sisa">Sisa Cuti</label>
                                <input type="text" name="sisa" id="sisa" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2" id="avatar">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    {{-- MODAL TAHUNAN --}}

    {{-- MODAL BESAR --}}
    {{-- <div class="modal fade" id="cutiBesarModal" tabindex="-1" aria-labelledby="cutiBesarModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cutiBesarModal">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div> --}}
    {{-- MODAL BESAR --}}

    {{-- PROFILE --}}
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="profileModal">New Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-2">
                    <form action="#" id="form-profile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" id="nip" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="jabatan">Pilih Jabatan</label>
                            <select name="jabatan" id="jabatan" class="form-select">
                                <option value="">-- Pilih jabatan --</option>
                                <option value="JO Boiler">JO Boiler</option>
                                <option value="JO Turbine">JO Turbine</option>
                                <option value="JO Control Room">JO Control Room</option>
                                <option value="Supervisor">Supervisor</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="Bagian">Bagian</label>
                            <select name="bagian" id="bagian" class="form-select">
                                <option value="Operasi">Operasi</option>
                            </select>
                        </div>
                        <div class="my-2">
                            <label for="ttd_image">Signature Add</label>
                            <input type="file" id="ttd_image" name="ttd_image" class="form-control" required>
                        </div>
                        <div class="mt-2" id="avatar">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="save-profile">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
    </div>
    {{-- PROFILE --}}
@endsection 

@push('add-script')

<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#nip').change(function(){
            $.ajax({
                url: 'home/' + $(this).val(),
                type: 'get',
                data: {},
                success:function(response){
                    if(response.success == true){
                        $('#user_id').val(response.data.id);
                        $('#nip').val(response.data.nip);
                        $('#nama_lengkap').val(response.data.nama_lengkap);
                        $('#bagian').val(response.data.bagian);
                        $('#jabatan').val(response.data.jabatan);
                        $('#ttd_image').val(response.data.ttd_image);
                        console.log(response);
                    } else {
                        console.error('salah');
                    }
                }
            });
        })

        // $('#form-profile').submit(function(e){
        //         e.preventDefault();
        //         let data = new FormData(this);

        //         $.ajax({
        //             url : "{{route('profile.store')}}",
        //             method : "post",
        //             data: data,
        //             dataType: 'JSON',
        //             contentType: false,
        //             cache: false,
        //             processData: false,
        //             success: function(data){
        //                 if(data.success){
        //                     $("#form-profile")[0].reset();
        //                     $("#profileModal").modal('hide');
        //                     window.location = "{{route('home')}}";
        //                     alert('true');
        //                     // window.location = "{{route('profile.index')}}";
        //                 }else{
        //                     alert(false)
        //                 }
        //             }
        //         });
        //     });

        // FORM IJIN
        // $('#form-ijin').submit(function(e){
        //     e.preventDefault();
        //     let data = new FormData(this);

        //         $.ajax({
        //             url : "{{route('message_ijin.store')}}",
        //             method : "post",
        //             data: data,
        //             dataType: 'JSON',
        //             contentType: false,
        //             cache: false,
        //             processData: false,
        //             success: function(data){
        //                 if(data.success){
        //                     $("#form-ijin")[0].reset();
        //                     $("#ijinModal").modal('hide');
        //                     window.location = '{{route("message_ijin.index")}}';
        //                     // window.location = "{{route('profile.index')}}";
        //                 }else{
        //                     alert(false)
        //                 }
        //             }
        //         });
        // })
        // FORM IJIN

        // FORM CUTI TAHUNAN
        $('#form-cuti-tahunan').submit(function(e){
            e.preventDefault();
            let data = new FormData(this);

                $.ajax({
                    url : "{{route('message_ijin.store')}}",
                    method : "post",
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data){
                        if(data.success){
                            $("#form-cuti-tahunan")[0].reset();
                            $("#cutiTahunanModal").modal('hide');
                            window.location = '{{route("message_ijin.index")}}';
                            // window.location = "{{route('profile.index')}}";
                        }else{
                            alert(false)
                        }
                    }
                });
        });
        // FORM CUTI TAHUNAN
    });
</script>

@endpush