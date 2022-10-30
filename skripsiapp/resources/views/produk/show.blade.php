@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="content-dashboard mt-10 ml-2"> 
      
        <div class="d-flex">
            <div class="row ml-1">
            <h2>
                <a href="/brand/{slug}'" class="btn btn-secondary btn-md mr-2" role="button"><i class="fa fa-arrow-left"></i></a>            
                {{$produk->nama_produk}}
            </h2>
            </div>
        </div>
        <div class="row task">
            <div class="col mx-1 card card-task">
                <div class="card-header d-flex justify-content-between">
                    <h5>Brief</h5>
                    <div class="row">
                        <a class="btn btn-outline-primary" href="/brief/create">Add</a>
                        {{-- <a class="btn btn-outline-primary ml-1" href="/brief/{{$packagings->id_packaging}}/edit">Edit</a> --}}
                    </div>                    
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-text">With supporting text below</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Brief</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>                           
                </div>
            </div>
            <div class="col mx-1 card card-task">
                <div class="card-header d-flex justify-content-between">
                    <h5>RND</h5>
                    <div class="row">
                        <a class="btn btn-outline-primary" href="/rnd/create">Add</a>
                        <a class="btn btn-outline-primary ml-1" href="/rnd/edit">Edit</a>
                    </div>
                </div>
                <div class="card-body">                                  
                    <div class="mb-3">
                        <h5 class="card-title">File Penandaan</h5>
                        <p class="card-text">-</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">File BPOM</h5>
                        <p class="card-text">-</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">File Halal</h5>
                        <p class="card-text">-</p>
                    </div>
                </div>
            </div>
            <div class="col mx-1 card card-task">
                <div class="card-header d-flex justify-content-between">
                    <h5>Packaging</h5>
                    <div class="row">
                        <a class="btn btn-outline-primary" href="/packaging/create">Add</a>
                        {{-- @foreach ($packagings as $packaging[])   
                            <a class="btn btn-outline-primary ml-1" href="/packaging/{{$packaging->id_packaging}}/edit">Edit</a>
                        @endforeach --}}
                        {{-- @foreach ($packagings as $packaging)
                            <a class="btn btn-outline-primary ml-1" href="/packaging/{{$packaging->packaging['id_packaging']}}/edit">Edit</a>
                            
                        @endforeach --}}
                    </div> 
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Jenis</h5>
                        @foreach ($packagings as $packaging)
                            <p class="card-text">{{ $packaging->jenis_packaging}}</p>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">warna</h5>
                        @foreach ($packagings as $packaging)
                            <p class="card-text">{{ $packaging->warna_packaging}}</p>
                        @endforeach
                    </div>   
                    <div class="mb-3">
                        <h5 class="card-title">Foto</h5>
                        @foreach ($packagings as $packaging)
                            <p class="card-text" src="/images/{{$packaging->foto_packaging}}"></p>
                        @endforeach
                    </div>  
                    <div class="mb-3">
                        <h5 class="card-title">Status</h5>
                        @foreach ($packagings as $packaging)
                            <p class="card-text">{{ $packaging->status_packaging}}</p>
                        @endforeach
                    </div>                        
                </div>
            </div>
            <div class="col mx-1 card card-task">
                <div class="card-header d-flex justify-content-between">
                    <h5>Design</h5>
                    <div class="row">
                        <a class="btn btn-outline-primary" href="/packaging/create">Add</a>
                        <a class="btn btn-outline-primary ml-1" href="/packaging/edit">Edit</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Preview Design</h5>
                        <p class="card-text">File uploaded</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">File Illustrator</h5>
                        <p class="card-text">File uploaded</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">File Approval</h5>
                        <p class="card-text">File uploaded</p>
                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">File Cetak</h5>
                        <p class="card-text">File uploaded</p>
                    </div>
                </div>
            </div>
        </div>                                           
     
    </div>
  <!--End Content-->
@endsection