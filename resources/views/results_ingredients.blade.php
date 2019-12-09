@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles-results-ingredients.css') }}">
@section('content')
<div id="results-ingredients" onload="showIngredients()">
    <div class="result-ingredients-container">
        <div class="results-ingredients-content">
            <div class="ingredients-list-container">
                <h3>List of selected items</h3>
                <ul id="ingredients-list">
                    <li>spaghetti</li>
                </ul>
            </div>
            <hr>
            <div class="recipes-results-container">
                <h1>Possible Recipes..</h1>
                <div class="recipes-flex-row">
                    <div class="recipes-flex">
                        <a href="/recipe-details">
                            <div class="recipe-flex-1"><p>Spaghetti Bolognese</p></div>
                        </a>
                    </div>
                    <div class="recipes-flex">
                        <a href="/recipe-details">
                            <div class="recipe-flex-2"><p>Spaghetti Aglio e Olio</p></div>
                        </a>
                    </div>
                    <div class="recipes-flex">
                    </div>
                    <div class="recipes-flex">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/javascript.js"></script>
@endsection