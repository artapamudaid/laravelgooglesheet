@extends('app.layout')


@section('content')

<section>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('getForm','1') }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Pekerjaan</th>
                            <th>Kota</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data[0] }}</td>
                            <td>{{ $data[1] }}</td>
                            <td>{{ $data[2] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
@endsection