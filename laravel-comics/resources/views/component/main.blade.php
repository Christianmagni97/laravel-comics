<main>
    <section class="container">
        <article>
            <h1>CURRENT SERIES</h1>
            <div class="comics">
                <article>
                    <img :src="singleComic.thumb" :alt="singleComic.series">
                    <h4>series</h4>
                </article>
            </div>
            <button>Load More</button>
        </article>
    </section>
    <section class="comics">
        <ul>
            <li v-for="(comics, index) in comics">
                <img :src="comics.immagine" :alt="comics.titolo">
                <p>title</p>
            </li>
        </ul>
    </section>
</main>    
