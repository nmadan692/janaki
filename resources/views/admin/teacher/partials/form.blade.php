<x-portlets.base portlet-class="col-md-12" footer-class="m-portlet__foot--fit" :form=true form-action="{{ $data['form-action'] }}" form-method="{{ $data['form-method'] }}" :model="$data['teacher']">
    <x-slot name="headTitle"> {{ $data['form-title'] }}</x-slot>
    <x-slot name="content">
        @if($errors->count())
            <div class="alert alert-danger" role="alert">
                Validation Errors! Please check out the form.
            </div>
        @endif
        <div class="form-group m-form__group row">
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Name" labelfor="name" name="name" type="text" value="{{  $data['teacher']->name ?? old('name') ?? null }}"></x-inputs.text>
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Subject" labelfor="subject" name="subject" type="text" value="{{  $data['teacher']->subject ?? old('subject') ?? null }}"></x-inputs.text>

        </div>




        <div class="form-group m-form__group row">
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="LinkedIn Link" labelfor="linkedin" name="linkedin" type="text" value="{{  $data['teacher']->linkedin ?? old('linkedin') ?? null }}"></x-inputs.text>
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Facebook Link" labelfor="facebook" name="facebook" type="text" value="{{  $data['teacher']->facebook ?? old('facebook') ?? null }}"></x-inputs.text>
        </div>

        <div class="form-group m-form__group row">
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Instagram Link" labelfor="instagram" name="instagram" type="text" value="{{  $data['teacher']->instagram ?? old('instagram') ?? null }}"></x-inputs.text>
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Twitter Link" labelfor="twitter" name="twitter" type="text" value="{{  $data['teacher']->twitter ?? old('twitter') ?? null }}"></x-inputs.text>
        </div>

        <div class="form-group m-form__group row">
            <x-inputs.image form-class="col-lg-6" :errors="$errors" label="Image(270*270)" labelfor="image" name="image" type="file" value="{{  $data['teacher']->image ?? old('image') ?? null }}"></x-inputs.image>
        </div>




    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
