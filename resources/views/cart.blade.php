@extends ('app')

@section('content')


<div class="container container2">
  <div class="row">
  <div class="col-md-8 col-md-offset-2">
    <table class="table table-striped ">
      <tr>
        <th>
          S. No
        </th>
        <th>
          Item Name
        </th>
        <th>
          Quantity
        </th>
        <th>
          Amount (&#8377;)
        </th>
      </tr>
      <tr>
        <td>
          1
        </td>
        <td>
          Potatoes
        </td>
        <td>
          2 Kg
        </td>
        <td>
          &#8377; 40
        </td>
      </tr>
      <tr>
        <td>
          1
        </td>
        <td>
          Potatoes
        </td>
        <td>
          2 Kg
        </td>
        <td>
          &#8377; 40
        </td>
      </tr>
      <tr>
        <td>
          1
        </td>
        <td>
          Potatoes
        </td>
        <td>
          2 Kg
        </td>
        <td>
          &#8377; 40
        </td>
      </tr>
      <tr>
        <td>
          1
        </td>
        <td>
          Potatoes
        </td>
        <td>
          2 Kg
        </td>
        <td>
          &#8377; 40
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <p class="text-primary text-right h4">
            Total
          </p>
        </td>
        <td>
          <p class="h4">
          &#8377; 160
          </p>
        </td>
      </tr>
    </table>
  </div>
  <div class="col-md-4 col-md-offset-7">
    <button type="button" class="btn btn-success" name="button">Pay and Checkout</button>
  </div>
  </div>
    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>




@endsection
