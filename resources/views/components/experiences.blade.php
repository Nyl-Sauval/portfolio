<div class="experience">
    <div class="leftPart">
        <h3>{{$experience->getTranslation('title', app()->getLocale())}}</h3>
        <p>{{$experience->getTranslation('type', app()->getLocale())}}</p>
    </div>
    <div class="rightPart">
        <div class="row">
            <img src="https://i1.wp.com/www.lasercamp.fr/wp-content/uploads/2018/02/icone-calendrier.png"/><p>{{ $experience->start_date->format('m/y') }} - {{ $experience->end_date ? $experience->end_date->format('m/y') : 'Présent' }}</p>
        </div>
        <div class="row">
            <img src="https://cdn-icons-png.flaticon.com/512/3413/3413246.png"/><p>{{ $experience->company }}</p>
        </div>
        <div class="row">
            <img src="https://cdn2.iconfinder.com/data/icons/map-location-geo-points/154/point-on-map-512.png"/><p>{{ $experience->location }}</p>
        </div>
    </div>
</div>
