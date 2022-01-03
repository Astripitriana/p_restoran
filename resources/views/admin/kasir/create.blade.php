   @extends('layouts.admin')
@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Kasir</h1>
        </div>
<div class="d-flex justify-content-center">

   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Kasir</div>
                    <div class="card-body">
                        <form action="{{ route('kasir.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama kasir</label>
                                <input type="text" name="nama" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" name="no_hp" class="form-control">

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
