@extends('layouts.app')

@section('content')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="{{ asset('storage/images/livewire.png') }}" width="105rem" alt="" srcset="">
                    <h1 class="fw-light">Livewire</h1>
                    <p class="lead text-muted" style="text-align: justify;">Livewire is a full-stack framework for Laravel
                        that makes building dynamic interfaces simple, without leaving the comfort of Laravel. Livewire has
                        made the development of interactive applications a doddle, and with its ease introduced me to a
                        higher level of understanding of developing in other technologies such as JavaScript. On this page
                        you will find many different components that I have created using Livewire.</p>
                    <p>
                        <a target="_blank" rel="noopener noreferrer" href="https://laravel-livewire.com/"
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
                                preserveAspectRatio="xMidYMid slice">
                                <title>Placeholder</title>
                                <rect class="placeholder-img" width="100%" height="100%" fill="#55595c" /><text x="0%"
                                    y="0%" fill="#eceeef" dy=".2em" class="fa-solid fa-table"></text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#livewire-crud-table">View</button>
                                    </div>
                                    <small class="text-muted">Timer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection