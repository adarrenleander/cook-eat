@if(!Request::is('/'))
<header>
    <div class="header-left">
        <a href="/"><img src="{{ asset('images/logo/logo3.png') }}" alt="Cook&Eat" class="logo"></a>
        <form action="/search-food" method="get">
            <input type="text" placeholder="Search for Recipes.." name="search" autocomplete="off">
            <div class="search-container">
                <img src="{{ asset('images/icons/magnifier-tool.png') }}"alt="Search Icon" class="search">
            </div>
        </form>
        <h2>OR</h2>
        <a href="/search-ingredients"><button>Search by Ingredients</button></a>
    </div>
    <div class="header-right mr-5">
        <a href="/cart" class="mr-3"><button>CART</button></a>
        <a href="/premium-account"><button>UPGRADE</button></a>
    </div>
</header>
@endif