@extends("layouts.master")

@section('about-content')
<h2>About</h2>
<br>
<h4>Cloning php website setup</h4>
<ul>
    <li>git clone https://github.com/robbyvm/LaravelProject-webshop-2020.git</li>
    <li>cd LaravelProject-webshop-2020</li>
    <li>composer install</li>
    <li>npm instal && npm run dev</li>
    <li>copy .env.example .env</li>
    <li>php artisan key:generate</li>
</ul>
<h4>Gebruikte bronnen</h4>
<ul>
    <li><a href="https://medium.com/@shrijan00003/the-preferred-way-of-using-bootstrap-with-laravel-7-8e51ba845574">Install bootstrap</a></li>
    <li><a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/">Bootstrap docs</a></li>
    <li><a href="https://stackoverflow.com/questions/29837555/setting-bootstrap-navbar-active-class-in-laravel-5">Navbar active nav-link</a></li>
</ul>
@endsection