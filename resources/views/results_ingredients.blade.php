@extends('layout.master')

@section('content')
<div id="results-ingredients" onload="showIngredients()">
    <div class="result-ingredients-container">
        <div class="results-ingredients-content">
            <div class="ingredients-list-container">
                <h3>List of selected items</h3>
                <ul id="ingredients-list">
                    @foreach ($searches as $search)
                    <li>{{ $search->name }}</li>
                    @endforeach
                </ul>
            </div>
            <hr>
            <div class="recipes-results-container">
                <h1>Possible Recipes..</h1>
                <div class="row mt-5">
                @foreach($foods as $food)
                <div class="col-md-3 mb-5">
                    <a href="/recipe-details/{{ $food->id }}">
                        <img src="{{ $food->image }}" alt="{{ $food->name }}">
                        <p>{{ $food->name }}</p>
                    </a>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection