@extends('layout.index')
@section('main')
    <section>
        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <p class="card-text">Name: {{$show->name}}</p>
                            <p class="card-text">Quote: {{$show->quote}}</p>
                            <p class="card-text">Rating: {{$show->rating}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection