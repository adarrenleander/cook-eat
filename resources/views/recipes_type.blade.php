@extends('layout.master')

@section('content')
<div id="recipes-type">
    <div class="recipes-type-container">
        <div class="recipes-type-content">
            <h1>Recipes - <span>Italian</span></h1>
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
@endsection