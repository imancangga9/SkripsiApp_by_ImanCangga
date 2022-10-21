@extends('layout.master')
@section('content')
    <!-- Content-->
    <div class="content-dashboard mt-10">                                          
        <table class="table table-dashboard">
        <thead class="thead table-title">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Brand</th>
            <th scope="col">Produk</th>
            <th scope="col">Penandaan</th>
            <th scope="col">BPOM</th>
            <th scope="col">Halal</th>
            <th scope="col">Packaging</th>
            <th scope="col">Design</th>
            <th scope="col">Approval</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
            <td>
                <a href="/" class="text-decoration-none">
                    <button class="btn btn-primary text-decoration-none"><i class="fa fa-eye"></i></button>                               
                </a>
                <a href="/edit-user" class="text-decoration-none">
                    <button class="btn btn-success text-decoration-none"><i class="fa fa-pen"></i></button>
                </a>
                <a href="/" class="text-decoration-none">
                    <button class="btn btn-danger text-decoration-none"><i class="fa fa-trash"></i></button>                               
                </a>                                                              
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    <!--End Content-->
@endsection
    
