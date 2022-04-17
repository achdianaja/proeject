@extends('apk/head')

@section('head')
    


<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
	  
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-primary">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">4500</h4>
                <span class="text-white">Total Orders</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-basket-loaded text-white"></i></div>
             </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-danger">
            <div class="card-body">
              <div class="media">
               <div class="media-body text-left">
                <h4 class="text-white">7850</h4>
                <span class="text-white">Total Expenses</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-wallet text-white"></i></div>
            </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-success">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">87.5%</h4>
                <span class="text-white">Total Revenue</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-warning">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">8400</h4>
                <span class="text-white">New Users</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-user text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
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
  </div><!-- End container-fluid-->
</div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    
<footer class="footer">
  <div class="container">
    <div class="text-center">
      Copyright © 2018 Rocker Admin
    </div>
  </div>
</footer>
   
  @endsection
