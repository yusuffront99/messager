@extends('layouts.main')

@section('content')
<div class="">
    <div class="text-center title">
        Welcome to Freeletter
        <hr>
    </div>
</div>
<div class="menu">
    <div class="row">
            <!-- Button trigger modal -->
        <div class="col-lg-3 col-md-3 mb-3">
            <a href="{{route('message_ijin.index')}}" class="btn btn-white text-primary"><i class="bi bi-eyeglasses"></i> Lihat Surat</a>
            <button type="button" class="menu-button1" data-bs-toggle="modal" data-bs-target="#ijinModal">
                <i class="bi bi-envelope-check-fill"></i> Surat Ijin
            </button>
        </div>

        <div class="col-lg-3 col-md-3 mb-3">
            <a href="{{route('message_cutiTahunan.index')}}" class="btn btn-white text-primary"><i class="bi bi-eyeglasses"></i> Lihat Surat</a>
            <button type="button" class="menu-button2" data-bs-toggle="modal" data-bs-target="#cutiTahunanModal">
                <i class="bi bi-envelope-check-fill"></i> Cuti Tahun
            </button>
        </div>

        <div class="col-lg-3 col-md-3 mb-3">
            <a href="{{route('message_cutiBesar.index')}}" class="btn btn-white text-primary"><i class="bi bi-eyeglasses"></i> Lihat Surat</a>
            <button type="button" class="menu-button3" data-bs-toggle="modal" data-bs-target="#cutiBesarModal">
                <i class="bi bi-envelope-check-fill"></i> Cuti Besar
            </button>
        </div>
        
        <div class="col-lg-3 col-md-3 mb-3">
            <a href="" class="btn btn-white text-primary"><i class="bi bi-eyeglasses"></i> Lihat Surat</a>
            <button type="button" class="menu-button4" data-bs-toggle="modal" data-bs-target="#profileModal">
                <i class="bi bi-person-add"></i> Buat Profile
            </button>
        </div>
    </div>
</div>

<div class="my-4 text-center">
    <strong class=""><a href="" class="text-secondary"><i class="bi bi-github"></i> Github</a></strong>
    <br>
    <br>
    <strong class="text-center fs-bold fs-6 text-secondary">Version 1.2 - December 2022</strong>
