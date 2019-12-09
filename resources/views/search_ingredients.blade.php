@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles-search-ingredients.css') }}">
@section('content')
<div id="search-ingredients">
    <div class="search-ingredients-container">
        <div class="search-ingredients-content">
            <div class="ingredients-input-container">
                <h1>Search by Ingredients</h1>
                <input type="text" placeholder="Enter your ingredients.." id="ingredient" onkeydown="checkEnterKey(event)">
                <input type="submit" value="Enter" onclick="addIngredients()">
            </div>
            <hr>
            <div class="ingredients-list-container">
                <h1>Your Ingredients</h1>
                <h3>List of selected items</h3>
                <ul id="ingredients-list">
                </ul>
                <a href="/results-ingredients"><button>SEARCH</button></a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/javascript.js') }}"></script>
@endsection