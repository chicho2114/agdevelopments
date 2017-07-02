@if($type == 'error')
    <div class="row">
      <div class="col s12 m12">
        <div class="card-panel red darken-1">
        <p class="white-text"><strong>El mensaje no se ha podido enviar debido a los siguientes inconvenientes:</strong></p>
        
        <ul class="white-text">
            @if ($errors->has('nombre'))
                <li>{{ $errors->first('nombre') }}</li>
            @endif
            @if ($errors->has('correo'))
                <li>{{ $errors->first('correo') }}</li>
            @endif
            @if ($errors->has('mensaje'))
                <li>{{ $errors->first('mensaje') }}</li>
            @endif
            @if ($errors->has('g-recaptcha-response'))
                <li>{{ $errors->first('g-recaptcha-response') }}</li>
            @endif
            @if (!empty($exception))
                <li>{{ $exception }}</li>
            @endif
        </ul>
        </div>
      </div>
    </div>
@else
    <div class="row scale-transition">
      <div class="col s12 m12">
        <div class="card-panel blue">
          <span class="white-text">Mensaje enviado satisfactoriamente. Gracias por contactarte con nosotros.
          </span>
        </div>
      </div>
    </div>
@endif

