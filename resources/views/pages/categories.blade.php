@extends('layouts.app')
@section('content')
    <div id="app" class="valign-wrapper mt-4 pt-3">
        <div class="container content-secondary mt-4 pt-3">
            <v-app >
                <slider-vue color="red" v-model="value1"></slider-vue>
            </v-app>
            <h4 class="py-4">Let's help you</h4>
            <div class="row valign-wrapper">
                <div class="valign col s12">
                    <categories-vue></categories-vue>
                </div>
            </div>
        </div>
    </div>
@stop
