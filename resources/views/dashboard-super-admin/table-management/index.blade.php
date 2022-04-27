@extends('layouts.index')

@section('title', 'Manajemen meja')

@section('style')
<style>
  .page-item.active .page-link {
    color: #FFF !important;
    background-color: #92CB48 !important;
    border-color: #92CB48 !important;
  }
  .pagination .page-lin {
    color: blue !important;
  }
  
  .color-primary {
      background-color: #92CB48;
      color: white
  }
</style>
@endsection

@section('content-header')
    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Manajemen meja</h3>
        <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Manajemen meja
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-6 col-12">
        <div class="btn-group float-md-right">
            <button class="btn color-primary rounded-0 mb-1" id="createTableButton" type="button">Tambah</button>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List meja</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <table class="table table-striped table-responsive table-bordered zero-configuration datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor meja</th>
                                <th width="10%">Aksi</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($table as $item)
                                <tr>
                                    <td class="text-capitalize">{{ $no++ }}</td>
                                    <td class="text-capitalize">Nomor - {{ $item->number }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn color-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                                <i class="la la-cog"></i>
                                            </button>
                                            <div class="dropdown-menu" style="min-width: 9rem !important">
                                                    <button class="dropdown-item editTableButton" value="{{ $item->id }}">
                                                        <i class="la la-edit"></i> Ubah
                                                    </button>
                                                    <button class="dropdown-item deleteTableButton" value="{{ $item->id }}">
                                                        <i class="la la-trash"></i> Hapus
                                                    </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfooter>
                            <tr>
                                <th>No</th>
                                <th>Nomor meja</th>
                                <th width="10%">Aksi</th>                                
                            </tr>
                        </tfooter>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createTableModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header color-primary white">
                <h4 class="modal-title white">Tambahmeja</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('manajemen-meja.store') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Nomor meja</label>
                        <div id="create_dynamic_field">
                            <div class="row mb-1">
                                <div class="col-12 col-sm-9"><input type="number" name="number[]" placeholder="Masukkan nomor meja" class="form-control number_list" required/>
                                </div>
                                <div class="col-6 col-sm-2">
                                    <button type="button" name="add" id="create_add" class="btn btn-success">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-outline-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editTableModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header color-primary white">
                <h4 class="modal-title white">Ubah meja</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" id="editTableForm" method="post">
                <div class="modal-body">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="">Nomor meja</label>
                        <input type="number" name="number" class="form-control" placeholder="Masukkan nomor meja" id="editNumber" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-outline-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteTableModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header color-primary white">
                <h4 class="modal-title white">Apa anda yakin ingin menghapus data ini?</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" id="deleteTableForm" method="post">
                <div class="modal-footer">
                    @csrf
                    @method("DELETE")
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-outline-danger">Iya, Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        var i=1;
        $('#create_add').click(function()
        {
            i++;
            $('#create_dynamic_field').append('<div class="row mb-1 additional-table" id="row'+i+'"><div class="col-12 col-sm-9"><input type="text" name="number[]" placeholder="Masukkan nomor meja" class="form-control number_list" required/></div><div class="col-6 col-sm-2"><button type="button" name="remove" id="'+i+'" class="btn btn-danger block btn_remove">X</button></div></div>');
        });
        
        $(document).on('click', '.btn_remove', function()
        {
            var button_id = $(this).attr("id"); 
            $('#row'+button_id+'').remove();
        });
        
        $(document).on("click", "#createTableButton", function ()
        {
            $("#createTableModal").modal();
        });
        $(document).on("click", ".editTableButton", function()
        {
            let id = $(this).val();
            $.ajax(
            {
                method: "GET",
                url: "{{ route('manajemen-meja.index') }}/" + id + "/edit"
            }).done(function (response)
            {
                console.log(response);
                $("#editNumber").val(response.number);
                $("#editTableForm").attr("action", "{{ route('manajemen-meja.index') }}/" + id)
                $("#editTableModal").modal();
            })
        });
        $(document).on("click", ".deleteTableButton", function()
        {
            let id = $(this).val();
            $("#deleteTableForm").attr("action", "{{ route('manajemen-meja.index') }}/" + id)
            $("#deleteTableModal").modal();
        });
    </script>
@endsection