@extends('admin.layouts.dashboard')
@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Medicamentos</h2>
    </div>
    <div class="col-md-6">
        <a href="/posts/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Agregar nuevo medicamento</a>
    </div>
</div>
<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
  <i class="fas fa-table"></i>
  Listado de Medicamentos</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de Medicina</th>
            <th>Precio</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Nombre de Medicina</th>
          <th>Precio</th>
        </tr>
      </tfoot>
      <tbody>
            <tr>
                <td>1</td>
                <td>Penicilina</td>
                <td>Q.50.00</td>
            </tr>
          
        
        
      </tbody>
    </table>
  </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection