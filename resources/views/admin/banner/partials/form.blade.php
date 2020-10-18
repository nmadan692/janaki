<x-portlets.base portlet-class="col-md-12" footer-class="m-portlet__foot--fit" :form=true form-action="{{ $data['form-action'] }}" form-method="{{ $data['form-method'] }}" :model="$data['banner']">
    <x-slot name="headTitle"> {{ $data['form-title'] }}</x-slot>
    <x-slot name="content">
        @if($errors->count())
            <div class="alert alert-danger" role="alert">
                Validation Errors! Please check out the form.
            </div>
        @endif
            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Tittle" labelfor="tittle" name="tittle" type="text" value="{{  $data['banner']->name ?? old('tittle')  ?? null }}"></x-inputs.text>

                <x-inputs.ckeditor form-class="col-lg-12" label="Description" labelfor="sub_title" name="sub_tittle" input-id="sub_tittle" value="{!! ($data['banner'] ? $data['banner']->sub_tittle:  old('sub_tittle') )? old('sub_tittle') : null !!}"></x-inputs.ckeditor>

            </div>
        <div class="form-group m-form__group row">
            <x-inputs.image form-class="col-lg-6" :errors="$errors" label="Image(1920*810)" labelfor="image" name="image" value="{{  $data['banner']->image ?? old('image') ?? null }}"></x-inputs.image>
        </div>

    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
