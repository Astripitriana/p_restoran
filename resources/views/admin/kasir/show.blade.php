@extends('layouts.admin')
@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Kasir</h1>
        </div>
<div class="d-flex justify-content-center">

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Data Kasir</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Kasir</label>
                                <input type="text" name="nama" value="{{ $kasir->nama }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control" value="{{ $kasir->jk}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="{{ $kasir->alamat }}" class="form-control" readonly>
                            </div>
                             <div class="form-group">
                                <label for="">No_hp</label>
                                <input type="text" name="no_hp" value="{{ $kasir->no_hp }}" class="form-control" readonly>
                            </div>
                            {{-- <div class="form-group">
                                <label for=""> Book Cover</label>
                                <br>
                                <img src="{{ $book->image() }}" style="width:350px; height:350px; padding:10px;" />
                            </div> --}}
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/kasir') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
