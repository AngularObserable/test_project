@extends('admin.layout.master')

@section('title','Tag')
@push('css')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-success pull-left">Create</a>

                    <div class="panel-options">
                        <a href="#">
                            <i class="linecons-cog"></i>
                        </a>
                        <a href="#" data-toggle="reload">
                            <i class="fa-rotate-right"></i>
                        </a>
                    </div>
                </div>
                <div class="panel-body admin-datatable">
                    <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                        <table cellspacing="0" class="table"  id="search-datatable">
                            <thead>

                            <tr class="replace-inputs">
                                <th class="no-sorting">
                                    <input type="checkbox" class="cbr pull-left">
                                </th>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Post Count</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="no-sorting text-center" >Manage</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($categories as $key=>$category)
                                @include('sweetalert::alert')
                            <tr>
                                <td>
                                    <input type="checkbox" name="select" class="cbr">
                                </td>
                                <th>{{$key + 1}}</th>
                                <td>{{$category->name}}</td>
                                <td>{{$category->posts->count()}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td class="text-right">
                                    <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-icon btn-success">
                                        <i class="fa-edit"></i>
                                    </a>

                                    <button class="btn btn-icon btn-red" onclick="deleteCategory({{ $category->id }})">
                                        <i class="fa-remove"></i>
                                    </button>
                                    <form id="delete-form-{{ $category->id }}" action="{{ route('admin.category.destroy',$category->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <!--<button class="btn btn-icon btn-primary">-->
                                    <!--<i class="fa-eye"></i>-->
                                    <!--</button>-->

                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="9">
                                    <ul class="pagination pull-right">
                                        <li><a href="#"><i class="fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="disabled"><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#"><i class="fa-angle-right"></i></a></li>
                                    </ul>

                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteCategory(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush