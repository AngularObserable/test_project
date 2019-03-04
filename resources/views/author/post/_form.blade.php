<div class="col-md-6">
    <div class="panel panel-default">
        <div class="form-group">
            {!! Form::label('category', 'Category Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class'=>'form-control',]) !!}

            {!! $errors->first('name', '<span class="help-block"><strong>:message</strong></span>') !!}
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