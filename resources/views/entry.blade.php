@extends('main')

@section('stylesheet')
<link rel="stylesheet" href="/assets/vendor/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="/assets/vendor/datatables2/datatables.min.css" />
<link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/fontawesome.min.css" />
<link rel="stylesheet" href="/assets/css/container.css">
<link rel="stylesheet" href="/assets/css/text.css">

@endsection

@section('container')
<div class="header bg-success pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-bell"></i></a></li>
                            <li class="breadcrumb-item"><a href="/">Daftar Entrian K</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Entrian K</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card-wrapper">
                <!-- Custom form validation -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Tambah Entrian K</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <form id="formupdate" autocomplete="off" method="post" action="/entry" class="needs-validation" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Kecamatan <span class="text-danger">*</span></label>
                                    <select id="subdistrict" name="subdistrict" class="form-control" data-toggle="select" name="subdistrict" required>
                                        <option value="0" disabled selected> -- Pilih Kecamatan -- </option>
                                        @foreach ($subdistricts as $subdistrict)
                                        <option value="{{ $subdistrict->id }}" {{ old('subdistrict') == $subdistrict->id ? 'selected' : '' }}>
                                            [{{ $subdistrict->code}}] {{ $subdistrict->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('subdistrict')
                                    <div class="text-valid mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="form-control-label">Desa <span class="text-danger">*</span></label>
                                    <select id="village" name="village" class="form-control" data-toggle="select" name="village">
                                    </select>
                                    @error('village')
                                    <div class="text-valid mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label class="form-control-label">SLS <span class="text-danger">*</span></label>
                                    <select id="sls" name="sls" class="form-control" data-toggle="select" name="sls">
                                    </select>
                                    @error('sls')
                                    <div class="text-valid mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <div>
                                        <label class="form-control-label" for="exampleDatepicker">Tanggal Mulai Entri <span class="text-danger">*</span></label>
                                        <input name="begin" class="form-control @error('begin') is-invalid @enderror" placeholder="Select date" type="date" value="{{ @old('begin') }}">
                                        @error('begin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="data">
                                <div class="col mt-3">
                                    <label class="form-control-label" for="exampleDatepicker"><i class="fas fa-exclamation-triangle"></i> SLS ini pernah dientri sebelumnya. Berikut petugas yang pernah mengentri SLS ini: </label>
                                    <div class="table-responsive mt-2">
                                        <table class="table" id="datatable-id" width="100%">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nama Pengentri</th>
                                                    <th>Jumlah Dokumen Yang Dientri</th>
                                                    <th>Status Entri</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="hasEntriedBefore" style="display: none;">
                                <div class="col mt-4">
                                    <p><span clas="text-danger"><i class="fas fa-exclamation-triangle text-warning"></i> Kamu sudah pernah entri SLS ini. Coba cek <a href="/">di sini</a></span></p>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" id="submit" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('optionaljs')
<script src="/assets/vendor/datatables2/datatables.min.js"></script>
<script src="/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/vendor/sweetalert2/dist/sweetalert2.js"></script>
<script src="/assets/vendor/select2/dist/js/select2.min.js"></script>

<script>
    var table = $('#datatable-id').DataTable({
        // "responsive": true,
        // "fixedColumns": true,
        // "fixedHeader": true,
        "scrollX": true,
        "order": [],
        "searching": false,
        "aLengthMenu": [
            [-1],
            ["All"]
        ],
        "iDisplayLength": -1,
        "columns": [{
                "responsivePriority": 1,
                "width": "12%",
            },
            {
                "responsivePriority": 2,
                "width": "7%",
            },
            {
                "responsivePriority": 2,
                "width": "7%",
            },
        ],
        "language": {
            'paginate': {
                'previous': '<i class="fas fa-angle-left"></i>',
                'next': '<i class="fas fa-angle-right"></i>'
            }
        }
    });
    document.getElementById('data').style.display = 'none'
</script>

<script>
    $(document).ready(function() {
        $('#subdistrict').on('change', function() {
            loadVillage('0');
        });
        $('#village').on('change', function() {
            loadSls('0');
        });
        $('#sls').on('change', function() {
            checkSls();
        });
    });

    function loadVillage(selectedvillage) {
        let id = $('#subdistrict').val();
        $('#village').empty();
        $('#village').append(`<option value="0" disabled selected>Processing...</option>`);
        $.ajax({
            type: 'GET',
            url: '/entry/village/' + id,
            success: function(response) {
                var response = JSON.parse(response);
                $('#village').empty();
                $('#village').append(`<option value="0" disabled selected>Pilih Desa</option>`);
                $('#sls').empty();
                $('#sls').append(`<option value="0" disabled selected>Pilih SLS</option>`);
                response.forEach(element => {
                    if (selectedvillage == String(element.id)) {
                        $('#village').append('<option value=\"' + element.id + '\" selected>' +
                            '[' + element.code + ']' + element.name + '</option>');
                    } else {
                        $('#village').append('<option value=\"' + element.id + '\">' + '[' +
                            element.code + '] ' + element.name + '</option>');
                    }
                });
            }
        });
    }

    function loadSls(selectedsls) {
        let id = $('#village').val();
        $('#sls').empty();
        $('#sls').append(`<option value="0" disabled selected>Processing...</option>`);
        $.ajax({
            type: 'GET',
            url: '/entry/sls/' + id,
            success: function(response) {
                var response = JSON.parse(response);
                $('#sls').empty();
                $('#sls').append(`<option value="0" disabled selected>Pilih SLS</option>`);
                response.forEach(element => {
                    if (selectedsls == String(element.id)) {
                        $('#sls').append('<option value=\"' + element.id + '\" selected>' +
                            '[' + element.code + ']' + element.name + '</option>');
                    } else {
                        $('#sls').append('<option value=\"' + element.id + '\">' + '[' +
                            element.code + '] ' + element.name + '</option>');
                    }
                });
            }
        });
    }

    function checkSls() {
        var e = document.getElementById("sls");
        document.getElementById('submit').disabled = true
        var id = e.options[e.selectedIndex].value;
        $.ajax({
            type: 'GET',
            url: '/check/sls/' + id,
            success: function(response) {
                var response = JSON.parse(response);
                if (response.hasEntriedBefore == true) {
                    document.getElementById('hasEntriedBefore').style.display = 'block'
                    document.getElementById('submit').disabled = true
                    document.getElementById('data').style.display = 'none'
                } else {
                    document.getElementById('hasEntriedBefore').style.display = 'none'
                    document.getElementById('submit').disabled = false
                    if (response.data.length == 0) {
                        document.getElementById('data').style.display = 'none'
                    } else {
                        table.rows().remove().draw()
                        document.getElementById('data').style.display = 'block'
                        for (var i = 0; i < response.data.length; i++) {
                            let type = ""
                            let icon = ""
                            if (response.data[i].status_id == 2) {
                                type = "warning"
                                icon = "<i class=\"fas fa-exclamation-triangle text-warning\"></i>"
                            } else if (response.data[i].status_id == 3) {
                                type = "success"
                            } else {
                                type = "secondary"
                                icon = "<i class=\"fas fa-exclamation-triangle\"></i>"
                            }
                            let status = "<div class=\"d-flex align-items-center\">" + icon + "<h3><span class=\"badge badge-" + type + "\">" + response.data[i].status + "</span></h3></div>"
                            table.row.add([response.data[i].user_name, response.data[i].total_entry, status]).draw(false);
                        }
                    }
                }
            },
            error: function(request, status, error) {
                document.getElementById('submit').disabled = true
            }
        });
    }
</script>

@endsection