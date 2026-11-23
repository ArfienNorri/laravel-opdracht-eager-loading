<h1>Planeten</h1>

<ul>
    @foreach ($planets as $planet)
        <li>
            <a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a>
            ({{ $planet->solarSystem->name ?? 'onbekend' }})
        </li>
    @endforeach
</ul>
