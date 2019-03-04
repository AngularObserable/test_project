@extends('admin.layout.master')

@section('title','Tag')
@push('css')

@endpush
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 style="font-size:20px;"class="title">Edit Tag </h1>
        </div>
    </div>
    @include('flash::message')
    {!! Form::model($model, ['route' => ['admin.tag.update', $model], 'method' => 'put']) !!}

    @include('admin.tag._form')

    {!! Form::close()!!}

@endsection

@push('js')
@endpush