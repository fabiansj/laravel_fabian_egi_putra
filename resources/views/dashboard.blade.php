<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terakorp Screening</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script> --}}
</head>

<body>
    <div class="text-center">
        <h1>Data Rumah Sakit</h1>
    </div>
    <div class="container">
        <div class="mb-2 text-end">
            <a class="btn btn-primary" href="{{ route('tampildatarumahsakit') }}">Data Pasien Data</a>
            <a class="btn btn-primary" href="{{ route('tampildatarumahsakit') }}">Tambah Data</a>
            <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
        </div>
        <table class="table table-bordered">
            <thead class="table-dark">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Rumah Sakit</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rumahsakit as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_rumahsakit }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <a class="btn btn-primary"
                                href="{{ route('tampilEditDataRumahSakit', ['id' => $item->id]) }}">Edit Data</a>
                            <button type="button" class="btn btn-primary"
                                onclick="deleteRS({{ $item->id }})">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="js/main.js"></script> //cara kedua --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
