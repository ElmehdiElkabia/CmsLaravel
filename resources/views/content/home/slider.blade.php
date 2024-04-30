<section class="slider_section long_section">
    <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @forelse($sliders as $key => $slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h1>
                                        {{ $slider->title }}
                                    </h1>
                                    <p>
                                        {{ $slider->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="{{ $slider->image }}" alt="{{ $slider->title }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <section class="slider_section long_section">
                    <div id="customCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="detail-box">
                                                <h1>
                                                    For All Your <br>
                                                    Furniture Needs
                                                </h1>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus
                                                    quidem maiores perspiciatis, illo maxime voluptatem a itaque
                                                    suscipit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="img-box">
                                                <img src="images/slider-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="detail-box">
                                                <h1>
                                                    For All Your <br>
                                                    Furniture Needs
                                                </h1>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus
                                                    quidem maiores perspiciatis, illo maxime voluptatem a itaque
                                                    suscipit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="img-box">
                                                <img src="images/slider-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="detail-box">
                                                <h1>
                                                    For All Your <br>
                                                    Furniture Needs
                                                </h1>
                                                <p>
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus
                                                    quidem maiores perspiciatis, illo maxime voluptatem a itaque
                                                    suscipit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="img-box">
                                                <img src="images/slider-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#customCarousel" data-slide-to="1"></li>
                            <li data-target="#customCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </section>
            @endforelse
        </div>
        <ol class="carousel-indicators">
            @forelse($sliders as $key => $slider)
                <li data-target="#customCarousel" data-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}"></li>
            @empty
                <!-- No indicators if no sliders available -->
            @endforelse
        </ol>
    </div>
</section>
