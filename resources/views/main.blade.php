@extends('navbar')
@section('content')
<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full" style="background-image: url('https://i.imgur.com/Z16MxRW.jpg')">
    <div class="text-center my-5">
        <h1 class="text-white fs-1 fw-bolder">E-Fridge</h1>
        <p class="text-white-50 mb-0">Your recipe organizer</p>
    </div>
</header>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
              Placeholder do przepisów 
            </div>
        </div>
    </div>
</section>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
</div>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <livewire:products/>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@livewireStyles

@livewireScripts
@endsection
