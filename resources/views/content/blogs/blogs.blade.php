<section class="blog_section layout_padding">
<div class="container">
    <div class="heading_container">
        <h2>
            Latest Blog
        </h2>
    </div>
    <div class="row">
        @forelse ($blogs as $blog)
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="detail-box">
                        <h5>{{ $blog->title }}</h5>
                        <p>{{ $blog->description }}</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="images/b1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Look even slightly believable. If you are
                        </h5>
                        <p>
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly believable.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="images/b1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Look even slightly believable. If you are
                        </h5>
                        <p>
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly believable.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="images/b1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Look even slightly believable. If you are
                        </h5>
                        <p>
                            alteration in some form, by injected humour, or randomised words which don't look
                            evenslightly believable.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>
</section>


