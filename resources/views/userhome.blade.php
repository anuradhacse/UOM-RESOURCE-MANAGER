@foreach($blogger as $blog)
   <h5> {{'name:'.$blog->name}}</h5>
   <a href="profile/{{$blog->id}}">{{'@'.$blog->password}}</a>

    <br>
    @endforeach


