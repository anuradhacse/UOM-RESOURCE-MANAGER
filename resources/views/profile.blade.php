<h3>{{$user->name}}</h3>
<h3>{{'About:'.$user->getProfile->about}}</h3>

@foreach($user->hasWritten as $blog)
    <a href="/uom2/public/blogdetail/{{$blog->id}}"> {{$blog->title}}</a>

    @endforeach
<h3>has read:</h3>
@foreach($user->hasRead as $blog)
    <a href="/uom2/public/blogdetail/{{$blog->id}}"> {{$blog->title}}</a>

@endforeach



