<?php if(Validator::getUserCheck()){?>
    <div class="banner-block">
        <div class="banner-left">
            <h1>Top game of the week - <?=$games_by_rating[1]['name']?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate id mollitia reprehenderit soluta veritatis voluptatem voluptates. Deleniti expedita quisquam tempore. Commodi libero suscipit voluptatibus? Amet dolorem dolorum facere nulla vel!</p>
        </div>
        <div class="banner-right">
            <img src="" alt="">
        </div>
    </div>
<?php } else {?>
    <div class="banner-block nonauth">
        <div class="banner-home">
            <h1>MyCompanyName</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate id mollitia reprehenderit soluta veritatis voluptatem voluptates. Deleniti expedita quisquam tempore. Commodi libero suscipit voluptatibus? Amet dolorem dolorum facere nulla vel!</p>
        </div>
    </div>
<?php }?>