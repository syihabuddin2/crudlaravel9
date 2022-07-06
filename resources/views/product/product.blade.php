@extends('utils.layouts.main')
@include('utils.layouts.title')
@include('utils.layouts.navbar')
@include('utils.layouts.sidebar')

@section('content')
    <main id="maincontent" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('product.create') }}" class="btn btn-md btn-success mb-3">
                                <span data-feather="plus" class="align-text-bottom"></span>
                            </a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ Storage::url('public/products/') . $product->image }}"
                                                    class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $product->type }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Are you sure ?');"
                                                    action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                    <a href="{{ route('product.edit', $product->id) }}"
                                                        class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Product data not yet available.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $products->links() }}
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
