@extends('layouts.app')

@section('content')
</br></br>
<div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <center>


    <h2>Your Task {{$act->id}}</h2>
    </br></br>
            <table class="table" style="width:80%" >
            <thead class="thead-dark">
                <tr>
                <th scope="col">Key</th>
                <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Title</td>
                <td>{{ $act->title}}</td>
                </tr>

                <tr>
                <td>Date</td>
                <td>{{ $act->date}}</td>
                </tr>

                <tr>
                <td>Time</td>
                <td>{{ $act->time}}</td>
                </tr>

                <tr>
                <td>Description</td>
                <td>{{ $act->description}}</td>
                </tr>

                <tr>
                <td>Priority</td>
                <td>{{ $act->priority}}</td>
                </tr>

                <tr>
                <td>Actions</td>
                <td>{{ $act->actions}}</td>
                </tr>

            </tbody>
            </table>
            </br></br>
            <a href="{{route('activity.edit',$act->id)}}">
            <button type="button" class="btn btn-primary  btn-block">Update</button>
            </a>
            <a href="{{route('activity.delete',$act->id)}}">
            <button type="button" class="btn btn-danger btn-block">Delete</button>
            </a>

</center>
</div>

@endsection