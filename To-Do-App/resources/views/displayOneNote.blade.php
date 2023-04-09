@extends('layouts.app')

@section('content')
</br></br>

<center>
    <h2>Your Note #{{$note->id}}</h2>
    </br></br>
            <table class="table" style="width:80%" >
            <thead class="thead-dark">
                <tr>
                <th scope="col">Note Header</th>
                <th scope="col">Note Body</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{ $note->head}}</td>
                <td>{{ $note->body}}</td>
                </tr>
            </tbody>
            </table>
            </br></br>
            <a href="{{route('note.updateFile', $note->id)}}">
            <button type="button" class="btn btn-primary  btn-block">Update</button>
            </a>
            <a href="{{route('note.delete', $note->id)}}">
            <button type="button" class="btn btn-danger btn-block">Delete</button>
            </a>

</center>


@endsection