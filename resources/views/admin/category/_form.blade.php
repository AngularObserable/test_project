<div class="col-md-6">
    <div class="panel panel-default">
        <div class="form-group">
            {!! Form::label('category', 'Category Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class'=>'form-control',]) !!}

            {!! $errors->first('name', '<span class="help-block"><strong>:message</strong></span>') !!}
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
                        <textarea id="tinymce" name="body"></textarea>
                    </div>
                </div>
            </div>
        </div>
            <div class="form-group">
                <label class="control-label">Upload Photo</label>
                <input type="file" name="image" class="form-control"/>

            </div>
        {{--<div class="form-group">--}}
            {{--{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}--}}
            {{--{!! Form::text('description', null, ['class'=>'form-control','placeholder'=>'Description']) !!}--}}
            {{--{!! $errors->first('description', '<span class="help-block"><strong>:message</strong></span>') !!}--}}
        {{--</div>--}}
        <button class="btn btn-success btn-form">
            <span>Save</span>
        </button>
    </div>
</div>

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