</div>
@endsection


    <!-- Modal PROFILE -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profileModalLabel">Buat Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body profile">
                    <form action="" id="profile">
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
                                <option value="Supervisor Dasar">Supervisor Dasar</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="grade">Grade</label>
                            <select name="grade" id="grade" class="form-select">
                                <option value="">-- Grade --</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="Bagian">Bagian</label>
                            <select name="bagian" id="bagian" class="form-select">
                                <option value="Operasi">Operasi</option>
                            </select>
                        </div>
                        <div class="my-2">
                            <label for="ttd_image">Tanda Tangan</label> <span class="info-ttd">* Pastikan Ukuran Maksimal foto Tanda tangan 500 kb</span>
                            <input type="file" id="ttd_image" name="ttd_image" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal IJIN-->
    <div class="modal fade" id="ijinModal" tabindex="-1" aria-labelledby="ijinModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ijinModalLabel">Surat Ijin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body ijin text-white">
                    <form action="" id="ijin">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="hidden" name="user_id" id="user_id">
                            <input type="hidden" name="ttd_image" id="ttd_image1">
                            <select name="nip" id="nip-ijin">
                                <option value="">-- NIP --</option>
                                @foreach ($gets as $gt)
                                    <option value="{{$gt->nip}}">{{$gt->nip}} - {{$gt->nama_lengkap}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap1" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="Bagian">Bagian</label>
                            <input type="text" name="bagian" id="bagian1" class="form-control">
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
                            <button type="submit" class="btn btn-danger">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal CUTI TAHUNAN-->
    <div class="modal fade" id="cutiTahunanModal" tabindex="-1" aria-labelledby="cutiTahunanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cutiTahunanModalLabel">Surat Cuti Tahunan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ct text-white">
                <div class="p-2">
                    <form action="" id="cuti-tahunan">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="hidden" name="user_id" id="user_id2">
                            <input type="hidden" name="grade" id="grade2">
                            <input type="hidden" name="ttd_image" id="ttd_image2">
                            <select name="nip" id="nip-ct">
                                <option value="">-- NIP --</option>
                                @foreach ($gets as $gt)
                                    <option value="{{$gt->nip}}">{{$gt->nip}} - {{$gt->nama_lengkap}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap2" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            {{-- <label for="jabatan">Jabatan</label> --}}
                            <input type="hidden" name="jabatan" id="jabatan2" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            {{-- <label for="Bagian">Bagian</label> --}}
                            <input type="hidden" name="bagian" id="bagian2" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="hak_cuti">Dapat Cuti Per tanggal</label>
                            <input type="date" id="hak_cuti" name="hak_cuti" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="sudah">Cuti Sudah diambil</label>
                                    <input type="number" name="sudah" id="sudah" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="akan">Cuti Akan diambil</label>
                                    <input type="number" name="akan" id="akan" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="sisa">Sisa Cuti</label>
                                    <input type="number" name="sisa" id="sisa" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Cuti Mulai Tanggal</label>
                                        <input type="date" name="mulai_tgl" id="mulai_tgl" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Cuti Sampai Tanggal</label>
                                        <input type="date" name="sampai_tgl" id="sampai_tgl" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="no_hp">No Handphone</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="alamat">alamat</label>
                                <textarea name="alamat" id="alamat" cols="4" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal CUTI BESAR-->
    <div class="modal fade" id="cutiBesarModal" tabindex="-1" aria-labelledby="cutiBesarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cutiBesarModalLabel">Surat Cuti Besar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body cb text-white">
                <form action="" id="cuti-besar">
                    @csrf
                    <div class="form-group mb-2">
                        <input type="hidden" name="user_id" id="user_id3">
                        <input type="hidden" name="grade" id="grade3">
                        <input type="hidden" name="ttd_image" id="ttd_image3">
                        <select name="nip" id="nip-cb">
                            <option value="">-- NIP --</option>
                            @foreach ($gets as $gt)
                                <option value="{{$gt->nip}}">{{$gt->nip}} - {{$gt->nama_lengkap}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap3" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        {{-- <label for="jabatan">Jabatan</label> --}}
                        <input type="hidden" name="jabatan" id="jabatan3" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        {{-- <label for="Bagian">Bagian</label> --}}
                        <input type="hidden" name="bagian" id="bagian3" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="hak_cuti">Dapat Cuti Per tanggal</label>
                        <input type="date" id="hak_cuti" name="hak_cuti" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="sudah">Cuti Sudah diambil</label>
                                <input type="number" name="sudah" id="sudah" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="akan">Cuti Akan diambil</label>
                                <input type="number" name="akan" id="akan" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="sisa">Sisa Cuti</label>
                                <input type="number" name="sisa" id="sisa" class="form-control">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Cuti Mulai Tanggal</label>
                                    <input type="date" name="mulai_tgl" id="mulai_tgl" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Cuti Sampai Tanggal</label>
                                    <input type="date" name="sampai_tgl" id="sampai_tgl" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="alamat">alamat</label>
                            <textarea name="alamat" id="alamat" cols="4" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

@push('add-script')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#nip-ijin').change(function(){
            $.ajax({
                url: 'home/' + $(this).val(),
                type: 'get',
                data: {},
                success:function(response){
                    if(response.success == true){
                        $('#user_id').val(response.data.id);
                        $('#nip').val(response.data.nip);
                        $('#nama_lengkap1').val(response.data.nama_lengkap);
                        $('#bagian1').val(response.data.bagian);
                        $('#jabatan1').val(response.data.jabatan);
                        $('#ttd_image1').val(response.data.ttd_image);
                    } else {
                        console.error('salah');
                    }
                }
            });
        })

        // =====    CUTI TAHUNAN
        $('#nip-ct').change(function(){
            $.ajax({
                url: 'home/' + $(this).val(),
                type: 'get',
                data: {},
                success:function(response){
                    if(response.success == true){
                        $('#user_id2').val(response.data.id);
                        $('#nip').val(response.data.nip);
                        $('#nama_lengkap2').val(response.data.nama_lengkap);
                        $('#bagian2').val(response.data.bagian);
                        $('#jabatan2').val(response.data.jabatan);
                        $('#grade2').val(response.data.grade);
                        $('#ttd_image2').val(response.data.ttd_image);
                    } else {
                        console.error('salah');
                    }
                }
            });
        })

        // =====    CUTI BESAR
        $('#nip-cb').change(function(){
            $.ajax({
                url: 'home/' + $(this).val(),
                type: 'get',
                data: {},
                success:function(response){
                    if(response.success == true){
                        $('#user_id3').val(response.data.id);
                        $('#nip').val(response.data.nip);
                        $('#nama_lengkap3').val(response.data.nama_lengkap);
                        $('#bagian3').val(response.data.bagian);
                        $('#jabatan3').val(response.data.jabatan);
                        $('#grade3').val(response.data.grade);
                        $('#ttd_image3').val(response.data.ttd_image);
                    } else {
                        console.error('salah');
                    }
                }
            });
        });

        $('#profile').submit(function(e){
                e.preventDefault();
                let data = new FormData(this);

                $.ajax({
                    url : "{{route('profile.store')}}",
                    method : "post",
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data){
                        if(data.success){
                            $("#profile")[0].reset();
                            $("#profileModal").modal('hide');
                            window.location = "{{route('home')}}";
                            alert('true');
                            // window.location = "{{route('profile.index')}}";
                        }else{
                            alert(false)
                        }
                    }
                });
            });

        // FORM IJIN
        $('#ijin').submit(function(e){
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
                            $("#ijin")[0].reset();
                            $("#ijinModal").modal('hide');
                            window.location = '{{route("message_ijin.index")}}';
                            // window.location = "{{route('profile.index')}}";
                        }else{
                            alert(false)
                        }
                    }
                });
        })
        // FORM IJIN

        // FORM CUTI TAHUNAN
        $('#cuti-tahunan').submit(function(e){
            e.preventDefault();
            let data = new FormData(this);

                $.ajax({
                    url : "{{route('message_cutiTahunan.store')}}",
                    method : "post",
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data){
                        if(data.success){
                            $("#cuti-tahunan")[0].reset();
                            $("#cutiTahunanModal").modal('hide');
                            window.location = '{{route("message_cutiTahunan.index")}}';
                            // window.location = "{{route('profile.index')}}";
                        }else{
                            alert(false)
                        }
                    }
                });
        });

        // FORM CUTI BESAR
        $('#cuti-besar').submit(function(e){
            e.preventDefault();
            let data = new FormData(this);

                $.ajax({
                    url : "{{route('message_cutiBesar.store')}}",
                    method : "post",
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data){
                        if(data.success){
                            $("#cuti-besar")[0].reset();
                            $("#cutiBesarModal").modal('hide');
                            window.location = '{{route("message_cutiBesar.index")}}';
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