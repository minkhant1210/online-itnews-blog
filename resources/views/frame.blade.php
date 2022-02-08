@extends('layouts.app')

@section('title')
    Frame
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card mb-3">
                <div class="card-header">
                    Frame Page
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque illum, modi quasi quibusdam quo soluta voluptatum! Iure magnam maxime officiis qui sunt temporibus veritatis! Amet autem blanditiis expedita nam nemo.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Venobox Test
                </div>
                <div class="card-body">
                    <a class="venobox" href="{{ asset('images/post-1.jpeg') }}">
                        <img src="{{ asset('images/post-1.jpeg') }}" style="height: 100px" class="rounded" alt="image alt"/>
                    </a>
                    <x-veno-image gall="post" small="{{ asset('images/post-2.jpeg') }}"></x-veno-image>
                    <x-veno-image gall="post" small="{{ asset('images/post-3.jpeg') }}"></x-veno-image>
                    <x-veno-image gall="post" small="{{ asset('images/post-4.jpeg') }}"></x-veno-image>
                    <x-veno-image small="{{ asset('images/post-5.jpeg') }}"></x-veno-image>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    Form Elements
                </div>
                <div class="card-body">
                    <x-input name="name" type="Text" class="fa-user" inputTitle="User Name"></x-input>
                    <x-input name="password" type="password" class="fa-lock" inputTitle="Password"></x-input>
                    <x-text-area class="fa-file" name="description" title="Description" ></x-text-area>
                </div>
            </div>
        </div>
    </div>
@endsection
