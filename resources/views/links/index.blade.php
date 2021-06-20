<h1>Links</h1>
<ul>
    @foreach ($links as $link)
        <li>
            <a href="{{ $link->url }}">{{ $link->name }}</a>
        </li>
    @endforeach
</ul>
