<div class="input-field">
  <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="number" name="RA" value="{{isset($linha->RA) ? $linha->RA : ''}}">
  <label>RA</label>
</div>

<div class="input-field">
  <input type="date" name="data_nasc" value="{{isset($linha->data_nasc) ? $linha->data_nasc : ''}}">
  <label>Data de nascimento</label>
</div>

<div class="file-field  input-field">
  <div class="btn blue">
    <span>Foto</span>
    <input type="file" name="foto">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
@if(isset($linha->foto))
<div class="input-field">
  <img width="150" src="{{asset($linha->foto)}}" />
</div>
@endif
</div>
<div class="input-field">
  <input type="number" name="telefone" value="{{isset($linha->telefone) ? $linha->telefone : ''}}">
  <label>Telefone</label>
</div>
<div class="input-field">
  <input type="text" name="email" value="{{isset($linha->email) ? $linha->email: ''}}">
  <label>Email</label>
</div>