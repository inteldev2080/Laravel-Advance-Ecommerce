@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => 'Division',
    'url' => "division.index",
    'section_name' => 'All Division'
    ])
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Division Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>Division Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($divisions as $item)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $item->division_name }}</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="{{ route('division.edit', $item) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="{{ route('division.destroy', $item) }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="" class="btn btn-danger" title="Delete Data" id="delete" onclick="event.preventDefault();
                                                                this.closest('form').submit();"><i class="fa fa-trash"></i></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            {{-- <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">Name</th>
                                                    <th rowspan="1" colspan="1">Position</th>
                                                    <th rowspan="1" colspan="1">Office</th>
                                                    <th rowspan="1" colspan="1">Age</th>
                                                    <th rowspan="1" colspan="1">Start date</th>
                                                    <th rowspan="1" colspan="1">Salary</th>
                                                </tr>
                                            </tfoot> --}}
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                            Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous"><a href="#" aria-controls="example1"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                        data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                        data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                        data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                                        aria-controls="example1" data-dt-idx="7" tabindex="0"
                                                        class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            {{-- Add Brand Page --}}
            <div class="col-md-4 col-lg-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Division</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('division.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <h5>Division Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="division_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('division_name')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
