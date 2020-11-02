@extends('admin.layouts.dashboard')
@section('content')
@include('admin.pacientes.createModal')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Pacientes</h2>
    </div>
    <div class="col-md-6">
        <button class="btn btn-primary btn-lg float-md-right" data-toggle="modal" data-target="#createPaciente"> Agregar Paciente
         {{--    <a data-toggle="modal" data-target="#createPaciente" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Agregar Paciente</a>

        <a href="/posts/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Agregar Paciente</a>
     --}}</div>
</div>
<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
  <i class="fas fa-table"></i>
  Listado de Pacientes</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Teléfono</th>
            <th>Edad</th>
            <th>Valor Cancelado</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Nombres</th>
          <th>Teléfono</th>
          <th>Edad</th>
          <th>Valor Cancelado</th>
        </tr>
      </tfoot>
      <tbody>
            <tr>
                <td>1</td>
                <td>Siniestro Solovino</td>
                <td>9999-9999</td>
                <td>101</td>
                <td>Q.300.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Serpento Asturias</td>
                <td>7777-9999</td>
                <td>99</td>
                <td>Q.801.00</td>
            </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection

@push('scripts')
<script src="{{asset('js/pacientes/create.js')}}"></script>
@endpush 