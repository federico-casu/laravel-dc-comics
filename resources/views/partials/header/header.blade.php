<header>
    <div class="container">
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </figure>

        <nav>
            <ul>
                @foreach ($headerNavLinks as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

{{-- @push('headerSCSS')

    <style>
        
    </style>
    
@endpush --}}