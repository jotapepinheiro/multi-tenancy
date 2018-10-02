@include('tenants.includes.alerts')

@csrf

<div class="form-group">
    <input value="{{ $company->name or old('name') }}" class="form-control" type="text" name="name" placeholder="Nome:">
</div>
<div class="form-group">
    <input value="{{ $company->domain or old('domain') }}" class="form-control" type="text" name="domain" placeholder="Domínio:">
</div>
<div class="form-group">
    <input value="{{ $company->bd_database or old('bd_database') }}" class="form-control" type="text" name="bd_database" placeholder="Database:">
</div>
<div class="form-group">
    <input value="{{ $company->bd_hostname or old('bd_hostname') }}" class="form-control" type="text" name="bd_hostname" placeholder="Host:">
</div>
<div class="form-group">
    <input value="{{ $company->bd_username or old('bd_username') }}" class="form-control" type="text" name="bd_username" placeholder="Usuário:">
</div>
<div class="form-group">
    <input value="{{ $company->bd_password or old('bd_password') }}" class="form-control" type="password" name="bd_password" placeholder="Senha:">
</div>

@if (!isset($company))
<div class="form-group">
    <label for="create_database">
        <input type="checkbox" name="create_database" checked>
        Criar banco de dados?
    </label>
</div>
@endif

<div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
</div>