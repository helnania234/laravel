@extends('layouts.head')

@section('content')

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">List</strong></div>
        </div>
    </div>
</div>

@if (session('pesan'))
<div role="alert" class="alert alert-success">
    {{ session('pesan') }}
</div>
@elseif(session('error'))
<div role="alert" class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Deskripsi</th>
                                <th class="product-remove">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $item)
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="/images/{{ $item->img }}" alt="Image" class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{ $item->nama }}</h2>
                                </td>
                                <td>Rp. {{ $item->price }}</td>
                                <td>
                                    {{ $item->deskripsi }}
                                </td>
                                <td><a href="#" class="btn btn-warning height-auto btn-sm">Update</a>
                                    <a href="{{ route('admin.delete', ['id'=>$item->id]) }}"
                                        class="btn btn-danger height-auto btn-sm">Delete</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <button class="btn btn-primary btn-sm btn-block">Add Book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
