@extends('admin.layout.master')

@section('title','Category')
@push('css')

@endpush
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 style="font-size:20px;"class="title">Edit Category </h1>
        </div>
    </div>
    @include('flash::message')
    <form action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" id="name" class="form-control" name="name" value="{{ $category->name }}">
                <label class="form-label">Category Name</label>
            </div>
        </div>

        <div class="form-group">
            <input type="file" name="image">
        </div>

        <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
    </form>

@endsection

@push('js')
@endpush