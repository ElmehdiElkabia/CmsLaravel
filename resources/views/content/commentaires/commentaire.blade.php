<div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @forelse($commentaires as $key => $commentaire)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src={{$commentaire->image}} alt="" />
                        </div>
                        <div class="detail-box">
                            <div class="name">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <h6>
                                    {{$commentaire->name}}
                                </h6>
                            </div>
                            <p>
                                {{$commentaire->commentaire}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/client.jpg" alt="" />
                        </div>
                        <div class="detail-box">
                            <div class="name">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <h6>
                                    Siaalya
                                </h6>
                            </div>
                            <p>
                                It is a long established fact that a reader will be
                                distracted by the readable cIt is a long established fact
                                that a reader will be distracted by the readable c
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/client.jpg" alt="" />
                        </div>
                        <div class="detail-box">
                            <div class="name">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <h6>
                                    Siaalya
                                </h6>
                            </div>
                            <p>
                                It is a long established fact that a reader will be
                                distracted by the readable cIt is a long established fact
                                that a reader will be distracted by the readable c
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/client.jpg" alt="" />
                        </div>
                        <div class="detail-box">
                            <div class="name">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <h6>
                                    Siaalya
                                </h6>
                            </div>
                            <p>
                                It is a long established fact that a reader will be
                                distracted by the readable cIt is a long established fact
                                that a reader will be distracted by the readable c
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
    </div>

    <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button"
            data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button"
            data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
