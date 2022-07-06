@extends('utils.layouts.main')
@include('utils.layouts.title')
@include('utils.layouts.navbar')
@include('utils.layouts.sidebar')

@section('content')
    <main id="maincontent" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="backbtn">
                        <form action="/product" method="get">
                            <button type="submit" class="btn btn-md btn-danger">BACK</button>
                        </form>
                    </div>
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <form action="{{ route('product.update', $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label class="font-weight-bold">GAMBAR</label>
                                    <input type="file" class="form-control" name="image">
                                </div>

                                <div class="form">
                                    <label class="font-weight-bold">TYPE</label>
                                    <input type="text" class="form-control @error('type') is-invalid @enderror"
                                        name="type" value="{{ old('type', $product->type) }}"
                                        placeholder="Insert product type">
                                    @error('type')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form">
                                    <label class="font-weight-bold">QUANTITY</label>
                                    <input type="text" class="form-control @error('quantity') is-invalid @enderror"
                                        name="quantity" value="{{ old('quantity', $product->quantity) }}"
                                        placeholder="Insert quantity">
                                    @error('quantity')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form">
                                    <label class="font-weight-bold">PRICE</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                        name="price" value="{{ old('price', $product->price) }}"
                                        placeholder="Insert price">
                                    @error('price')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @include('utils.common.sweetalert')
@endsection
