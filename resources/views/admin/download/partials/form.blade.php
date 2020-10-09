<x-portlets.base portlet-class="col-md-12" footer-class="m-portlet__foot--fit" :form=true form-action="{{ $data['form-action'] }}" form-method="{{ $data['form-method'] }}" :model="$data['download']">
    <x-slot name="headTitle"> {{ $data['form-title'] }}</x-slot>
    <x-slot name="content">
        @if($errors->count())
            <div class="alert alert-danger" role="alert">
                Validation Errors! Please check out the form.
            </div>
        @endif
            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Name" labelfor="name" name="name" type="text" value="{{  $data['download']->name ?? old('name') ?? null }}"></x-inputs.text>
            </div>
            <div class="form-group m-form__group row">

                <x-inputs.ckeditor form-class="col-lg-12" label="Description" labelfor="description" name="description" input-id="description" value="{!! $data['download'] ? $data['download']->description:  old('description') ? old('description') : null !!}"></x-inputs.ckeditor>

            </div>
            <div class="form-group m-form__group row">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="file">
            </div>
            <div class="form-group m-form__group row">
                <x-inputs.image form-class="col-lg-6" :errors="$errors" label="Image" labelfor="image" name="image" value="{{  $data['download']->image ?? old('image') ?? null }}"></x-inputs.image>
            </div>

    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
