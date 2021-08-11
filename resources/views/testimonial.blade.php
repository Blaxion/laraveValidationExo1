@extends('layout.index')
@include('layout.flash')
@section('main')
    <a class="btn btn-success" href="testimonial/create">CREATE</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quote</th>
                <th scope="col">Rating</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <th scope="row">{{ $testimonial->id }}</th>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->quote }}</td>
                    <td>{{ $testimonial->rating }}</td>
                    <td>
                        <a class="btn btn-info " href="testimonial/{{ $testimonial->id }}">SHOW</a>
                        <form action="testimonial/{{ $testimonial->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">DELETE</button>
                        </form>
                        <a class="btn btn-warning " href="testimonial/{{ $testimonial->id }}/edit">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
