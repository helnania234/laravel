@extends('layouts.head')

@section('content')
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="/images/p2.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">cahaya surga dimatanya</h2>
                    </td>
                    <td>rp.500.000</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>rp.500.000 </td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">cencel</a>
                        <a href="{{ route('tambah') }}" class="btn btn-primary height-auto btn-sm">add</a></td>
                    
                  </tr>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="/images/p1.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Cermin jiwa</h2>
                    </td>
                    <td>RP.500.000</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>RP.500.000</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">cencel</a>  
                    <a href="{{ route('tambah') }}" class="btn btn-primary height-auto btn-sm">add</a></td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
          
        </div>
@endsection