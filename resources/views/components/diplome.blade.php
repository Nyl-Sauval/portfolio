<div class="experience">
    <div class="leftPart">
        <h3>{{$diploma->title}}</h3>
        <p>{{$diploma->type}}</p>
    </div>
    <div class="rightPart">
        <p>{{ $diploma->start_date->format('m/y') }} - {{ $diploma->end_date ? $diploma->end_date->format('m/y') : 'Présent' }}</p>
        <p>{{ $diploma->institution }}</p>
        <p>{{ $diploma->location }}</p>
    </div>
</div>
