@extends('admin.layout.master')

@section('title','Category')
@push('css')

@endpush
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 style="font-size:20px;"class="title">Add Category </h1>
        </div>
    </div>
    @include('flash::message')
    {!! Form::open(['url' => route('admin.category.store'), 'class' => 'validate', 'files' => true, 'method' => 'post']) !!}

    @include('admin.category._form')

    {!! Form::close()!!}


@endsection

@push('js')
@endpush