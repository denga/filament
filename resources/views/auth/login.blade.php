@extends('filament::layouts.auth')

@section('title', $title)

@section('main')

    <x-filament-form :action="route('filament.auth.login')">
        
        <x-filament-fields :fields="$fields" />

        <button type="submit" class="btn w-full">{{ __('Login') }}</button>

    </x-filament-form>
    
@endsection