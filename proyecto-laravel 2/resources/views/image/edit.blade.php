@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Editar mi imagen</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('image.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="image_id" value="{{ $image->id}}" />
                        <div class="row mb-3">
                            <label for="image_path" class="col-md-3 col-form-label text-md-end">Imagen</label>

                            <div class="col-md-7">
                                @if($image->user->image)
                                    <div class="container-avatar">
                                        <img src="{{ route('image.file',['filename'=>$image->image_path]) }}" />
                                    </div>
                                @endif
                                <input id="image_path" type="file" name="image_path" class="form-control {{ $errors->has('image_path') ? 'is-invalid' : ''}}"/>
                            @if($errors->has('image_path'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image_path') }}</strong>
                                </span>

                            @endif
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-3 col-form-label text-md-end">Descripcion</label>

                            <div class="col-md-7">

                                <textarea id="description" type="text" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" required>{{ $image->descripcion }}</textarea>
                            @if($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>

                            @endif
                            </div>

                        </div>
                        
                        <div class="row mb-3">
                            

                            <div class="col-md-6 offset-md-3">
                                
                                <input type="submit" class="btn btn-primary" value="Actualizar imagen"/>
                                
                            
                            </div>

                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection