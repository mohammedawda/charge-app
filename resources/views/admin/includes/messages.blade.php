@if ($errors->count())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $e)
                <li><h2>{{ $e }}</h2></li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif
