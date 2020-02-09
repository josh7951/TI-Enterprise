@extends('layouts.base')

@section('content')
<nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="/">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page">Bait Store</a></li>
  </ul>
</nav>
<section class="hero is-medium is-primary is-bold" id="store-hero">
  <div class="hero-body">
      <div class="container" style="text-align:center;">
        <h1 class="title is-1">Bait Store</h1>
        <h2 class="subtitle">Wholesale Bulk Vendor Purchases<br>
        For retail purchasing or order inquiries, use the links below</h2>
          <p>
            <a class="button is-primary is-inverted is-outlined" href="http://www.basstacklemaster.com/" target="_blank">Retail Store</a>
            <a class="button is-link is-inverted is-outlined" href="/contact">Order Inquiries</a>
          </p>
      </div>
  </div>
</section> 
<section class="section">
  <div class="container">
    <h1 class="title" style="text-align: center;">WHOLESALE VENDORS ONLY</h1>
    <p>The <strong>TRUE IMAGE</strong> baits are 3-inches long and each one is hand poured and packaged. These baits are <strong>salted</strong>. Great care is given during the mixing of the colors and flakes - there is a guarantee that no two worms will be exactly alike. If you find two that are exactly alike, please send them back for our quality control to check and confirm. If they are proven to be clones, you will be shipped a replacement worm for free.<br>
    <span style="color:red;">NOTE: </span> We do <strong>NOT</strong> pour any solid color worms.</p>
  </div>
</section>
<section class="section">
  <h2 class="subtitle is-3" style="text-align: center;"><u>Ordering Information:</u></h2>
    <div class="columns is-variable is-0">
      <div class="column has-background-grey-lighter">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi laborum, aperiam obcaecati, libero quibusdam temporibus dolorem nulla ut numquam nostrum nihil ipsam? Maiores laboriosam doloribus vel, itaque officiis exercitationem aperiam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum quae laborum, natus magni doloremque harum fugiat a, doloribus ab beatae delectus. Quia, error aliquam. Inventore iure soluta veritatis corrupti! Temporibus.</p>
      </div>
      <div class="column is-one-fifth"></div>
      <div class="column has-background-grey-lighter">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nulla quisquam corrupti labore beatae perferendis iusto incidunt, deleniti illum laborum officiis, eius facilis sit ipsum doloribus dignissimos laboriosam eum odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas inventore, porro distinctio, nostrum accusamus ea odit consequuntur nesciunt asperiores nulla tempora perferendis illo expedita aspernatur dolore aperiam nemo dignissimos.</p>
      </div>
    </div>
</section>
@endsection