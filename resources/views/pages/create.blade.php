@extends('layout.index')
@include('layout.flash')
@section('main')
    <section>
        <div class="container mt-5">
            <form action="/testimonial" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{$errors->has('name')? '':old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Quote</label>
                    <input type="text" name="quote" value="{{$errors->has('quote')? '':old('quote')}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rating</label>
                    <input type="number" name="rating" value="{{$errors->has('rating')? '':old('rating')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

@endsection