@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="container-fluid">
        <div class="content-brand">
            <form action="/packaging" method="POST" class="card-brief" enctype="multipart/form-data">
                @csrf 
                <!-- /resources/views/post/create.blade.php -->
 
                <h2>Packaging</h2>
                
                <!-- Create Post Form -->
                
                <x-input field="jenispackaging" label="Jenis Packaging" type="text" placeholder="jenis packaging"/>
                <x-input field="warnapackaging" label="Warna Packaging" type="text" placeholder="Warna packaging"/>
                {{-- <x-inputimage field="fotopackaging" label="Foto Packaging" /> --}}
                <div class="form-group row">
                    <label for="statuspackaging" class="col-sm-3 col-form-label">Nama Produk</label>                                       
                    <div class="col-sm-9">
                        <select class="btn-sm col-sm" name="id_produk" id="statuspackaging" type="" value="{{old('statuspackaging')}}">
                            <option class="btn" value="">-- Pilih Brand --</option>
                            @foreach ($produks as $produk)
                                <option value="{{$produk->id_produk}}">{{$produk->nama_produk}}</option>
                            @endforeach
                        </select>                       
                    </div>
                </div>
                
                {{-- <div class="form-group row">
                    <label for="statuspackaging" class="col-sm-3 col-form-label">Status Packaging</label>                                       
                    <div class="col-sm-9">
                        <select class="btn-sm col-sm" name="statuspackaging" id="statuspackaging" type="" value="{{old('statuspackaging')}}">
                            <option class="btn" value="Plan">-</option>
                            <option class="btn" value="Plan">Plan</option>
                            <option class="btn" value="In Progress">In Progress</option>
                            <option class="btn" value="Canceled">Canceled</option>
                            <option class="btn" value="Done">Completed</option>
                        </select>       
                    </div>
                </div> --}}
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
    