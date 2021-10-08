@extends('admin.master.master')
@section('main')
    <div class="row">
        {{-- @if (session('alert'))
            <section class='alert alert-{{ session('color') }}'>{{ session('alert') }}</section>
        @endif --}}
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_category as $key => $value)
                    <tr>
                        <th scope="col">{{ $key }}</th>
                        <th scope="col">{{ $value->name }}</th>
                        <th scope="col">{{ $value->status == 0 ? 'Active' : 'Deactivated' }}</th>
                        <th scope="col"><a class="btn btn-primary" href="{{ route('category.edit',$value->id) }}">Update</a></th>
                        <form action="{{ route('category.destroy', $value->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <th scope="col"><Button class="btn btn-danger" >Remove</Button></th>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@stop()
