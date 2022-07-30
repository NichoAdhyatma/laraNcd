<div class="mt-5">
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            @for ($i = 0; $i < $count_data; $i++)
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $i + 1 }}"
                    aria-label="Slide {{ $i + 2 }}"></button>
            @endfor;
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x350/?programming"
                class="d-block image w-100" alt="img-programming">
                <div class="carousel-caption d-md-block">
                    <h5>Hello World!</h5>
                    <p>Hello</p>
                </div>
            </div>
            @foreach ($berita as $post)
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1200x350/?{{ $post->category->name }}"
                        class="d-block image w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5>{{ $post->title }}</h5>
                        <a href="/berita/{{ $post->slug }}" class="btn-primary p-2 text-decoration-none">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
