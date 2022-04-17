@extends('apk/head')

@section('head')
    
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="col-sm-9">
        <h4 class="page-title">Data Barang</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">kembali</a></li>
         </ol>
      </div>
    <div class="row">
        <div class="col-lg-12">
          <div class="card bg-primary">
          <div class="card-header bg-transparent text-white border-0">
                Recent Orders
                <div class="card-action">
                <div class="dropdown">
                  </div>
                </div>
                </div>
              <div class="table-responsive">
                <table class="table align-items-center table-flush table-primary">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Photo</th>
                    <th>Product ID</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Shipping</th>
                  </tr>
                  </thead>
                  <tr>
                    <td>Iphone 5</td>
                    <td><img src="assets/images/products/01.png" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
                      <td><div class="progress shadow" style="height: 6px;">
                          <div class="progress-bar gradient-quepal" role="progressbar" style="width: 100%"></div>
                          </div>
                      </td>
                  </tr>

                </table>
              </div>
          </div>
        </div>
    </div>

  </div>
</div>

@endsection