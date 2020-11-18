@extends('layouts.app')

@section('content')
<section class="container transactions-page id=bill-payment page-section">

  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Transaction</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Nimal Perera">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Nimal@example.com">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="colombo 12">

            <div class="row">
              <div class="col-50">
                <label for="state">Province</label>
                <input type="text" id="state" name="state" placeholder="WP">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">ACC-NO</label>
            <input type="text" id="ranum" name="cardnumber" placeholder="123-456-abc">
            <label for="cname">Remarks</label>
            <input type="text" id="cname" name="cardname" placeholder="Hotel Payment">
            <label for="expmonth">Bank Name</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Dodge_Box">

          </div>

        </div>
        <input type="submit" value="Proceed Transaction" class="btn-bill">
      </form>
    </div>
  </div>

</section>
@endsection