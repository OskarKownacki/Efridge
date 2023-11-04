@extends('navbar')
@section('content')

<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1610348725531-843dff563e2c?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <div class="text-center my-5">
        <h1 class="text-black fs-1 fw-bolder">E-Fridge</h1>
        <p class="text-black mb-0">Your recipe organizer</p>
    </div>
    
</header>
<!-- Content section-->
<section class="py-5" >
    <div class="container h-100">
        <div class="row h-100">

            <div class="col pl-5 ">
                <div class="p-5 my-5 h-75 text-white text-center" style="background-color: teal" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                
                </div>
            </div>

            <div class="offcanvas offcanvas-bottom h-75" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                  <h2 class="offcanvas-title" id="offcanvasBottomLabel">Przepis na 1XYZ</h2>
                  
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body small">
                  <h5 class="bi bi-stopwatch"> 25 min</h5>
                  <h4>Składniki:</h5>
                  <ul>
                    <li>Składnik 1</li>
                    <li>Składnik 2</li>
                    <li>Składnik 3</li>
                    <li>Składnik 4</li>
                    <li>Składnik 5</li>
                  </ul>

                  <h4>Przygotowanie:</h5>
                    <ol>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 1</li>
                        <li>Lorem ipsum dolor sit amet. 2</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing. 3</li>
                        <li>Lorem ipsum dolor sit. 4</li>
                        <li>Lorem ipsum dolor sit. 5</li>
                    </ol>

                </div>
            </div>





            <div class="col px-5">
                <div class="p-5 my-5 h-75 text-white text-center" style="background-color: teal" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, blanditiis.</h3>
                
                </div>
            </div>

            <div class="offcanvas offcanvas-bottom h-75" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasBottomLabel">Przepis na 2XYZ</h2>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body small">
                    <h5 class="bi bi-stopwatch"> 25 min</h5>
                    <h4>Składniki:</h5>
                    <ul>
                      <li>Składnik 1</li>
                      <li>Składnik 2</li>
                      <li>Składnik 3</li>
                      <li>Składnik 4</li>
                      <li>Składnik 5</li>
                    </ul>
  
                    <h4>Przygotowanie:</h5>
                      <ol>
                          <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 1</li>
                          <li>Lorem ipsum dolor sit amet. 2</li>
                          <li>Lorem ipsum dolor sit amet, consectetur adipisicing. 3</li>
                          <li>Lorem ipsum dolor sit. 4</li>
                          <li>Lorem ipsum dolor sit. 5</li>
                      </ol>
  
                </div>
            </div>



            <div class="col pr-5">
                <div class="p-5 my-5 h-75 text-white text-center" style="background-color: teal" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">
                    <h3>Lorem ipsum dolor sit.</h3>
                
                </div>    
            </div>
          </div>
        
          <div class="offcanvas offcanvas-bottom h-75" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasBottomLabel">Przepis na 3XYZ</h2>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
                <h5 class="bi bi-stopwatch"> 25 min</h5>
                <h4>Składniki:</h5>
                <ul>
                  <li>Składnik 1</li>
                  <li>Składnik 2</li>
                  <li>Składnik 3</li>
                  <li>Składnik 4</li>
                  <li>Składnik 5</li>
                </ul>

                <h4>Przygotowanie:</h5>
                  <ol>
                      <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 1</li>
                      <li>Lorem ipsum dolor sit amet. 2</li>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing. 3</li>
                      <li>Lorem ipsum dolor sit. 4</li>
                      <li>Lorem ipsum dolor sit. 5</li>
                  </ol>

            </div>
        </div>






    </div>
</section>
<!-- Image element - set the background image for the header in the line below-->
<div class="py-5 bg-image-full .bg-dark" style="--bs-bg-opacity: .5; background-image: url('https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
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
