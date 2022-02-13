<nav>
    <ul>
        <li><a href="{{route('news')}}">News</a></li>
        <li><a href="{{route('admin:profile')}}">Admin/profile</a></li>
        <li><a href="{{route('home')}}">login</a></li>
        <li><a href="{{route('admin::news::index')}}">Admin</a></li>
        <li><a href="{{route('locale', ['lang' => 'ru'])}}">Ru</a></li>
        <li><a href="{{route('locale', ['lang' => 'en'])}}">En</a></li>
    </ul>
</nav>