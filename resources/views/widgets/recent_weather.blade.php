
<h1>City: {{$city}}</h1>
<hr />
<h3 style="font-size: 1.5em;">{{$weather}}</h3>
<hr />

<ul class="mt-4 list-group list-group-flush">
    <li class="list-group-item">Temperature: {{$temperature['temp']}}&#176; ( {{$temperature['temp_min']}}&#176; - {{$temperature['temp_max']}}&#176; )</li>
    <li class="list-group-item">Feels Like: {{$temperature['feels_like']}}&#176;</li>
    <li class="list-group-item">Wind: {{$wind['speed']}}mph</li>
    <li class="list-group-item">Humidity: {{$temperature['humidity']}}%</li>
</ul>
