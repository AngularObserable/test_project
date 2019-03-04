@extends('admin.layout.master')

@section('title','Tag')
@push('css')

@endpush
@section('content')

    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <form action="{{ route('admin.post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="panel-title">Edit Post</div>
                        </div>

                        <div class="panel-body">



                            <div class="form-group">
                                <label class="control-label">Post Title</label>

                                <input type="text" id="title" class="form-control" value="{{$post->title}}" name="title">

                            </div>

                            <div class="form-group">
                                <label for="image">Featured Image</label>
                                <input type="file" value="{{$post->image}}"name="image">
                            </div>

                            <div class="form-group">
                                <input type="checkbox" id="publish" class="filled-in" name="status" value="1" {{ $post->status == true ? 'checked' : '' }}>
                                <label for="publish">Publish</label>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="panel-title">Tag AND Category</div>
                        </div>

                        <div class="panel-body">

                            <div class="form-group {{ $errors->has('categories') ? 'focused error' : '' }}">
                                <label class="control-label">Category</label>
                                <select class="form-control" name="categories[]" id="category">
                                    @foreach($categories as $category)
                                        <option
                                              @foreach($post->categories as $postCategory)
                                              {{ $postCategory->id == $category->id ? 'selected' : '' }}
                                            @endforeach
                                              value="{{ $category->id }}">{{ $category->name }}
                                        </option>
                                        @endforeach
                                </select>

                            </div>

                            <div class="form-group {{ $errors->has('tags') ? 'focused error' : '' }}">
                                <label class="control-label">Tag</label>

                                <select  class="form-control"  name="tags[]" id="tag">
                                    @foreach($tags as $tag)
                                        <option
                                                @foreach($post->tags as $postTag)
                                                {{ $postTag->id == $tag->id ? 'selected' :'' }}
                                                @endforeach
                                                value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BODY
                            </h2>
                        </div>
                        <div class="body">
                            <textarea id="tinymce" name="body">{{$post->body}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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