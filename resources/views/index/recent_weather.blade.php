
@if(isset($city) && !empty($city))
    {{ AsyncWidget::run('recentWeather', ['city' => $city]) }}
@else
    {{ AsyncWidget::run('recentWeather') }}
@endif


