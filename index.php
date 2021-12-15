<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'index', 'headCSS' => ['page/top.css']]);

$buildings = [
    ['hospital', 'タイトルが入りますタイトルが入ります'],
    ['office', 'タイトルが入りますタイトルが入ります'],
    ['factory/office', 'タイトルが入りますタイトルが入ります'],
    ['facility', 'タイトルが入りますタイトルが入ります'],
    ['office', 'タイトルが入りますタイトルが入ります'],
    ['facility', 'タイトルが入りますタイトルが入ります'],
    ['office/factory', 'タイトルが入りますタイトルが入ります'],
    ['office', 'タイトルが入りますタイトルが入ります'],
    ['facility', 'タイトルが入りますタイトルが入ります'],
    ['hospital', 'タイトルが入りますタイトルが入ります'],
    ['hospital', 'タイトルが入りますタイトルが入ります'],
    ['office', 'タイトルが入りますタイトルが入ります']
];
?>
<section class="introduction">  
</section>
<section class="buildings">
    <ul class="buildings__list">
        <?php
        foreach ($buildings as $key => $el) :
        ?>
            <li class="buildings__list__item">
                <div class="frame">
                    <img class="image" src="<?= resource('img', 'img_building_' . ($key + 1) . '.png') ?>" alt="">
                    <span class="label">
                        <?= $el[0] ?>
                    </span>
                </div>
                <p class="caption">
                    <?= $el[1] ?>
                </p>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
</section>
<?php
includeWithVariables('includes/footer.php', []) ?>