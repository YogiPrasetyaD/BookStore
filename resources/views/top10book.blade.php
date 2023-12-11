@extends('layouts.main')

@section('content')
    <h1>{{ $title }}</h1>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Top Authors Information
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Author ID</th>
                            <th>Author Name</th>
                            <th>Total Votes</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($topAuthors as $author)
                            <tr>
                                <td>{{ $author->author_id }}</td>
                                <td>{{ $author->author_name }}</td>
                                <td>{{ $author->total_votes }}</td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
@endsection
