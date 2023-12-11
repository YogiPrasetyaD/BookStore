@extends('layouts.main')

@section('contain')
    <h1>Book List</h1>
    <form action="{{ route('booklist.index') }}" method="GET">
        <label for="list_show">List Show:</label>
        <select name="list_show" id="list_show">
            @for ($i = 10; $i <= 10000; $i += 1000)
                <option value="{{ $i }}" {{ $listShow == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        <label for="search">Search:</label>
        <input type="text" name="search" id="search" value="{{ $search }}">
        <button type="submit">Search</button>
    </form>
    
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Book Information
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Rating</th>
                            <th>Votes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item->author->name }}</td>
                                <td>{{ $item->category->category }}</td>
                                <td>{{ $item->name }}</td>
                                <td> @if ($item->ratings->isNotEmpty() && $item->ratings->avg('value') > 0)
                                    {{ number_format($item->ratings->avg('value')),2 }}
                                @else
                                    N/A
                                @endif</td>
                                <td>{{ collect(json_decode($item->votes))->sum('vote') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $books->appends(['search' => $search, 'list_show' => $listShow])->links() }}
                </div>

            </div>
        </div>
    </div>
</body>
</html>
@endsection