@section('title', 'Dashboard')

@extends('layouts.default')

@yield('styleDashboard')
    <div class="row m-0 vh-100">
      @include('layouts.sidebar')
        <div class="row m-0">
          <div class="col-md-12 p-3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4" >
                  <div class="card" style="background-color: darkgrey; width: 18rem; padding: 20px;">
                    <div class="row" >
                      <div class="col-sm-8 text-center left-content-card">
                        <i class="fa-solid fa-box" style="font-size: 40px;"></i>
                        <p style="margin-top: 5px;">Stok Produk</p>
                      </div>
                      <div class="col-sm-4 right-content-card">
                        <h1 style="font-size: 57px; ">9</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>