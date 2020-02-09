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
    <div class="container" style="text-align: center;">
    <h2 class="subtitle is-3"><u>Ordering Information:</u></h2>
      <p style="display: block;">For inquries please contact us via:<br>
        E-Mail: <a href="mailto:orders@ti-enterprises.com?Subject=Order%20Inquiry" target="_top">orders@ti-enterprises.com</a><br>
        Phone: <a href="tel:+1-760-382-1022">(760) 382-1022</a>
      </p>
      <br>
    </div>
    <div class="columns is-variable is-5">
      <div class="column has-background-white-ter">
        <h3 class="title is-4" style="margin-left: 0.6rem;">Paypal (Preferred Method)</h3>
        <p style="margin-left: 1rem; margin-right: 0.7rem; padding: 0.5rem;">Ordering with a Credit/Debit Card via PayPal is the preferred method of payment. Using this method will get your order shipped out next business day.<span style="color:red;">*</span><br>
        <a href="https://www.paypal.com/us/home" target="_blank"><img title="PayPal Logo" src="\images\paypal-logo.png" alt="paypal-logo.png"></a>
        </p>
      </div>
      <div class="column is-narrow"></div>
      <div class="column has-background-white-ter">
        <h3 class="title is-4" style="margin-left: 0.6rem;">Mail Order</h3>
        <p style="margin-left: 1rem; margin-right: 0.7rem; padding: 0.5rem;">Accepted forms of payment for a Mail Order is either a Cashier's Check or a Money Order. <span style="color:red;">PERSONAL CHECKS WILL NOT BE ACCEPTED.</span> If ordering by mail, please send a paper bag with the type of bait and quantity that you would like to purchase. Once request has been recieved, the order will be shipped.<span style="color:red;">*</span><br>
        <u>Mailing Address</u>
        </p>
        <ul style="text-align: center; font-style: italic;">
          <li>True Image Enterprise</li>
          <li>209 W. Ridgecrest Blvd, Suite 132</li>
          <li>Ridgecrest, CA</li>
          <li>93555</li>
        </ul>
      </div>
    </div>
    <p><span style="color:red;">*</span>No items will be shipped until payment has been received. Orders are shipped via USPS Priority Mail so your order will arrive within 3-5 business days after your order has been processed.</p>
</section>
@endsection