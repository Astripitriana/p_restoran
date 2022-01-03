@extends('layouts.admin')
@section('main-content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Kritik dan Saran</h1>
        </div>
<div class="d-flex justify-content-center">

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Data Feedback</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">Isi</label>
                                <input type="text" name="isi" value="{{ $feedback->isi }}" class="form-control" readonly>
                            </div>

                            {{-- <div class="form-group">
                                <label for=""> Book Cover</label>
                                <br>
                                <img src="{{ $book->image() }}" style="width:350px; height:350px; padding:10px;" />
                            </div> --}}
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/feedback') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
