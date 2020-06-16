<!DOCTYPE html>

<html lang="<?=$this->e(str_replace('_', '-', $uiLang)); ?>" dir="<?=$useRtl ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eduVPN - <?=$this->e($pageTitle); ?></title>
    <link href="<?=$this->getCssUrl($requestRoot, 'eduVPN/screen.css'); ?>" media="screen" rel="stylesheet">
</head>
<body>
    <header class="page">			
        <?=$this->insert('languageSwitcher'); ?>
        <?=$this->insert('logoutButton'); ?>
    </header>
    <nav>
<?php if (isset($activeItem)): ?>
            <?=$this->insert('menu', ['activeItem' => $activeItem]); ?>
<?php endif; ?>
    </nav>
    <header class="main">
        <h1><?=$this->e($pageTitle); ?></h1>
    </header>
    <main>
<?=$this->section('content'); ?>
    </main>
    <footer>
<?php if ($this->exists('customFooter')): ?>
    <?=$this->insert('customFooter'); ?>
<?php endif; ?>
        <p>
            Powered by <a target="_blank" href="https://www.eduvpn.org/">eduVPN</a>
        </p>
    </footer>
</body>
</html>
