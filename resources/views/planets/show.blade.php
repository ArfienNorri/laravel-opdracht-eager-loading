<h1>{{ $planet->name }}</h1>
<p>Zonnestelsel: {{ $planet->solarSystem->name ?? 'onbekend' }}</p>
<p>{{ $planet->description }}</p>

<a href="/planets">← Terug naar alle planeten</a>
