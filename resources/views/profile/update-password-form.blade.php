 <div class="col-12 col-md-9">
<x-jet-form-section submit="updatePassword">

    <x-slot name="title" >
<div class="card-header card-header-border-bottom text-dark">
        {{ __('Update Password') }}
            </div>
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>
{{--     <div class="content-wrapper">
    <div class="content">
    <div class="row"> --}}

{{-- <div class="form-group"> --}}
        <div class="col-lg-12">
             <h4>Basic Form Controls</h4>
    <x-slot name="form">
        <div class="col-12 col-md-12">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" style="color:black;"/>
            <x-jet-input id="current_password" type="password" class="form-control" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" style="color:red;" />
        </div>
        <div class="col-12 col-md-12">
            <x-jet-label for="password" value="{{ __('New Password') }}" style="color:black;"/>
            <x-jet-input id="password" type="password" class="form-control" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" style=" color:red;"/>
        </div>

        <div class="col-12 col-md-12">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" style="color:black;"/>
            <x-jet-input id="password_confirmation" type="password" class="form-control" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
        <x-jet-input-error for="password_confirmation" class="mt-2" style="color:red;"/>
        </div>
    </x-slot>
{{-- </div>
</div>
</div> --}}
</div>
    <x-slot name="actions" >
 <div class="text-center">
        <x-jet-action-message class="btn btn-success " on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button class="btn btn-primary">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
    </div>
</x-jet-form-section>
</div>
{{-- <div class="clearfix"> --}}