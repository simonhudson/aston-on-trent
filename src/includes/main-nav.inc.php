<?php //foreach($pages as $page): ?>
    <?php
        /*
        $linkHook = str_replace('./', '', $page->url);
        $linkHook = str_replace('.php', '', $linkHook);
        if (!isset($page->omitFromNav)): */?>
            <!-- <li class="main-nav__item">
                <a class="main-nav__link <?= ($page->url === $currentPage) ? ' current' : ''; ?>" data-test-hook="main-nav__<?= (empty($linkHook) ? 'home' : $linkHook); ?>" href="<?= $siteRoot.$page->url; ?>">
                    <span class="main-nav__text"><?= $page->mainNavText; ?></span>
                </a>
            </li> -->
        <?php //endif; ?>
<?php //endforeach; ?>
<div class="curtain curtain--level-1 js-curtain--level-1">
    <nav class="level-1__nav">
        <ul class="level-1__list">
            <?php foreach($pages as $page): ?>
                <?php
                    $linkHook = str_replace('./', '', $page->url);
                    $linkHook = str_replace('.php', '', $linkHook);
                    if (!isset($page->omitFromNav)): ?>
                        <li class="main-nav__item level-1__item curtain__item">
                            <a class="main-nav__link level-1__link curtain__link <?= ($page->url === $currentPage) ? ' current' : ''; ?>" data-test-hook="main-nav__<?= (empty($linkHook) ? 'home' : $linkHook); ?>" href="<?= $siteRoot.$page->url; ?>">
                                <span aria-hidden="true" class="fa fa-<?=$page->icon; ?>"></span>&nbsp;
                                <span class="main-nav__text"><?= $page->mainNavText; ?></span>
                            </a>
                            <?php if (isset($page->hasSubNav)): ?>
                                <?php $subNavMenu = $page->url; ?>
                                <ul class="main-nav-level-2__list">
                                    <?php foreach ($subNav->$subNavMenu as $subPage): ?>
                                        <li class="main-nav-level-2__item">
                                            <a class="main-nav-level-2__link" href="<?= $subPage->url; ?>"><?= $subPage->mainNavText; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
            <?php endforeach; ?>



            <!-- <li class="level-1__item curtain__item">
                <a class="level-1__link curtain__link" data-level-2-target="home" href="#">
                    <span class="fa fa-home fa-2x curtain__icon"></span>
                    Home
                </a>
                <div class="curtain curtain--level-2 js-curtain--level-2" data-level-2="home">
                    <nav class="level-2__nav">
                        <ul class="level-2__list">
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">
                                    Level 1.1
                                </a>
                            </li>
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">Level 1.2</a>
                            </li>
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">Level 1.3</a>
                            </li>
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">Level 1.4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </li>
            <li class="level-1__item curtain__item">
                <a class="level-1__link curtain__link" data-level-2-target="settings" href="#">
                    <span class="fa fa-cog fa-2x curtain__icon"></span>
                    Settings
                </a>
                <div class="curtain curtain--level-2 js-curtain--level-2" data-level-2="settings">
                    <nav class="level-2__nav">
                        <ul class="level-2__list">
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">
                                    Settings 1
                                </a>
                            </li>
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">
                                    Settings 2
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </li>
            <li class="level-1__item curtain__item">
                <a class="level-1__link curtain__link" data-level-2-target="account" href="#">
                    <span class="fa fa-user fa-2x curtain__icon"></span>
                    My account
                </a>
                <div class="curtain curtain--level-2 js-curtain--level-2" data-level-2="account">
                    <nav class="level-2__nav">
                        <ul class="level-2__list">
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">
                                    My account 1
                                </a>
                            </li>
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">
                                    My account 2
                                </a>
                            </li>
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">
                                    My account 3
                                </a>
                            </li>
                            <li class="level-2__item curtain__item">
                                <a class="level-2__link curtain__link" href="#">
                                    My account 4
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </li> -->
        </ul>
    </nav>
</div>