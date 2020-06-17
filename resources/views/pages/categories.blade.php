@extends('layouts.app')
@section('content')
    <div id="app" class="valign-wrapper mt-4 pt-3">
        <div class="container content-secondary mt-4 pt-3">
            <h4>Find your perfect place to live</h4>
            <div class="row valign-wrapper">
                <div class="valign col s12">
                    <categories-vue></categories-vue>
                </div>
            </div>
        </div>
    </div>
@stop
