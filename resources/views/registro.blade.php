@extends('master/HeaderFooter')

    @section ('content')
   
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Registro</h2>
    
  </div>

  
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Coletando Informações</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Primeiro nome<span class="text-muted">(Obrigatório)</label>
            <input type="text" class="form-control" id="firstName" placeholder="Ex: Rafael" value="" required>
            <div class="invalid-feedback">
              Confirme o nome informado.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Ultimo nome<span class="text-muted">(Obrigatório)</label>
            <input type="text" class="form-control" id="lastName" placeholder="Ex: Costa" value="" required>
            <div class="invalid-feedback">
              Confirme o ultimo nome informado.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Nome de usuário<span class="text-muted">(Obrigatório)</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Ex: Lilizinha" required>
            <div class="invalid-feedback" style="width: 100%;">
              Seu nome de usuário é <strong>obrigatório</strong>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Opcional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com">
          <div class="invalid-feedback">
            Por favor,insira um email valido para receber as atualizações.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Endereço<span class="text-muted">(Obrigatório)</span></label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
           Por favor,insira seu endereço.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Segundo endereço<span class="text-muted">(Opcional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartamento ou suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">País</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Escolha...</option>
              <option>Brasil</option>
            </select>
            <div class="invalid-feedback">
              Por favor,escolha um país valido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Estado</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Escolha...</option>
              <option>Pernambuco</option>
            </select>
            <div class="invalid-feedback">
              Por favor,escolha um estado valido.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">O endereço de entrega é igual ao meu endereço de cobrança</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Salvar essas informações para a proxima vez</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Principal forma de pagamento</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Cartão de credito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Cartão de débito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nome no cartão</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Nome completo como exibido no cartão</small>
            <div class="invalid-feedback">
              O nome no cartão é obrigatório
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Número do cartão de credito</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Número do cartão de credito é obrigatório
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Vencimento</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Data de vencimento necessária
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">Código de segurança</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Código de seguranã Obrigatório
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar registro</button>
      </form>
    </div>
  </div>


</div>

@endsection
</html>