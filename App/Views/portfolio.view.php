<h1>Our works:</h1>

<div>
    <?php foreach ($data['works'] as $work):?>
        <div>
            <h3><?=$work['title'];?></h3>
            <p><a href="<?=$work['url']?>">Visit </a></p>
            <p><?=$work['description'];?></p>
        </div>
    <?php endforeach;?>
</div>