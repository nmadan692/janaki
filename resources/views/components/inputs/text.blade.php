<div class="{{ $formClass ?? '' }} {{ $errors->first($name) ? 'has-danger' : null }}">
    @if($label)
        <label for="{{$labelFor}}">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" class="form-control m-input m-input--air {{ $inputClass ?? '' }}" id="{{ $inputId ?? ''}} {{ $errors->first($name) ? 'inputDanger1' : null }}"
           {{ $readOnly }} {{ $disabled }} aria-describedby="{{$name.'Help'}}" placeholder="{{ $placeHolder }}"
           name="{{$name}}" value="{{ $value }}">

    @if($helpText)
        <span class="m-form__help {{ $helpClass }}">{{ $helpText }}</span>
    @endif
    @if($errors)
        <span class="error">{{ $errors->first($name) }}</span>
    @endif
</div>
