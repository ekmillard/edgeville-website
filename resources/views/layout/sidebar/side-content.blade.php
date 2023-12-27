

<div id="slider" class="position-absolute w-100 start-0 end-0 overflow-hidden d-flex justify-content-center h-100">
    <div id="carouselExampleControls" class="carousel slide carousel-fade h-100 vw-100" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <!-- SLIDE 1 -->
            <div class="carousel-item h-100 w-100 active">
                <div class="slider-bg">
                    <img src="{{asset('images/toa-bg.jpg')}}" class="w-100" lazy>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item h-100 w-100">
                <div class="slider-bg">
                    <img src="{{asset('images/tob-bg.jpg')}}" class="w-100" lazy>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class="carousel-item h-100 w-100">
                <div class="slider-bg">
                    <img src="{{asset('images/nex-bg.jpg')}}" class="w-100" lazy>
                </div>
            </div>

            <!-- SLIDE BUTTONS/DONT TOUCH -->
        </div>
       {{-- <a class="carousel-control-prev d-none d-lg-flex" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next d-none d-lg-flex" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>--}}
    </div>
</div>
<div class="slider-text-height position-relative"></div>
