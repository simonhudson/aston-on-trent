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
<div class="curtain-nav main-nav--level-1 js-curtain--level-1">
    <nav class="level-1__nav">
        <ul class="level-1__list">
            <?php foreach($pages as $page): ?>
                <?php
                    $linkHook = str_replace('./', '', $page->url);
                    $linkHook = str_replace('.php', '', $linkHook);
                    if (!isset($page->omitFromNav)): ?>
                        <?php $subNavMenu = ($page->url !== $siteRoot ? $page->url : 'home'); ?>
                        <li class="main-nav__item level-1__item main-nav__item">
                            <a class="main-nav__link level-1__link main-nav__link <?= ($page->url === $currentPage) ? ' current' : ''; ?>" data-test-hook="main-nav__<?= (empty($linkHook) ? 'home' : $linkHook); ?>" href="<?= $siteRoot.$page->url; ?>">
                                <span aria-hidden="true" class="fa fa-<?=$page->icon; ?>"></span>&nbsp;
                                <span class="main-nav__text"><?= $page->mainNavText; ?></span>
                            </a>
                            <?php if (isset($page->hasSubNav)): ?>
                                <a class="sub-nav__toggle" data-showhide-target="sub-nav--<?= $subNavMenu; ?>" href="#">
                                    <span aria-hidden="true" class="fa fa-chevron-down"></span>
                                    <span class="hidden">Toggle navigation</span>
                                </a>
                            <?php endif; ?>
                            <?php if (isset($page->hasSubNav)): ?>
                                <ul class="main-nav-level-2__list" data-showhide-content="sub-nav--<?= $subNavMenu; ?>">
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



            <!-- <li class="level-1__item main-nav__item">
                <a class="level-1__link main-nav__link" data-level-2-target="home" href="#">
                    <span class="fa fa-home fa-2x main-nav__icon"></span>
                    Home
                </a>
                <div class="main-nav main-nav--level-2 js-curtain--level-2" data-level-2="home">
                    <nav class="level-2__nav">
                        <ul class="level-2__list">
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">
                                    Level 1.1
                                </a>
                            </li>
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">Level 1.2</a>
                            </li>
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">Level 1.3</a>
                            </li>
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">Level 1.4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </li>
            <li class="level-1__item main-nav__item">
                <a class="level-1__link main-nav__link" data-level-2-target="settings" href="#">
                    <span class="fa fa-cog fa-2x main-nav__icon"></span>
                    Settings
                </a>
                <div class="main-nav main-nav--level-2 js-curtain--level-2" data-level-2="settings">
                    <nav class="level-2__nav">
                        <ul class="level-2__list">
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">
                                    Settings 1
                                </a>
                            </li>
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">
                                    Settings 2
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </li>
            <li class="level-1__item main-nav__item">
                <a class="level-1__link main-nav__link" data-level-2-target="account" href="#">
                    <span class="fa fa-user fa-2x main-nav__icon"></span>
                    My account
                </a>
                <div class="main-nav main-nav--level-2 js-curtain--level-2" data-level-2="account">
                    <nav class="level-2__nav">
                        <ul class="level-2__list">
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">
                                    My account 1
                                </a>
                            </li>
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">
                                    My account 2
                                </a>
                            </li>
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">
                                    My account 3
                                </a>
                            </li>
                            <li class="level-2__item main-nav__item">
                                <a class="level-2__link main-nav__link" href="#">
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