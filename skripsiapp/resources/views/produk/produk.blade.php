@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="content-dashboard mt-10 ml-2"> 
      
      <div class="d-flex">
        {{-- <div class="row ml-1">
          <h2>($brands as $brand)
            <a href="/produk" class="btn btn-secondary btn-md mr-2" role="button"><i class="fa fa-arrow-left"></i></a>            
            {{$brand->nama_brand}}
          </h2>
        </div> --}}
        <div class="ml-auto p-2">
            <a href="/produk/create" class="text-decoration-none">
                <button class="btn btn-success text-decoration-none"><i class="fa fa-plus"></i> Add New Poduk</button>                               
            </a>
        </div>
      </div>
      {{-- <div class="sidebar-brand ml-1 my-4">
        <img class="img-logo img-fluid width-10 " src="/images/{{$brand->logo_brand}}" alt="" srcset="">
      </div> --}}
                                               
      <table class="table table-borderless table-striped table-hover table-dashboard">
        <thead class="thead table-title">
            <tr>
                <th class="col-1" scope="col">No</th>
                <th class="col-2" scope="col">Brand</th>
                <th class="col-3" scope="col">Produk</th>
                <th class="col-2" scope="col">Netto</th>
                <th class="col-2" scope="col">Status</th>
                <th class="col-2" scope="col"></th>
            </tr>
        </thead>
        @foreach ($produks as $key=>$produk)
            <tr class="align-self-center">
                <td>{{ $key + 1}}</td>                
                <td>{{ $produk->brands['nama_brand']}}</td> 
                <td>{{ $produk->nama_produk}}</td>
                <td>{{ $produk->netto_produk}}</td>
                <td>{{ $produk->status_produk}}</td>
                <td class="row">
                    <a href="/produk/{{$produk->nama_produk}}" class="text-decoration-none mx-2">
                        <button class="btn btn-primary text-decoration-none"><i class="fa fa-eye"></i></button>                               
                    </a>
                    <a href="/produk/{{$produk->id_produk}}/edit" class="text-decoration-none mx-2">
                        <button class="btn btn-success text-decoration-none"><i class="fa fa-pen"></i></button>
                    </a>
                    <form action="/produk/{{$produk->id_produk}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-decoration-none mx-2"><i class="fa fa-trash"></i></button>                              
                    </form>
                    
                </td>
            </tr>
        @endforeach
      </table>
    </div>
  <!--End Content-->
@endsection