@extends('layouts.app')

@section('content')
    <div id="app">
        <example-component></example-component>
        <test-component></test-component>
        <another-test-component 
            v-for="item in groceryList"
            v-bind:todont="item"
            v-bind:key="item.id"
        ></another-test-component>   
    </div>
@endsection
