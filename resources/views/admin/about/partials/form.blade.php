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
                <x-inputs.ckeditor form-class="col-lg-12" label="Confidence" labelfor="confidence" name="confidence" input-id="confidence" value="{!! $data['about'] ? $data['about']->confidence:  old('confidence') ? old('confidence') : null !!}"></x-inputs.ckeditor>

            </div>
            <div class="form-group m-form__group row">
                <x-inputs.ckeditor form-class="col-lg-12" label="Community" labelfor="community" name="community" input-id="community" value="{!! $data['about'] ? $data['about']->community:  old('community') ? old('community') : null !!}"></x-inputs.ckeditor>

            </div>

            <div class="form-group m-form__group row">
                <x-inputs.ckeditor form-class="col-lg-12" label="Programs" labelfor="programs" name="programs" input-id="programs" value="{!! $data['about'] ? $data['about']->programs:  old('programs') ? old('programs') : null !!}"></x-inputs.ckeditor>

            </div>

            <div class="form-group m-form__group row">
                <x-inputs.ckeditor form-class="col-lg-12" label="Success" labelfor="success" name="success" input-id="success" value="{!! $data['about'] ? $data['about']->success:  old('success') ? old('success') : null !!}"></x-inputs.ckeditor>

            </div>

        <div class="form-group m-form__group row">

            <x-inputs.image form-class="col-lg-6" :errors="$errors" label="Image(547*408)" labelfor="image" name="image" value="{{  $data['about']->image ?? old('image') ?? null }}"></x-inputs.image>

        </div>


    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
