<x-portlets.base portlet-class="col-md-12" footer-class="m-portlet__foot--fit" :form=true form-action="{{ $data['form-action'] }}" form-method="{{ $data['form-method'] }}" :model="$data['abroad']">
    <x-slot name="headTitle"> {{ $data['form-title'] }}</x-slot>
    <x-slot name="content">
        @if($errors->count())
            <div class="alert alert-danger" role="alert">
                Validation Errors! Please check out the form.
            </div>
        @endif
        <div class="form-group m-form__group row">
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Country" labelfor="name" name="name" type="text" value="{{  $data['abroad']->name ?? old('name')  ?? null }}"></x-inputs.text>
            <x-inputs.ckeditor form-class="col-lg-12" label="Description" labelfor="Description" name="description" input-id="description" value="{!! $data['abroad'] ? $data['abroad']->description:  old('description') ? old('description') : null !!}"></x-inputs.ckeditor>
        </div>



            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Course" labelfor="course_name" name="course_name" type="text" value="{{  $data['abroad']->course ?? old('course') ?? null }}"></x-inputs.text>
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="course Duration" labelfor="course_duration" name="course_duration" type="text" value="{{  $data['abroad']->course_duration ?? old('course_duration') ?? null }}"></x-inputs.text>
            </div>

            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Intake" labelfor="intake" name="intake" type="text" value="{{  $data['abroad']->intake ?? old('intake') ?? null }}"></x-inputs.text>
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Requirements" labelfor="requirements" name="requirements" type="text" value="{{  $data['abroad']->requirements ?? old('requirements') ?? null }}"></x-inputs.text>
            </div>




        <div class="form-group m-form__group row">
            <x-inputs.image form-class="col-lg-6" :errors="$errors" label="Image(365*246)" labelfor="image" name="image" value="{{  $data['abroad']->image ?? old('image') ?? null }}"></x-inputs.image>
        </div>


    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
