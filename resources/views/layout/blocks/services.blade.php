<div class="wrapper row3">
    <section id="services" class="hoc container clear">
        <div class="sectiontitle">
            <h2>Du lịch trong nước</h2>
            <br>
            <hr>
        </div>
        <ul class="nospace group grid-3" style="font-family: Arial">
          @foreach($categories as $index =>$category)
                <li class="one_third">
                    <article>
                        <a href="#">
                            <img src="{{$category->image}}" alt="">
                        </a>
                        <h6 class="heading">{{$category->ten_danh_muc}}</h6>
                        <footer><a href="#">Read More</a></footer>
                    </article>
                </li>
            @endforeach
        </ul>
    </section>
</div>
