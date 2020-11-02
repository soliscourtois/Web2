<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

<div class="modal fade" id="createPaciente">
    <form method="POST" id="PacienteForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="close" data-dismiss="modal">
                        <span>C</span>
                    </button> --}}
                    <h4 class="modal-title text-center" id="myModalLabel">NUEVO REGISTRO</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-12 {{ $errors->has('nombre_bodega') ? 'has-error': '' }}" >
                            <label for="nombres">Nombre y apellidos:</label>
                            <input type="text" class="form-control" placeholder="Ingrese nombres" name="nombres">
                            {!! $errors->first('nombres', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="row">   
                        <div class="form-group col-sm-7" >
                            <label for="telefono">Telefono:</label>
                            <input type="text" class="form-control" placeholder="99999999" name="telefono">
                        </div>
                        <div class="form-group col-sm-5" >
                            <label for="edad">Edad:</label>
                            <input type="number" class="form-control" placeholder="Ingrese edad" name="edad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-5" >
                            <label for="precio">Valor Cancelado:</label>
                            <input type="text" class="form-control" placeholder="Valor" name="precio">
                        </div>
                        <div class="form-group col-sm-7" >
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" placeholder="Valor" name="fecha" onlyread>
                        </div>
                    </div>
                <br>
                <input type="hidden" name="_token" id="tokenBo" value="{{ csrf_token() }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="ButtonTipoModal1" style="padding: 6px 46px">GUARDAR</button>
                </div>
            </div>
        </div>
    </form>
</div>