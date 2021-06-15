@extends('layouts.dash')

@section('content')
  <div class="container box">
    <div>
      <h1 class="title">Create New Tournament Event</h1>
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
    <form method="post" action="{{ route('tournament-editor.store') }}">
      @csrf
      <div class="field">
        <label class="label">Series</label>
        <div class="control">
          <div class="select">
            <select name="series">
              <option>Select series</option>
              <option value="Elite">Elite</option>
              <option value="Nation">Nation</option>
              <option value="Opens">Opens</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field">
        <label class="label">Tournament</label>
        <div class="control">
          <input name="tournament" class="input" type="text" placeholder="e.g Alex Smith">
        </div>
      </div>

      <div class="field">
        <label class="label">Location</label>
        <div class="control">
          <input name="location" class="input" placeholder="Los Angeles, CA">
        </div>
      </div>

      <div class="field">
        <label class="label">Start Date</label>
        <div class="control">
          <input name="start_date" class="input" type="date">
        </div>
      </div>

      <div class="field">
        <label class="label">End Date</label>
        <div class="control">
          <input name="end_date" class="input" type="date">
        </div>
      </div>

      <div class="buttons is-right">
        <a href="/tournament-editor" class="button is-danger is-outlined"><i class="fas fa-times"></i>&nbsp;Cancel</a>
        <button type="submit" class="button is-primary"><i class="fas fa-plus-circle"></i>&nbsp;Add Event</button>
      </div>
    </form>
  </div>
@endsection