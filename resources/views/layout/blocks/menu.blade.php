

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($slides as $index =>$slide )
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$index}}"
                    aria-label="Slide {{$index+1}}" {{ $index ==0 ? 'class=active aria-current=true' : null  }}></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($slides as $index =>$slide )
            <div class="carousel-item {{$index == 0 ?'active':null}}">
                <div class="bgded overlay padtop"
                     style="background-image:url({{asset($slide->image_url)}})">
                    <header id="header" class="hoc clear">
                        <div id="logo" class="fl_left">
                            <h1><a href="index.html">Spourmo</a></h1>
                        </div>
                        <nav id="mainav" class="fl_right">
                            <ul class="clear">
                                <li class="active"><a href="index.html">Trang chủ</a></li>
                                <li><a class="drop" href="#">Du lịch</a>
                                    <ul>
                                        <li><a href="pages/gallery.html">Du lịch trong nước </a></li>
                                        <li><a href="pages/full-width.html">Du lịch nước ngoài </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Địa điểm ăn uống </a></li>
                                <li><a href="#">Homestay</a></li>
                                <li><a href="#">Cẩm nang du lịch</a></li>
                            </ul>
                        </nav>
                    </header>
                    <div id="pageintro" class="hoc clear">

                        <article>
                            <h3 class="heading">{{$slide->title}}</h3>
                            <p>{{$slide->content}}</p>
                        </article>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
