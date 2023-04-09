@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Note') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('note.store')}}">
                    @csrf
                    <!-- Lavarel wala POST method eka use karanwa nam csrf method eka use karanna one security policy sadaha-->
                   
                    <br/>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                        <input type="text" name="head" class="form-control" id="inputPassword3" placeholder="Title">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" name="body" id="inputPassword3" placeholder="..." rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection