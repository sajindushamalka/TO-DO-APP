@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Activity') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('activity.store')}}">
                    @csrf
                    <!-- Lavarel wala POST method eka use karanwa nam csrf method eka use karanna one security policy sadaha-->
                    <div class="form-group row">
                        <label for="inputEmail3"  class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="TItle">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group row">
                        <label for="inputPassword3"  class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                        <input type="date" name="date" class="form-control" id="inputPassword3" placeholder="Date">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Time</label>
                        <div class="col-sm-10">
                        <input type="time" name="time" class="form-control" id="inputPassword3" placeholder="Time">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" name="description" id="inputPassword3" placeholder="..." rows="10"></textarea>
                        </div>
                    </div>
                    <br/>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Priority</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input name="priority"  class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Low" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Low 
                            </label>
                            </div>
                            <div class="form-check">
                            <input name="priority"  class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Medium">
                            <label class="form-check-label" for="gridRadios2">
                                Medium
                            </label>
                            </div>
                            <div class="form-check disabled">
                            <input name="priority"  class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="High">
                            <label class="form-check-label" for="gridRadios3">
                                High
                            </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                    <br/>
                    <label  for="cars">Actions</label>

                    <select name="actions" name="cars" id="cars">
                    <option value="Initial">Initial</option>
                    <option value="Yet To Start">Yet To Start</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Finished">Finished</option>
                    <option value="Suspend">Suspend</option>
                    </select>
                    <br/>
                    <br/>
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
