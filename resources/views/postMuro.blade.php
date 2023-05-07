@extends('Layouts.layoutSecundario')
@section('titulo')
New publication 
@endsection
@section('contenido')

<div class="espacio">
    <div class="col-4 p-5 text-center m-2 rounded-2">
        <!-- Example of a form that Dropzone can take over -->
        <form action="{{ route ('imagenes.store') }}" id="dropzone" name="imagen" method="POST" enctype="multipart/form-data"
         class="dropzone w-100 h-100 rounded border border-1 d-flex align-items-center justify-content-center">
            @csrf
            
        </form>
    </div>
    
<div class="card border border-primary shadow-0 mb-3" style="width: 37rem;">
    <form action="{{ route ('pstImg') }}"  method="POST">
    @csrf
    
    <div class="card-header">Add una publicacion</div>
    <input type="text" name="titulo" />
    <div class="card-body text-primary">
        <div class="input-group">
            <span class="input-group-text border-0">Publicación</span>
            <textarea class="form-control rounded" style="height: 7em;" name="PuTx" aria-label="With textarea"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block mb-4">Publicar</button>
        
    </div>
    @error('PuTx')
        <p style="color:red">{{$message}}</p>
    @enderror
    <div>
        <input type="hidden" name="imagen1" id="imagen" value= {{ old('imagen') }}/>
    </div>
    @error('imagen')
        <p style="color:red">{{$message}}</p>
    @enderror
</div>
</form>
</div>

@endsection