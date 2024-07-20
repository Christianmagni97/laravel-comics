<header>
    <div class="container">
        <section class="image">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
        </section>
        <section class="list-title">
            <ul>
                <li v-for="(title,index) in headerLink" :key="title.id">title</li>
                @foreach($headerLinks as $headerLink)
                <li>{{ $headerLink['title'] }}</li>
                @endforeach
            </ul>
        </section>
    </div>
    <div class="jumbotron"></div>
</header>