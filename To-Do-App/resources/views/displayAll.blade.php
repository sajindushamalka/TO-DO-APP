@extends('layouts.app')

@section('content')

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  background-color: #2196F3;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>

<center>

  <b>
<h1>Your List</h1>
</b>
</center>
@if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
<div class="grid-container">
  <div class="grid-item">
          <div>
        <center>
        <h1 style="border:2px solid Gray;">Your Activities</h1>
        <br/><br/>
        </center>
        @foreach ($acts as $act)

        <div>
        <center>
        <div class="card text-white bg-dark mb-3" >
          <div class="card-header">{{ $act->title}}</div>
          <div class="card-body">
            <h5 class="card-title"> {{ $act->date}} - {{ $act->time}}</h5>
            <p class="card-text">{{ $act->description}}</p>
            <h6> Priority - {{ $act->priority}} </h6>
            <h6> Actions - {{ $act->actions}} </h6>
            <a href="{{route('activity.displayOne', $act->id )}}"><button type="button" class="btn btn-light">Read Only This</button>
            </a>
          </div>
        </div>
        </div>
        </center>


        @endforeach
        </div>

  </div>


  <div class="grid-item">

  
     <div >

        <center>
       
        <h1 style="border:2px solid Gray;">Your Notes</h1>
        <br/><br/>
        </center>
        @foreach ($note as $notes)

        <div>
        <center>
        <div class="card text-white bg-dark mb-3" >
          <div class="card-header">{{ $notes->head}}</div>
          <div class="card-body">
            
            <h6> Priority - {{ $notes->body}} </h6>
          
            <a href="{{route('note.one', $notes->id )}}"><button type="button" class="btn btn-light">Read Only This</button>
            </a>
          </div>
        </div>
        </div>
        </center>
        @endforeach
        </div>

       
        </div>
          </div>
    </div>

@endsection