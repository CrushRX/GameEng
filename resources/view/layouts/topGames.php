<div class="top-games-block">
    <div class="second-game">
        <div class="top">
            2 место
        </div>
        <div class="logo">
            <?=$games_by_rating[1]['name']?>
        </div>
        <div class="name">

        </div>
        <div class="rating">
            Рейтинг: <?=$games_by_rating[1]['rating']?>
        </div>
        <div class="src">
            <a href="/<?=$games_by_rating[1]['alias']?>">
                Играть
            </a>
        </div>
    </div>
    <div class="first-game">
        <div class="top">
            1 место
        </div>
        <div class="logo">

        </div>
        <div class="name">
            <?=$games_by_rating[0]['name']?>
        </div>
        <div class="rating">
            Рейтинг: <?=$games_by_rating[0]['rating']?>
        </div>
        <div class="src">
            <a href="/<?=$games_by_rating[0]['alias']?>">
                Играть
            </a>
        </div>
    </div>
    <div class="third-game">
        <div class="top">
            3 место
        </div>
        <div class="logo">

        </div>
        <div class="name">
            <?=$games_by_rating[2]['name']?>
        </div>
        <div class="rating">
            Рейтинг: <?=$games_by_rating[2]['rating']?>
        </div>
        <div class="src">
            <a href="/<?=$games_by_rating[2]['alias']?>">
                Играть
            </a>
        </div>
    </div>
</div>