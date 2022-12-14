@extends('layout.master')

@section('content')
   
    <div class="col mx-1 card card-task">
        <div class="card-header d-flex justify-content-between">
            <h5>Packaging</h5>
            <div class="row">
                <a class="btn btn-outline-primary" href="/packaging/create">Add</a>
                <a class="btn btn-outline-primary ml-1" href="/packaging/edit">Edit</a>
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
    
@endsection