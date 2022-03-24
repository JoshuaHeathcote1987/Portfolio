@extends('layouts.app')
@section('pageTitle', 'Page Title')
@section('content')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="{{ asset('storage/images/javascript.png') }}" width="105rem" alt="" srcset="">
                    <h1 class="fw-light">Javascript</h1>
                    <p class="lead text-muted" style="text-align: justify;">JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area. </p>
                    <p>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.javascript.com/"
                            class="btn btn-light my-2 fw-bolder link-dark text-decoration-underline">Website</a>
                    </p>
                </div>
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect class="placeholder-img" width="100%" height="100%" fill="#55595c" /><text x="0%"
                                    y="0%" fill="#eceeef" dy=".2em" class="fa-solid fa-clock"></text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#js-timer">View</button>
                                    </div>
                                    <small class="text-muted">JavaScript</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
