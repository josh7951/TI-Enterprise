@extends('layouts.dash')

@section('content')
  <div class="container has-text-centered">
    <div class="columns is-mobile is-centered">
      <div class="column">
        <div>
          <h1 class="title">Tournament Schedule</h1>
          <hr>
        </div>
        <table class="table is-striped is-bordered">
          <thead>
            <tr>
              <td>Series</td>
              <td>Tournament</td>
              <td>Location</td>
              <td>Start Date</td>
              <td>End Date</td>
              <td colspan="2">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($tournaments as $tournament)
            <tr>
              <td>{{$tournament->series}}</td>
              <td>{{$tournament->tournament}}</td>
              <td>{{$tournament->location}}</td>
              <td>{{$tournament->start_date}}</td>
              <td>{{$tournament->end_date}}</td>
              <td><a href="{{ route('tournament-editor.edit', $tournament->id)}}" class="btn btn-primary">Edit</a></td>
              <td>
                  <form action="{{ route('tournament-editor.destroy', $tournament->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection