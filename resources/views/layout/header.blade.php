@if(!Request::is('/'))
<header>
    <div class="header-left">
        <a href="/"><img src="{{ asset('images/logo/logo3.png') }}" alt="Cook&Eat" class="logo"></a>
        <input type="text" placeholder="Search for Recipes..">
        <div class="search-container">
            <a href="#"><img src="{{ asset('images/icons/magnifier-tool.png') }}"alt="Search Icon"class="search"></a>
        </div>
        <h2>OR</h2>
        <a href="/search-ingredients"><button>Search by Ingredients</button></a>
    </div>
    <div class="header-right mr-5">
        <a href="/premium-account"><button>UPGRADE</button></a>
    </div>
</header>
@endif