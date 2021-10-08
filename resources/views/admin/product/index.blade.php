@extends('admin.master.master')
@section('main')

    <div class="row">
        <div class="col-sm-4" style="margin-bottom:15px">
            <form class="form-search" action="{{ URL::to('admin/product/search') }}" method="POST">
                <div class="form-group">
                    <input type="text" class="input-ajax" name="keyword_submit" placeholder="Search..">
                    <input type="submit" name="Search" class="search-submit btn btn-primary btn-sm" value="Search">
                </div>
                @csrf
            </form>
        </div>
        @if (session('alert'))
            <section class='alert alert-success'>{{ session('alert') }}</section>
        @endif  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">View Detail</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item => $value)
                    <tr>
                        <th scope="col">{{ $item + 1 }}</th>
                        <th scope="col">{{ $value-> name }}</th>
                        <td><img class="" style="width:100px;height:100px"
                                src="{{ url('uploads') }}/{{ $value->image }}" alt="">
                        </td>
                        <td>$ {{ $value->price }}</td>
                        <td>$ {{ $value->sale_price }}</td>
                        <td class="{{ $value->status == 1 ? 'text-danger' : 'text-success' }}">
                            {{ $value->status == 1 ? 'Deactivated' : 'Active' }}
                        </td>
                        <td><a class="btn-sm btn-primary" href="{{ route('product.edit', $value->id) }}">Update</a>
                        </td>
                        <td><a class="btn-sm btn-primary" href="{{ route('product.show', $value->id) }}">View Detail</a>
                        </td>
                        <form action="{{ route('product.destroy', $value->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <td><button class="btn-sm btn-danger">Remove</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- <div class="col-sm-12 col-xs-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item indicator left"><a class="page-link" href="#"><i
                                    class="icon-right-arrow"></i></a></li>
                        <li class="page-item"><a class="page-link  active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item indicator right"><a class="page-link" href="#"><i
                                    class="icon-right-arrow"></i></a></li>
                    </ul>
                </nav>
            </div> --}}
            <div class="col-sm-12 col-xs-12">
                <nav aria-label="Page navigation example">
                    @if ($product->lastPage() > 1)
                        <ul class="pagination">
                            @if ($product->onFirstPage())
                                <li class="hidden-md"></li>
                            @else
                                <li class="page-item indicator left"><a class="page-link"
                                        href="{{ $product->previousPageUrl() }}" rel="prev"><i class="fa fa-chevron-left"></i></a>
                                </li>
                            @endif
                            @for ($i = 1; $i <= $product->lastPage(); $i++)
                                <li class="page-item ">
                                    <a class="page-link  {{ $i == $product->currentPage() ? 'active' : '' }}"
                                        href="?page={{ $i }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($product->hasMorePages())
                                <li class="page-item indicator right"><a class="page-link"
                                        href="{{ $product->nextPageUrl() }}" rel="next"><i class="fa fa-chevron-right"></i></a>
                                </li>
                            @else
                                <li class="d-none"></li>
                            @endif
                        </ul>
                    @endif
                </nav>
            </div>
@stop()
