@extends('layouts.base')

@section('content')
<carousel></carousel>

<hr style="font-weight:bold;">
<div class="columns is-vcentered">
  <div class="column is-8">
    <section class="section">
        <div class="columns">
            <div class="column is-one-fifth">
                <img class="image is-128x128" src="\images\homestore.jpg">
            </div>
            <div class="column">
            <p>Visit the TI-Enterprise True Image Bait Shop. True Image worms are supple for maximum action yet tough enough to catch multiple fish without tearing. Technologically advanced color patterns with powerful scents in multiple styles and sizes for all bass fishing techniques make True Image worms the strongest on the market.<br>
            <a style="float:right" class="button is-link is-light is-small" href="/store">Bait Store&raquo;</a>
            </div>
        </p>
    </div>
  </section>
<hr>
<section class="section">
    <div class="container">
      <h1 class="title">Section</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
      </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum minima fuga excepturi velit, distinctio, sapiente esse quod veniam natus ipsam magni? Maiores porro necessitatibus libero fuga sapiente beatae quasi exercitationem!</p>
    </div>
  </section>
<hr>
<section class="section">
    <div class="container">
      <h1 class="title">Section</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
      </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum minima fuga excepturi velit, distinctio, sapiente esse quod veniam natus ipsam magni? Maiores porro necessitatibus libero fuga sapiente beatae quasi exercitationem!</p>
    </div>
  </section>

  </div>
  <div class="column">
    <p class="bd-notification is-primary">Second column with more content. This is so you can see the vertical alignment.</p>
  </div>
</div>

@endsection