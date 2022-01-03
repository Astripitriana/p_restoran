@extends('layouts.admin')
@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Menu</h1>
        </div>
<div class="d-flex justify-content-center">

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Menu</div>
                    <div class="card-body">
                        <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Masakan</label>
                                <input type="text" name="nama" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Gambar Masakan</label>
                                <input type="file" name="gambar_masakan" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Kategori</label>
                                <input type="text" name="kategori" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control">

                            </div>


                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
</div>
</div>
</div>
</section>
</div>
