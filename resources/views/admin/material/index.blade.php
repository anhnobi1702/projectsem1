@extends('admin.master.master')
@section('main')
    <div class="row">
        @if (session('alert'))
            <section class='alert alert-{{ session('color') }}'>{{ session('alert') }}</section>
        @endif  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($material as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->name }}</td>
                        <td><a class="btn-sm btn-primary" href="{{ route('material.edit',$value->id) }}">Update</a>
                        </td>
                        <form action="{{route('material.destroy', $value->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <td><button class="btn-sm btn-danger" >Remove</button>
                        </td>
                    </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@stop()
