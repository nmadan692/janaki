<x-portlets.base portlet-class="col-md-12" footer-class="m-portlet__foot--fit" :form=true form-action="{{ $data['form-action'] }}" form-method="{{ $data['form-method'] }}" :model="$data['course']">
    <x-slot name="headTitle"> {{ $data['form-title'] }}</x-slot>
    <x-slot name="content">
        @if($errors->count())
            <div class="alert alert-danger" role="alert">
                Validation Errors! Please check out the form.
            </div>
        @endif
        <div class="form-group m-form__group row">
            <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Title" labelfor="name" name="name" type="text" value="{{  $data['course']->name ?? old('name')  ?? null }}"></x-inputs.text>
            <x-inputs.ckeditor form-class="col-lg-12" label="Description" labelfor="Description" name="description" input-id="description" value="{!! $data['course'] ? $data['course']->description:  old('description') ? old('description') : null !!}"></x-inputs.ckeditor>
        </div>

            <div class="form-group m-form__group row">
                <x-inputs.ckeditor form-class="col-lg-12" label="Apply Process" labelfor="Apply Process" name="apply_process" input-id="apply_process" value="{!! $data['course'] ? $data['course']->apply_process:  old('apply_process') ? old('apply_process') : null !!}"></x-inputs.ckeditor>
                <x-inputs.ckeditor form-class="col-lg-12" label="Certification" labelfor="Certification" name="certification" input-id="certification" value="{!! $data['course'] ? $data['course']->certification:  old('certification') ? old('certification') : null !!}"></x-inputs.ckeditor>
            </div>

            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Start Date" labelfor="start_date" name="start_date" type="date" value="{{  $data['course']->start_date ?? old('start_date') ?? null }}"></x-inputs.text>
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Deadline" labelfor="deadline" name="deadline" type="date" value="{{  $data['course']->deadline ?? old('deadline') ?? null }}"></x-inputs.text>
            </div>

            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Course Duration" labelfor="duration" name="duration" type="text" value="{{  $data['course']->duration ?? old('duration') ?? null }}"></x-inputs.text>
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Class Duration" labelfor="class_duration" name="class_duration" type="text" value="{{  $data['course']->class_duration ?? old('class_duration') ?? null }}"></x-inputs.text>
            </div>

            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Seats" labelfor="seats" name="seats" type="number" value="{{  $data['course']->seats ?? old('seats') ?? null }}"></x-inputs.text>
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Fee" labelfor="fee" name="fee" type="number" value="{{  $data['course']->fee ?? old('fee') ?? null }}"></x-inputs.text>
            </div>


            <div class="form-group m-form__group row">
                <x-inputs.text form-class="col-lg-6" :errors="$errors" label="Skill Level" labelfor="skill_level" name="skill_level" type="text" value="{{  $data['course']->skill_level ?? old('skill_level') ?? null }}"></x-inputs.text>

            </div>

        <div class="form-group m-form__group row">
            <x-inputs.image form-class="col-lg-6" :errors="$errors" label="Image" labelfor="image" name="image" value="{{  $data['blog']->image ?? old('image') ?? null }}"></x-inputs.image>
        </div>


    </x-slot>
    <x-slot name="footer">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">{{ $data['button-text'] }}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </x-slot>
</x-portlets.base>
