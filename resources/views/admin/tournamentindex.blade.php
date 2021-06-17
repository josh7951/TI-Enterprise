@extends('layouts.dash')

@section('content')
  <div class="box has-text-centered">
    <div class="columns is-mobile is-centered">
      <div class="column is-10">
        <div>
          <h1 class="title">Tournament Schedule</h1>
          <hr>
        </div>
        <div class="buttons is-right">
          <a href="/tournament-editor/create" class="button is-primary is-rounded"><i class="fas fa-plus-circle"></i>&nbsp;Add Tournament</a>
        </div>
        <form action="" method="GET" role="search">
          @csrf
          <div class="field has-addons has-addons-right">
            <div class="control has-icons-left">
              <input class="input" type="text" placeholder="Search Tournaments..." name="q">
              <span class="icon is-small is-left"><i class="fas fa-search"></i></span>
            </div>
            <div class="control">
              <button type="submit" class="button is-info">
                Search
              </button>
            </div>
          </div>
        </form>
        <table class="table is-striped">
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
              <td>
                <div class="buttons is-centered">
                <a href="{{ route('tournament-editor.edit', $tournament->id)}}" class="button is-info is-outlined"><i class="fas fa-pencil-alt"></i>&nbsp;Edit</a>

                    <form action="{{ route('tournament-editor.destroy', $tournament->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="button is-danger" type="submit"><i class="fas fa-trash-alt"></i>&nbsp;Delete</button>
                    </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="box">
      {!! $tournaments->links() !!}
    </div>
  </div>
@endsection