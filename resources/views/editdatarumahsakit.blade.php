<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terakorp Screening</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="js/main.js"></script> //cara kedua --}}
</head>

<body>
    <div class="text-center">
        <h1>Tambah Rumah Sakit</h1>
        <div class="container border text-center pt-3 pb-3">
            <div class="width: 50%">
                <form action="{{ route('editDataRS', ['id' => $rumahsakit->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label for="namarumahsakit" class="col-sm-2 col-form-label">Nama : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="namarumahsakit" name="nama"
                                value="{{ $rumahsakit->nama_rumahsakit }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamatrumahsakit" class="col-sm-2 col-form-label">Alamat : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamatrumahsakit" name="alamat"
                                value="{{ $rumahsakit->alamat }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email : </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $rumahsakit->email }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ $rumahsakit->phone }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
