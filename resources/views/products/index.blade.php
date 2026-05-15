@extends('template')

@section('title', 'Daftar Produk')

@section('content')

<body class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-10">

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-3">

                <span>{{ session('msg') }}</span>

                <a href="#" class="btn btn-primary">
                    Tambah
                </a>

            </div>

            <table class="table table-bordered table-striped">

                <thead>

                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Variant</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($products as $product)

                    <tr>

                        <td>{{ $product->name }}</td>

                        <td>{{ $product->price }}</td>

                        <td>

                            <ul>

                                @foreach($product->variants()->get() as $var)

                                <li>
                                    {{ $var->name }}
                                </li>

                                Desc: {{ $var->description }} <br>

                                Proc: {{ $var->processor }} <br>

                                RAM: {{ $var->memory }} <br>

                                Strg: {{ $var->storage }} <br>

                                Product: {{ $var->product->name }}

                                <hr>

                                @endforeach

                            </ul>

                        </td>

                        <td>

                            <a href="#" class="btn btn-sm btn-primary">
                                Edit
                            </a>

                            <button class="btn btn-sm btn-danger">
                                Hapus
                            </button>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

@endsection