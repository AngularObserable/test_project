@extends('admin.layout.master')

@section('title','Tag')
@push('css')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
         

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
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="no-sorting text-center" >Manage</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($subscribers as $key=>$subscriber)
                                @include('sweetalert::alert')
                            <tr>
                                <td>
                                    <input type="checkbox" name="select" class="cbr">
                                </td>
                                <th>{{$key + 1}}</th>
                                <td>{{$subscriber->email}}</td>
                                <td>{{$subscriber->created_at}}</td>
                                <td>{{$subscriber->updated_at}}</td>
                                <td class="text-right">
                                    <button class="btn btn-icon btn-red" onclick="deleteTag({{ $subscriber->id }})">
                                        <i class="fa-remove"></i>
                                    </button>
                                    <form id="delete-form-{{ $subscriber->id }}" action="{{ route('admin.subscriber.destroy',$subscriber->id) }}" method="POST" style="display: none;">
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
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteTag(id) {
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