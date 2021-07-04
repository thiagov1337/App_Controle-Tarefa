@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Tarefa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tarefa.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tarefa</label>
                            <input type="text" class="form-control" id="" name="tarefa" value="{{ old('tarefa') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Data limite conclusão</label>
                            <input type="date" class="form-control" id="" name="data_limite_conclusao" value="{{ old('data_limite_conclusao') }}">
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
