@include('header')


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" method="post" action="{{ url('/edit', array($articles->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Create data</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" name="title" class="form-control" id="text" aria-describedby="emailHelp" value="<?php echo $articles->title ?>" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea" rows="3"> <?php echo $articles->description ?> </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>

@include('footer')