<h3>{{isset($blogs->title) ? $blogs->title : 'Default'}}</h3>
<h1>{{'written by'.$blogs->getAuthor->name}}</h1>

<h3>this blog has been read by</h3>

@foreach($blogs->getReader as $readers)
    <a href="/uom2/public/profile/{{$readers->id}}">{{$readers->name}}</a>
    @endforeach