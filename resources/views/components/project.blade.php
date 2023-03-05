<article class="container-fluid text-white bg-dark py-5">
    <div class="row align-items-center">
        <div class="col-4 d-flex justify-content-end">
            <div class="img_container">
                <img src="{{$img}}" width="300" alt="">
            </div>
        </div>
        <div class="col-8">
            <h3 class="text-start fs-1">{{$title}}</h3>
            <p class="lead text-start">{{$article}}</p>
            <div class="btn btn-outline-light shadow px-5 my-5">
                <a href="{{route('Project-page', $id)}}" class="text-decoration-none text-white">Show More</a>    
            </div>
        </div>
    </div>
</article>