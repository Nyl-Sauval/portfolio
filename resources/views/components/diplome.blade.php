<div class="experience">
    <div class="leftPart">
        <h3>{{$diploma->title}}</h3>
        <p>{{$diploma->type}}</p>
    </div>
    <div class="rightPart">
        <div class="row">
            <img src="https://i1.wp.com/www.lasercamp.fr/wp-content/uploads/2018/02/icone-calendrier.png"/><p>{{ $diploma->start_date->format('m/y') }} {{$diploma->end_date ?'-' . $diploma->end_date->format('m/y') : '' }}</p>
        </div>
        <div class="row">
            <img src="https://cdn-icons-png.flaticon.com/512/3413/3413246.png"/><p>{{ $diploma->institution }}</p>
        </div>
        <div class="row">
            <img src="https://cdn2.iconfinder.com/data/icons/map-location-geo-points/154/point-on-map-512.png"/><p>{{ $diploma->location }}</p>
        </div>
    </div>
</div>
