<div class="experience">
    <div class="leftPart">
        <h3>{{$experience->title}}</h3>
        <p>{{$experience->type}}</p>
    </div>
    <div class="rightPart">
        <p>{{ $experience->start_date->format('m/y') }} - {{ $experience->end_date ? $experience->end_date->format('m/y') : 'Présent' }}</p>
        <p>{{ $experience->company }}</p>
        <p>{{ $experience->location }}</p>
    </div>
</div>
