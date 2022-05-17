@section('title', 'Journal')

@extends('layouts.default')

@yield('styleJournal')

<!doctype html>
    <div class="row m-0 vh-100">
    @include('layouts.sidebar')
    <div class="container-fluid " style="min-height: 640px; background-color:#e2e0e070 ;">
          <div class="row m-0">
            <div class="col-md-12 p-3 height-content" >
              <div class="card shadow">
                <div class="container" >
                  <div class="row p-3">
                    <div class="col-lg-8 header-card" >
                      <h2 style="color: black;">Jurnal</h2>
                    </div>
                    <div class="col-lg-4 justify-content-end d-flex  header-btn">
                      <a href="tambah-stok.html" class="btn btn-warning header-btn">Tambah</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="row">
                        <span>Show</span>
                        <div class="col-md-8">
                          <span><select class="form-select" aria-label="Default select example" >
                            <option value="1">10</option>
                            <option value="2">25</option>
                            <option value="3">50</option>
                            <option value="3">100</option>
                            </select>
                          </span>
                        </div>
                        <div class="col-md-4">
                          <span>entries</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="search-bar">
                        <form action="/action_page.php" style="margin-top: 25px;">
                          <div class="row">
                            <div class="col-sm-1 p-0">
                              <button type="submit" style="border: 0px; padding: 6px; width: 35px; background-color: white; border: 0px 1px 0px 1px;">
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                            <div class="col-sm-11 p-0">
                              <input class="form-control" type="text" placeholder="search-bar" aria-label="default input example">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama produk</th>
                            <th scope="col">Gambar</th>
                            <!-- <th scope="col">Jenis produk</th> -->
                            <th scope="col">Jumlah</th>
                            <th scope="col">Jumlah harga</th>
                            <th scope="col">Kode suplier</th>
                            <th scope="col">Barcode</th>
                            <th scope="col">Aksi</th>
                            <!-- <th scope="col">Jenis produk</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>12-04-2022</td>
                            <td>Sabun detergen rinso</td>
                            <td><img src="img/rinso.jpg" width="50%" alt="" srcset=""></td>
                            <!-- <td>Detergen</td> -->
                            <td>400</td>
                            <td>Rp. 8000</td>
                            <td>129304</td>
                            <td>41247124</td>
                            <td><a href="" class="btn btn-primary" style="margin-left: 5px;"><i class="fa-solid fa-pencil"></i></a><a href="" class="btn btn-warning"><i class="fa-solid fa-trash"></i></a></td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>12-04-2022</td>
                            <td>Sabun detergen rinso</td>
                            <td><img src="img/rinso.jpg" width="50%" alt="" srcset=""></td>
                            <!-- <td>Detergen</td> -->
                            <td>400</td>
                            <td>Rp. 8000</td>
                            <td>129304</td>
                            <td>41247124</td>
                            <td><a href="" class="btn btn-primary" style="margin-left: 5px;"><i class="fa-solid fa-pencil"></i></a><a href="" class="btn btn-warning"><i class="fa-solid fa-trash"></i></a></td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>12-04-2022</td>
                            <td>Sabun detergen rinso</td>
                            <td><img src="img/rinso.jpg" width="50%" alt="" srcset=""></td>
                            <!-- <td>Detergen</td> -->
                            <td>400</td>
                            <td>Rp. 8000</td>
                            <td>129304</td>
                            <td>41247124</td>
                            <td><a href="" class="btn btn-primary" style="margin-left: 5px;"><i class="fa-solid fa-pencil"></i></a><a href="" class="btn btn-warning"><i class="fa-solid fa-trash"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                      </div>
                      <div class="col-md-6" style="text-align: right;">
                        <p>Showing 1 to 10 of 521 entries</p>
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