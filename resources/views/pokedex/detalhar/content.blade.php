
<div class="container-flex reverse">
    <section class="section-card-pokemon">
        <div id="card">
            <div id="card-image">
                <img src="{{ $pokemon['image'] }}" alt="{{ $pokemon['name'] }}">
            </div>
            <div id="card-description">
                <p class="description-primary">No. {{ $pokemon['id'] }}</p>
                <p class="description-secondary">{{ $pokemon['name'] }}</p>
            </div>
        </div>
    </section>

    <section class="section-card-pokemon">
        <div id="card">
            <div id="card-description">
                <h1 class="description-title">Descrição</h1>
                <div class="description-text">
                    <h2 class="title-stats">Info</h2>
                    <div><span>Experiência base:</span><span>{{ $pokemon['base_experience'] }}xp</span></div>
                    <div><span>Altura:</span><span>{{ $pokemon['height'] }}dm</span></div>
                    <div><span>peso:</span><span>{{ $pokemon['weight'] }}hg</span></div>
                    <hr>
                    <h2 class="title-stats" >Habilidades</h2>
                    <div class="list-block">
                            @foreach($pokemon['abilities'] as $abilities)
                            <span>{{$abilities['ability']['name']}}</span>
                            @endforeach
                    </div>
                    <hr>
                    <h2 class="title-stats">stats</h2>
                    @foreach($pokemon['stats'] as $stat)
                    <div>
                        <span>{{ $stat['stat']['name'] }}</span>
                        <span>{{ $stat['base_stat'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container-flex">
<a href="/" class="btn-voltar">Voltar</a>
</div>

