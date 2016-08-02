<?php
function currentPage() {
    $tmp = explode('/', currentUrl());
    $currentPage = end($tmp);
    $currentPage = str_replace('.php', '', $currentPage);
    $currentPage = preg_replace('/\?.*/', '', $currentPage);
    if (empty($currentPage) || $currentPage === 'home') {
        $currentPage = 'home';
    }
    return $currentPage;
}
?>