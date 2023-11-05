@extends('navbar')
@section('content')

<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full justify-content-center" style="filter:brightness(50%); background-image: url('https://images.unsplash.com/photo-1610348725531-843dff563e2c?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <div class="text-center my-5" style="filter:brightness(100%);">
        <h1 class="text-white fs-1 fw-bolder">E-Fridge</h1>
        <p class="text-white mb-0">Your recipe organizer</p>
    </div>  
    
</header>
<!-- Content section-->
<section class="py-5" >
    <div class="container h-100">
       <livewire:recipes-main/>
    </div>
</section>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full" style="filter:brightness(50%); background-image: url('https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
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
<footer class="py-5" style="background-color: teal">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
    </div>
</footer>
@livewireStyles

@livewireScripts
@endsection
