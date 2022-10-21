@extends('layout.master')

@section('content')
   
    <div class="col mx-1 card card-task">
        <div class="card-header d-flex justify-content-between">
            <h5>Brief</h5>
            <a href="/brief/create" class="text-decoration-none">
                <button class="btn btn-outline-primary text-decoration-none"><i class="fa fa-plus"></i> Edit</button>                               
            </a>
            
        </div>
        
            <div class="card-body">
                <div class="mb-3">
                    <h5 class="card-title">Brief</h5>
                    @foreach ($briefs as $brief)
                        <p class="card-text">{{ $brief->detail_brief}}</p>
                    @endforeach
                </div>
                <div class="mb-3">
                    <h5 class="card-title">File</h5>
                    @foreach ($briefs as $brief)
                        <p class="card-text">{{ $brief->file_brief}}</p>
                    @endforeach
                </div>   
                <div class="mb-3">
                    <h5 class="card-title">Banchmark Produk</h5>
                    @foreach ($briefs as $brief)
                        <p class="card-text">{{ $brief->banchmark}}</p>
                    @endforeach
                </div>  
                <div class="mb-3">
                    <h5 class="card-title">status</h5>
                    @foreach ($briefs as $brief)
                        <p class="card-text">{{ $brief->status_brief}}</p>
                    @endforeach
                </div>                        
            </div>
        
    </div>
    
@endsection