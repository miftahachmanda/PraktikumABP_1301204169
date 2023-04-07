@extends('template')
@section('title', 'Daftar Produk')
@section('content')

<div class="col-4">
    <span class="float-left">{{ session('msg') }}</span>
    <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
    <table class="table table-striped table-bordered">
        <tr>
            <th>Nama</th>
            <th>Variant</th>
            <th>Aksi</th>
        </tr>
        @foreach($list as $d)
        <tr>
            <td>{{ $d->name }}</td>
            <td>{{ $d->price }}</td>
            <td>
            <ul>
            @foreach($d->variants()->get() as $var)
                <li>{{ $var->name }}</li>
                    Desc: {{ $var->description }} <br />
                    Proc: {{ $var->processor }} <br />
                    RAM: {{ $var->memory }} <br />
                    Strg: {{ $var->storage }} <br />
                    Product: {{ $var->product->name }}
                    @endforeach
            </ul>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection