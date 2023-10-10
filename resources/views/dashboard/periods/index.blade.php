@extends('dashboard.dashboard_layouts.master')

@section('title', 'Show Jobs')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('title_page1')
    Periods
@endsection

@section('title_page2')
    Periods list
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <!-- Add a link to create a new job -->
                            <a class="btn btn-primary btn-sm float-left" href="{{ route('periods.create') }}">
                                <i class="fas fa-calendar nav-icon"></i> Add New Period
                            </a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">#ID</th>
                                        <th style="text-align: center; vertical-align: middle;">Plan Name</th>
                                        <th style="text-align: center; vertical-align: middle;">Period_title</th>
                                        <th style="text-align: center; vertical-align: middle;">Price</th>
                                        <th style="text-align: center; vertical-align: middle;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($periods as $period)
                                        <tr>
                                            <td style="text-align: center; vertical-align: middle;">{{ $i }}</td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $period->plan->name }}</td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $period->title}}</td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $period->price }}</td>

                                            <td class="project-actions" style="text-align: center; vertical-align: middle;">
                                                <a class="btn btn-info btn-sm" href="{{ route('periods.edit', $period->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Edit
                                                </a>
                                                <form action="{{ route('periods.destroy', $period->id) }}" method="POST" style="display: inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this period?')">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
