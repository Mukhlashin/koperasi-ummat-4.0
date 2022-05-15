@section('title', 'Koperasi Barang')

@extends('layouts.default')

        <div class="container" style="margin-top: -20px">
            <div class="scrollmenu mt-25">
                <!-- <a
                    href="?category_menu_id=0"
                    style="line-height: 1.2; color: white"
                    ><small
                        ><span
                            class="badge badge-primary rounded-circle py-1 pull-right"
                            style="
                                width: 16px !important;
                                margin-right: -8px !important;
                            "
                            > count($menu) }}</span
                        ></small
                    >
                    <br />
                    Semua kategori</a
                > -->
                foreach($product as $item)
                <a
                    href="?category_menu_id=$item->id }}"
                    style="line-height: 1.2; color: white"
                    ><small
                        ><span
                            class="badge badge-primary rounded-circle py-1 pull-right"
                            style="
                                width: 16px !important;
                                margin-right: -8px !important;
                            "
                            >count($item->menus) }}</span
                        ></small
                    >
                    <br />
                    $item->category }}</a
                >
                endforeach
            </div>
        </div>
        <div class="blog-area pt-100" style="padding-top: 10px !important">
            <div class="container">
                <div class="row">
                    @foreach($product as $item)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" style="margin-bottom: 25px">
                        <div
                            class="card single-blog mb-30"
                            style="background-color: #3b3b3b"
                        >
                            <div class="blog-img bg-black">
                                <a href="{{ $item->foto }}" target="_blank">
                                    <img
                                        alt="image"
                                        class=""
                                        style="
                                            height: 400px;
                                            width: 100%;
                                            object-fit: cover;
                                        "
                                        src="{{ $item->foto }}"
                                    />
                                </a>
                            </div>
                            <div class="card-body blogpost-desc">
                                <!-- php $name = $item->name; $description =
                                $item->description; if($item->discount != 0){
                                $harga_discount = ($item->price *
                                $item->discount/100); $harga_discount =
                                $item->price - $harga_discount; } endphp -->
                                <div class="row">
                                    <div class="col-12">
                                        <h3
                                            class="card-title"
                                            style="color: white"
                                        >
                                            {{ $item->nama_barang }}
                                        </h3>
                                    </div>
                                </div>
                                <p class="card-text" style=" margin-top: 0px; color: white;">{{ $item->deskripsi}}</p>

                                <div class="col-12">
                                    <p
                                        style="color: white"
                                        class="pull-right card-text"
                                    >
                                        <b
                                            >Rp. {{ number_format($item->harga,
                                            2, ",", ".") }}</b
                                        >
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer" style="border: 0px"></div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="mb-5 text-center" style="overflow-x: scroll">
                        $list_menu->links() }}
                    </div> -->
                </div>
            </div>
        </div>