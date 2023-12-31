@extends('main')

@section('stylesheet')
<link rel="stylesheet" href="/assets/vendor/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="/assets/vendor/datatables2/datatables.min.css" />
<link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/fontawesome.min.css" />
@endsection

@section('container')
<div class="header bg-success pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Entrian per SLS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->

<div class="container-fluid mt--6">
    @if (session('success-edit') || session('success-create'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-check-circle"></i></span>
        <span class="alert-text"><strong>Sukses! </strong>{{ session('success-create') }} {{ session('success-edit') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    @if (session('success-finish'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-check-circle"></i></span>
        <span class="alert-text"><strong>Sukses! </strong>{{ session('success-finish') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    @if (session('success-delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-check-circle"></i></span>
        <span class="alert-text"><strong>Sukses! </strong>{{ session('success-delete') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="card-title mb-2">Rekap Entri Dokumen K</h3>
                        </div>
                        <div class="col-md-3 text-right">
                            <form method="POST" action="/report/download">
                                @csrf
                                <button class="btn btn-icon btn-primary mb-2" type="submit">
                                    <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                    <span class="btn-inner--text">Download</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive py-4">
                    <table class="table" id="datatable-id" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Status Entri</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>SLS</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Jumlah Entri</th>
                                <th>Status Dokumen</th>
                                <th>Pengentri</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
<script src="/assets/vendor/momentjs/moment-with-locales.js"></script>

<script>
    var table = $('#datatable-id').DataTable({
        // "responsive": true,
        // "fixedColumns": true,
        // "fixedHeader": true,
        "scrollX": true,
        "order": [],
        "aLengthMenu": [
            [10, 50, 100],
            [10, 50, 100]
        ],
        "iDisplayLength": 10,
        "serverSide": true,
        "processing": true,
        "ajax": {
            "url": '/report/sls/data',
            "type": 'GET'
        },
        "columns": [{
                "responsivePriority": 3,
                "width": "2%",
                "data": "index",
            }, {
                "responsivePriority": 1,
                "width": "5%",
                "data": "status_id",
                "orderable": false,
                "render": function(data, type, row) {
                    if (type == "display") {
                        let type = ""
                        let icon = ""
                        if (data == 2) {
                            type = "warning"
                            icon = "<i class=\"fas fa-exclamation-triangle text-warning\"></i>"
                        } else if (data == 3) {
                            type = "success"
                        } else {
                            type = "secondary"
                            icon = "<i class=\"fas fa-exclamation-triangle\"></i>"
                        }

                        return "<div class=\"d-flex align-items-center\">" + icon + "<h3><span class=\"badge badge-" + type + "\">" + row.status + "</span></h3></div>";
                    }
                    return data
                }
            },
            {
                "responsivePriority": 2,
                "width": "5%",
                "data": "subdistrict_code",
                "render": function(data, type, row) {
                    if (type == "display") {
                        return "[" + data + "] " + row.subdistrict;
                    }
                    return data
                }
            },
            {
                "responsivePriority": 2,
                "width": "5%",
                "data": "village_code",
                "render": function(data, type, row) {
                    if (type == "display") {
                        return "[" + data + "] " + row.village;
                    }
                    return data
                }
            },
            {
                "responsivePriority": 2,
                "width": "15%",
                "data": "sls_code",
                "render": function(data, type, row) {
                    if (type == "display") {
                        return "[" + data + "] " + row.sls;
                    }
                    return data
                }
            },
            {
                "responsivePriority": 2,
                "width": "5%",
                "data": "begin",
                "render": function(data, type, row) {
                    var unixTimestamp = new Date(data).getTime() / 1000 - (new Date).getTimezoneOffset() * 60;
                    if (type === 'display' || type === 'filter') {
                        return moment.unix(unixTimestamp).locale('id').format('LL');
                    }
                    return unixTimestamp;
                }
            },
            {
                "responsivePriority": 2,
                "width": "5%",
                "data": "finish",
                "render": function(data, type, row) {
                    var unixTimestamp = new Date(data).getTime() / 1000 - (new Date).getTimezoneOffset() * 60;
                    if ((type === 'display' || type === 'filter') && data != null) {
                        return moment.unix(unixTimestamp).locale('id').format('LL');
                    } else {
                        return "-"
                    }
                    return unixTimestamp;
                }
            },
            {
                "responsivePriority": 2,
                "width": "5%",
                "data": "total_entry",
                "orderable": false,
            },
            {
                "responsivePriority": 2,
                "width": "5%",
                "data": "status_doc_id",
                "orderable": false,
                "render": function(data, type, row) {
                    if (type == "display") {
                        let type = ""
                        if (data == 1) {
                            type = "success"
                        } else if (data == 2) {
                            type = "warning"
                        } else if (data == 3) {
                            type = "danger"
                        }

                        return "<h3><span class=\"badge badge-" + type + "\">" + row.status_doc + "</span></h3>";
                    }
                    return data
                }
            },
            {
                "responsivePriority": 2,
                "width": "20%",
                "data": "user",
                "orderable": false
            }
        ],
        "language": {
            'paginate': {
                'previous': '<i class="fas fa-angle-left"></i>',
                'next': '<i class="fas fa-angle-right"></i>'
            }
        }
    });
</script>

<script>
    function onAdd() {
        document.getElementById('loading-background').style.display = 'block'
        $.ajax({
            type: 'GET',
            url: '/check/isentry',
            success: function(response) {
                var response = JSON.parse(response);
                // console.log(response)
                if (response.canEntry == true) {
                    window.location = "/entry/create";
                } else {
                    let text = 'Masih ada SLS yang berstatus <b>SEDANG ENTRI</b>. Selesaikan dulu SLS tersebut dengan menekan tombol <i class="fas fa-check"></i>. <br>Berikut SLS yang berstatus <b>SEDANG ENTRI</b>: ' + response.message
                    if (response.id != null) {
                        text = text.concat("<br> Apakah mau menyelesaikan SLS tersebut?")
                    }
                    let prop = {
                        title: 'Tidak Bisa Menambah Entrian',
                        html: text,
                        icon: 'warning',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                    }
                    if (response.id != null) {
                        prop.confirmButtonText = 'Selesaikan Entri'
                        prop.cancelButtonText = 'Cancel'
                        prop.showCancelButton = true
                        prop.showConfirmButton = true
                    } else {
                        prop.cancelButtonText = 'OK'
                        prop.showCancelButton = true
                        prop.showConfirmButton = false
                    }
                    Swal.fire(
                        prop
                    ).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "/entry/" + response.id + "/finish"
                        }
                    })
                }
                document.getElementById('loading-background').style.display = 'none'
            },
        });
    }
</script>
<script>
    function deletesls($id, $name) {
        event.preventDefault();
        Swal.fire({
            title: 'Yakin Hapus SLS Ini?',
            text: $name,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('formdelete' + $id).submit();
            }
        })
    }
</script>
@endsection