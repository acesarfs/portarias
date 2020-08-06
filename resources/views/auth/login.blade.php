@extends('master')

@section('content')
@parent

<form method="POST" action="/login">
    @csrf
    
    <div class="form-group row">
        <label for="codigo_vigia" class="col-sm-4 col-form-label text-md-right">Código do Vigia</label>

        <div class="col-md-6">
            <input type="text" name="codigo_vigia" value="{{ old('codigo_vigia') }}" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

        <div class="col-md-6">
            <input type="password" name="password" required>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
    </div>
</form>

@endsection