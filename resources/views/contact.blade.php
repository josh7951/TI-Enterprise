@extends('layouts.base')

@section('content')
<nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="/">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page">Contact Us</a></li>
  </ul>
</nav>


<div class="columns">
  <div class="column is-half">
    <h1 class="title is-1"> True Image Enterprise</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi laborum, aperiam obcaecati, libero quibusdam temporibus dolorem nulla ut numquam nostrum nihil ipsam? Maiores laboriosam doloribus vel, itaque officiis exercitationem aperiam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum quae laborum, natus magni doloremque harum fugiat a, doloribus ab beatae delectus. Quia, error aliquam. Inventore iure soluta veritatis corrupti! Temporibus.</p>
    <br><br>
    <p>209 W Ridgecrest Blvd. Suite 132<br>Ridgecrest, California 93555</p>
    <p>Ray@TI-Enterprise.com</p>
    <p>(760)382-1022</p>
  </div>

  <div class="column">
    <div class="field is-horizontal">
      <div class="field-body"> 
        <div class="field">
          <div class="control">
            <input class="input" type="text" placeholder="Name">
          </div>
        </div>
      
        <div class="field">
          <div class="control">
            <input class="input" name="user_email" type="email" placeholder="email@email.com">
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <textarea class="textarea" placeholder="Message"></textarea>
      </div>
    </div> 

    <div class="field is-grouped is-grouped-right">
      <div class="control">
        <button class="button is-link" onclick="alert('test')">Send</button>
      </div>
    </div>
  </div>
</div>
@endsection