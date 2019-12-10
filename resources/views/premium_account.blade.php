@extends('layout.master')

@section('content')
<div id="premium-account">
    <div class="premium-account-container">
        <div class="premium-account-content-header-container">
            <div class="premium-account-content-header">
                <img src="images/logo/logo3-black.png" alt="Cook&Eat Logo" class="premium-account-logo">
                <h3>X</h3>
                <h2>PREMIUM<br>MEMBERSHIP</h2>
            </div>
        </div>
    </div>
    <div class="premium-account-content-container">
        <div class="premium-account-content premium-account-text">
            <h3>Why switch over to Premium?</h3>
            <p>Unlock more than 200 types of cuisine-making guides with flavours that rival high quality restaurants, exclusively only for Cook&Eat premium members.</p>
        </div>
        <hr>
        <div class="premium-account-content premium-account-text">
            <h3>Benefits</h3>
            <p>Gain access to exclusive content, such as:</p>
            <ul>
                <li>Special recipes curated by our partner chefs</li>
                <li>Food delivery discounts</li>
                <li>Unlimited food searches</li>
                <li>and many more...</li>
            </ul>
        </div>
        <hr>
        <div class="premium-account-content premium-account-testimony">
            <h3>People who have joined</h3>
            <div class="testimony-flex-container">
                <div class="testimony-flex">
                    <img src="images/testimony/joe-ingles-square.jpg" alt="Testimony 1">
                    <p class="name">Joe Ingles</p>
                    <p class="quote"><span>"</span>I managed to improve my cooking skills through this website.<span>"</span></p>
                </div>
                <div class="testimony-flex">
                    <img src="images/testimony/ari-staprans-leff-square.jpg" alt="Testimony 2">
                    <p class="name">Ari Staprans Leff</p>
                    <p class="quote"><span>"</span>It's so useful even Gordon Ramsay is looking for references on this site!!<span>"</span></p>
                </div>
                <div class="testimony-flex">
                    <img src="images/testimony/adebayo-akinfenwa-sqaure.jpg" alt="Testimony 3">
                    <p class="name">Adebayo Akinfenwa</p>
                    <p class="quote"><span>"</span>This site helps me manage my food stocks so it doesn't go to waste.<span>"</span></p>
                </div>
                <div class="testimony-flex">
                    <img src="images/testimony/george-miller-square.jpg" alt="Testimony 4">
                    <p class="name">George Miller</p>
                    <p class="quote"><span>"</span>I'm often confused on what to cook and Cook&Eat is always there to rescue me.<span>"</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection