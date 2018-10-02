@extends('tenants.layouts.main')

@section('content')

<h1>Detalhes da empresa <b>{{ $company->name }}</b></h1>

<ul>
    <li><strong>Nome:</strong> {{ $company->name }}</li>
    <li><strong>Domínio:</strong> {{ $company->domain }}</li>
    <li><strong>Database:</strong> {{ $company->bd_database }}</li>
    <li><strong>Host:</strong> {{ $company->bd_hostname }}</li>
    <li><strong>Usuário:</strong> {{ $company->bd_username }}</li>
    <li><strong>Senha:</strong></li>
</ul>

<hr>

<form action="{{ route('company.destroy', $company->id) }}" method="post">
    @csrf

    <input type="hidden" name="_method" value="DELETE">

    <button type="submit" class="btn btn-danger">Deletar Empresa: {{ $company->name }}</button>
</form>


@endsection