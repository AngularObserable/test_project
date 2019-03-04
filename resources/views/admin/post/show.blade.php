@extends('admin.layout.master')

@section('title','Tag')
@push('css')

@endpush
@section('content')

    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <a href="{{ route('admin.post.index') }}" class="btn btn-danger waves-effect">BACK</a>
                @if($post->is_approved == false)
                    <button type="button" class="btn btn-success pull-right">
                            <i class="material-icons">done</i>
                        <span>Approve</span>
                    </button>
                 
                @else
                    <button type="button" class="btn btn-success pull-right">
                   
                        <span>Approved</span>
                    </button>
                @endif
                <br>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h4>
                                {{$post->title}}
                            </h4>
                            <p>Posted By:<a href="">{{$post->user->name}}</a> On {{$post->created_at}}</p>
                        </div>

                        <div class="panel-body">
                             {!!$post->body !!}

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h3>
                                   Category
                                </h3>
                            </div>
                        </div>

                        <div class="panel-body">
                           @foreach($post->categories as $category)
                               {{$category->name}}
                               @endforeach
                        </div>

                    </div>

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h3>
                                    Tag
                                </h3>
                            </div>
                        </div>

                        <div class="panel-body">
                            @foreach($post->tags as $tag)
                                {{$tag->name}}
                            @endforeach
                        </div>

                    </div>

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h3>
                                    Featured Image
                                </h3>
                            </div>
                        </div>

                        <div class="panel-body">
                        <img class="img-responsive thumbnail" src="{{ Storage::disk('public')->url('post/'.$post->image) }}" alt="">
                        </div>

                    </div>
                </div>
            </div>

    </div>
@endsection

@push('js')

    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>
@endpush