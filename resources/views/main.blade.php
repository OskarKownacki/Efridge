@extends('navbar')
@section('content')

<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full justify-content-center"
    style="background-image: url('https://i.imgur.com/7h5jR0m.jpg'); background-size:cover">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <div class="text-center my-5">
        <h1 class="text-white fs-1 fw-bolder">E-Fridge </h1>
        <p class="text-white mb-0">Your recipe organizer</p>
        {{-- <img src="https://i.imgur.com/8YEpFjB.png" style="width:100px;height:100px;float:left;"> --}}
    </div>

</header>
<!-- Content section-->
<section class="py-5">
    <div class="container h-100">
        @auth
        <livewire:recipes-main />
        @endauth
        @guest

        <div class="row">
            <div class="col">
                <p class="fs-2" style="text-align:center;">Here your recipes will be displayed! Log in to use that
                    feature.</p>
            </div>
        </div>
        @endguest
    </div>
</section>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full"
    style="background-image: url('https://i.imgur.com/ZjwKf4D.jpg'); background-size:cover">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
</div>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                @auth
                <livewire:products />
                @endauth
                @guest
                <div class="col">
                    <p class="fs-2" style="text-align:center;">Here your products will be displayed! Log in to use that
                        feature.</p>
                </div>
                @endguest
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
@endsection
