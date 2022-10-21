@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="content-dashboard mt-10"> 
        <div class="d-flex">
            <div class="p-2"><h2>All Brands</h2></div>
            <div class="ml-auto p-2">
                <a href="/brand/create" class="text-decoration-none">
                    <button class="btn btn-success text-decoration-none"><i class="fa fa-plus"></i> Add New Brand</button>                               
                </a>
            </div>
        </div>
                                                
        <table class="table table-borderless table-striped table-hover table-dashboard">
            <thead class="thead table-title">
                <tr>
                    <th class="col-1" scope="col">No</th>
                    <th class="col-9" scope="col">Merek</th>
                    <th class="col-2" scope="col"></th>
                </tr>
            </thead>
            @foreach ($brands as $key=>$brand)
                <tr class="align-self-center">
                    {{-- <th>{{ $brand->id_brand}}</th> --}}
                    <td>{{ $key + 1}}</td>
                    <td>{{ $brand->nama_brand}}</td>
                    <td class="row">
                        <a href="/brand/{{$brand->slug}}" class="text-decoration-none mx-2">
                            <button class="btn btn-primary text-decoration-none"><i class="fa fa-eye"></i></button>                               
                        </a>
                        <a href="/brand/{{$brand->id_brand}}/edit" class="text-decoration-none mx-2">
                            <button class="btn btn-success text-decoration-none"><i class="fa fa-pen"></i></button>
                        </a>
                        <form action="/brand/{{$brand->id_brand}}" method="POST">
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