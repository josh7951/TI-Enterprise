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
    <hr>
    <p>Interested in joining our team? Send us an email or give us a call! We look forward to working with you! For all order inquiries, please email us at <a href="mailto:orders@ti-enterprises.com?Subject=Order%20Inquiry" target="_top">orders@ti-enterprises.com</a>.</p>
    <br><br>
    <p>209 W Ridgecrest Blvd. Suite 132<br>Ridgecrest, California 93555</p>
    <p><a href="mailto:ray@ti-enterprises.com?Subject=TI-Enterprise%20Inquiry" target="_top">ray@ti-enterprise.com</a></p>
    <p><a href="tel:+1-760-382-1022">(760)382-1022</a></p>
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