@if ($errors->any())
    @foreach ($errors->all() as $error)
<p class="alert alert-danger">*{{$error}}</p>
    @endforeach
    
@endif

<form action="{{$action}}" method="post" class="col-md-12 col-12">
    <div class="row">
        {{csrf_field()}}
        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >Titulo:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required="required" value="{{$tarea->titulo}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="prioridad_id">Prioridad:</label>
                            <select class="form-control" name="prioridad_id" id="prioridad_id">
                                <option value="0">Selecciona</option>
                                @if (!empty($prioridades))
                                    @foreach ($prioridades as $prioridad)
                                        <option value="{{$prioridad->id}}" {{$prioridad->id === $tarea->prioridad_id ? 'selected' : ''}}>{{$prioridad->prioridad}}</option>
                                    @endforeach
                                @endif

                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <span class="text-danger">*&nbsp;</span><label>Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{$tarea->descripcion}}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary btn-block">Guardar</button>

    </div>
    @if (!empty($put))
        <input type="hidden" name="_method" value="PUT">       
    @endif
</form>