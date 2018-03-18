@include('header')

<div class="container">
    <div class="row">
        <legend>Reading Data</legend>

        <p class="lead">{{$articles->title}}</p>

        <p>{{$articles->description}}</p>
    </div>
</div>

@include('footer')