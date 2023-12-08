@props(['posts'])
@foreach ($posts as $post)
    <div>
        <img src="{{ $post['image'] }}" alt="{{ $post['link'] }}">
        <a href="{{ $post['link'] }}">{{ $post['link'] }}</a>
    </div>
@endforeach
