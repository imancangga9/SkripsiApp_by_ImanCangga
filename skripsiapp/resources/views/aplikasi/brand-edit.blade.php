@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="container-fluid">
        <div class="content-brand">
            <form action="/brand/{{$brand->id_brand}}" method="POST" class="card-brief" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <!-- /resources/views/post/create.blade.php -->
 
                <h1>Edit Brand</h1>
                
                <!-- Create Post Form -->
                <x-input field="namabrand" label="Nama Brand" type="text" placeholder="Nama Brand" value="{{$brand->nama_brand}}"/>

                <x-inputimage field="logobrand" label="Logo Brand" />
                

                <div class="text-center text-lg-start mt-4 pt-2">                   
                    <button type="submit" value="send" class="btn w-100 btn-primary btn-md"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Save
                    </button>                                   
                </div>
            </form>
        </div>                    
    </div>
    <!--End Content-->
@endsection
    