<div class="container-flex">
    <section class="section-pokemons-list">
        <div id="list-pokemon">
            @foreach ($pokemons as $pokemon) 
                <span data-id="{{ $pokemon['id_pokemon'] }}" data-name="{{ $pokemon['name'] }}">
                    <img src="{{ $pokemon['img_front'] }}" alt="{{ $pokemon['name'] }}" title="{{ $pokemon['name']}}">
                </span>
            @endforeach
        </div>
        <div id="pagination">
            <button id="anterior">Anterior</button>
            <input type="number" value="1" id="position" min="1" max="5">
            <button id="proximo">Próximo</button>
        </div>
    </section>
    <section class="section-card-pokemon">
        <div id="card">
            <a href="/detalhar/1">
                <div id="card-image">
                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png" alt="bulbasaur">
                </div>
            </a>

            <div id="card-description">
                <p class="description-primary">No. 1</p>
                <p class="description-secondary">bulbasaur</p>
            </div>
        </div>
    </section>
</div>
<script>

$(document).ready(function(){
    let itensShow = 24;
    let total = $('#list-pokemon span').length;
    let initialPage = 1
    let numPages = Math.ceil(total/itensShow);
    let currentPage = 1;
    $("#pagination #position").attr('max', numPages);
    $('#list-pokemon span').hide();
    $('#list-pokemon span').slice(0, itensShow).show();
    $('#pagination #position').val(initialPage);
    $('#pagination #anterior').prop("disabled",true);

    $('#pagination #proximo').on('click', function () {
        let startItem;
        let endItem;
        currentPage = $('#pagination #position').val();
        startItem = currentPage * itensShow;
        endItem = (total - startItem) < itensShow ? (total - startItem) + startItem : startItem + itensShow;
        currentPage++;
        $('#pagination #position').val(currentPage);
        $('#list-pokemon span').hide();
        $('#list-pokemon span').slice(startItem, endItem).show();
        if(currentPage == numPages){
            $(this).prop("disabled",true);
        }
        if(currentPage > initialPage){
            $('#pagination #anterior').prop("disabled",false);
        }
    });

    $('#pagination #anterior').on('click', function () {
        let startItem;
        let endItem;

        currentPage = $('#pagination #position').val();
        currentPage--;
        startItem = (currentPage - 1) * itensShow;
        endItem = startItem + itensShow;
        $('#pagination #position').val(currentPage);
        $('#list-pokemon span').hide();
        $('#list-pokemon span').slice(startItem, endItem).show();
        if(currentPage == initialPage){
            $(this).prop("disabled",true);
        }
        if(currentPage < numPages){
            $('#pagination #proximo').prop("disabled",false);
        }
  
    });

    $('#list-pokemon span').on('click', function(event) {
        let idPokemon = $(this).data("id");
        let namePokemon = $(this).data("name");
        $("#card #card-image img").attr('src',`https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${idPokemon}.png`);
        $("#card #card-image img").attr('alt', namePokemon);
        $("#card a").attr('href', `/detalhar/${idPokemon}`);
        $('#card-description .description-primary').text(`No. ${idPokemon}`);
        $('#card-description .description-secondary').text(namePokemon);
    });

    $("#pagination #position").bind('keyup mouseup', function (){
        let startItem;
        let endItem;
        currentPage = $('#pagination #position').val();
        startItem = (currentPage - 1) * itensShow;
        endItem = (total - startItem) < itensShow ? (total - startItem) + startItem : startItem + itensShow;
        
        $('#list-pokemon span').hide();
        $('#list-pokemon span').slice(startItem, endItem).show();
        
        if(currentPage == numPages){
            $('#pagination #proximo').prop("disabled",true);
        }
        if(currentPage > initialPage){
            $('#pagination #anterior').prop("disabled",false);
        }

        if(currentPage == initialPage){
            $('#pagination #anterior').prop("disabled",true);
        }
        if(currentPage < numPages){
            $('#pagination #proximo').prop("disabled",false);
        }
    });
});
</script>