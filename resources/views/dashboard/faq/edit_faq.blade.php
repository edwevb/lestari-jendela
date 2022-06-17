@extends('layouts.dashboard.master')
@section('title', 'FAQ')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')

<div class="container">

    <a href="" class="btn btn-outline-success text-xs mb-3"> 
        <i class="far fa-arrow-alt-circle-left"></i> Back to Table </a>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">Edit FAQ</h5>
        </div>

        <div class="card-body">

            <form action="/faq/{{$faq->id}}" method="POST" id="formAdd" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">QUESTION</label>
                       <input type="text" class="form-control @error('question') is-invalid @enderror" 
                       name="question" value="{{$faq->question}}">
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="category_id">ANSWER</label>
                       <textarea type="text" class="form-control" style="height: 100%" name="answer">{{$faq->answer}} </textarea>
                    </div>
                </div>
                <br>
                <button type="submit" id="btnSubmit" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit</button>
            </form>

        </div>
    </div>
</div>


@endsection
