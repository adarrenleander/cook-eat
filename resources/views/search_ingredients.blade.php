@extends('layout.master')

@section('content')
<div id="search-ingredients">
    <div class="search-ingredients-container">
        <div class="search-ingredients-content">
            <div class="ingredients-input-container">
                <h1>Search by Ingredients</h1>
                <form action="/search-ingredients" method="post">
                    @csrf
                    <input type="text" placeholder="Enter your ingredients.." id="ingredient" name="search" autofocus>
                    <input type="submit" value="Enter">
                </form>
            </div>
            <hr>
            <div class="ingredients-list-container">
                <h1>Your Ingredients</h1>
                <h3>List of selected items</h3>
                <ul id="ingredients-list">
                    @foreach ($searches as $search)
                    <a href="/search-ingredients/remove/{{ $search->id }}"><li>{{ $search->name }}</li></a>
                    @endforeach
                </ul>
                <a href="/results-ingredients"><button>SEARCH</button></a>
            </div>
        </div>
    </div>
</div>
@endsection