<x-portlets.base portlet-class="col-md-12" footer-class="m-portlet__foot--fit" :form=true form-action="{{ $data['form-action'] }}" form-method="{{ $data['form-method'] }}" :model="$data['about']">
    <x-slot name="headTitle"> {{ $data['form-title'] }}</x-slot>
    <x-slot name="content">
        @if($errors->count())
            <div class="alert alert-danger" role="alert">
                Validation Errors! Please check out the form.
            </div>
        @endif
        <div class="form-group m-form__group row">
            <x-inputs.ckeditor form-class="col-lg-12" label="About US" labelfor="about_us" name="about_us" input-id="about_us" value="{!! $data['about'] ? $data['about']->about_us:  old('about_us') ? old('about_us') : null !!}"></x-inputs.ckeditor>

        </div>
            <div class="form-group m-form__group row">
                <x-inputs.ckeditor form-class="col-lg-12" label="Message From MD" labelfor="message_from_md" name="message_from_md" input-id="message_from_md" value="{!! $data['about'] ? $data['about']->message_from_md:  old('message_from_md') ? old('message_from_md') : null !!}"></x-inputs.ckeditor>

            </div>


        <div class="form-group m-form__group row">

            <x-inputs.image form-class="col-lg-6" :errors="$errors" label="Image" labelfor="image" name="image" value="{{  $data['about']->image ?? old('image') ?? null }}"></x-inputs.image>

        </div>


    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
