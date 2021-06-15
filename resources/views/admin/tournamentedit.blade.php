@extends('layouts.dash')

@section('content')
<div class="container box">
    <div>
      <h1 class="title">Update Tournament Event</h1>
      <hr>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('tournament-editor.update', $tournament->id ) }}">
      @csrf
      @method('PATCH')
      <div class="field">
        <label class="label">Series</label>
        <div class="control">
          <div class="select">
            <select name="series">
              <option>Select series</option>
              <option value="Elite" {{ $tournament->series == 'Elite' ? 'selected' : '' }}>Elite</option>
              <option value="Nation" {{ $tournament->series == 'Nation' ? 'selected' : '' }}>Nation</option>
              <option value="Opens" {{ $tournament->series == 'Opens' ? 'selected' : '' }}>Opens</option>
              <option value="Other" {{ $tournament->series == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field">
        <label class="label">Tournament</label>
        <div class="control">
          <input name="tournament" class="input" type="text" value="{{ $tournament->tournament }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Location</label>
        <div class="control">
          <input name="location" class="input" value="{{ $tournament->location }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Start Date</label>
        <div class="control">
          <input name="start_date" class="input" type="date" value="{{ $tournament->start_date }}">
        </div>
      </div>

      <div class="field">
        <label class="label">End Date</label>
        <div class="control">
          <input name="end_date" class="input" type="date" value="{{ $tournament->end_date }}">
        </div>
      </div>

      <div class="buttons is-right">
        <a href="/tournament-editor" class="button is-danger is-outlined"><i class="fas fa-times"></i>&nbsp;Cancel</a>
        <button type="submit" class="button is-info"><i class="fas fa-pencil-alt"></i>&nbsp;Update Event</button>
      </div>
    </form>
  </div>
@endsection