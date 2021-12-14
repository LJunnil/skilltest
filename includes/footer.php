    <!-- content end here -->
    </main>
    <footer class="page__footer <?= isset($addClassFooter) ?  $addClassFooter : ''; ?>">
        <!-- footer start here -->
        <div class="l-row page__footer__info">
            <div class="logo">
                <p>SHIRAYANAGI</p>
                <p>ARCHITECT OFFICE</p>
            </div>
            <nav class="navigation">
                <ul class="navigation__list">
                    <?php
                    $test_array = [
                        'Home', '新着情報 ', '施工事例  ', '会社紹介', '業務内容', '当社の強み ', 'アクセス', '  採用情報  ', ' お問い合わせ', 
                    ];
                    for ($i = 0; $i < 9; $i++) :
                    ?>
                        <li class="navigation__list__item">
                            <a href="#">
                                <?= $test_array[$i] ?>

                            </a>
                        </li>
                    <?php
                    endfor;
                    ?>
                </ul>
            </nav>
        </div>
        <div class="l-row page__footer__info">
            <div class="address">
                <p><span> 株式会社白柳一級建築設計事務所</span><br>
                    〒433-8119 静岡県浜松市中区高丘北4-6-35<br>
                    TEL：053-439-0333 / FAX：053-439-7500 </p>
            </div>
            <div class="text">
                浜松市等で官公庁、工場、各種民間施設、住宅の建築設計監理を主な業務として外注でない自社の専任技術者に依る免震、制震、耐震構造設計で充分な安全性を確保し意匠、建築デザインに優れた設計監理業務をおこなっています。
            </div>
        </div>
        <!-- footer end here -->
    </footer>
    </body>
    <script src="<?= resource('js', 'all.js') ?>"></script>

    </html>