<x-portlets.base portlet-class="col-md-12" footer-class="m-portlet__foot--fit" :form=true form-action="{{ $data['form-action'] }}" form-method="{{ $data['form-method'] }}" :model="$data['password']">
    <x-slot name="headTitle"> {{ $data['form-title'] }}</x-slot>
    <x-slot name="content">
        @if($errors->count())
            <div class="alert alert-danger" role="alert">
                Validation Errors! Please check out the form.
            </div>
        @endif
        <div class="form-group m-form__group row">
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Email" labelfor="email" name="email" type="text" value="{{  $data['password']->email ?? old('email')  ?? null }}"></x-inputs.text>
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Password" labelfor="password" name="password" type="text" value="{{  $data['password']->password ?? old('password')  ?? null }}"></x-inputs.text>

        </div>

    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
