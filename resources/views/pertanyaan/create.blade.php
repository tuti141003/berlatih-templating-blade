@extends('adminlte.master')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <p><a class="btn btn-info" href="" role="button" >Masukan Pertanyaan</a></p>
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 3%">#</th>
            <th  style="width: 36%">Judul</th>
            <th style="width: 36%">Isi</th>
            <th style="width: 65px">pilihan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Mysql WorkBench</td>
            <td>Bagaimana cara menginstal Mysql Workbench?</td>
            <td>
                <a class="btn btn-primary" href="" role="button" >Show</a>
                <a class="btn btn-warning" href="" role="button" >Edit</a>
                <a class="btn btn-danger" href="" role="button" >Delete</a></td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Html dan CSS</td>
            <td>Bagaimana cara menghubungkan file Html dengan Css?</td>
            <td><a class="btn btn-primary" href="" role="button" >Show</a>
                <a class="btn btn-warning" href="" role="button" >Edit</a>
                <a class="btn btn-danger" href="" role="button" >Delete</a></td>
          </tr>
          <tr>
            <td>3.</td>
            <td>PHP</td>
            <td>Bagaimana cara mengupgrade versi PHP?</td>
            <td><a class="btn btn-primary" href="" role="button" >Show</a>
                <a class="btn btn-warning" href="" role="button" >Edit</a>
                <a class="btn btn-danger" href="" role="button" >Delete</a></td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Laravel</td>
            <td>Apa itu Laravel?</td>
            <td><a class="btn btn-primary" href="" role="button" >Show</a>
                <a class="btn btn-warning" href="" role="button" >Edit</a>
                <a class="btn btn-danger" href="" role="button" >Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>

@endsection