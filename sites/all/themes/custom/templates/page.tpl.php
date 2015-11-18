<div id="wrapper">
    <div id="navigation"><?php if ($main_menu) { print theme('links__system_main_menu',array('links' => $main_menu)); } ?></div>
    <div id="header"><h1>BuyFlowers.com</h1></div>
    <div id="page-wrapper">
        <div id="sidebar"><?php if($page['sidebar_first']) { print render($page['sidebar_first']); } ?></div>
        <div id="content">
            <?php print $messages; ?>
            <h1><?php if($title) { print $title; } ?></h1>
            <div class="tabs"><?php if ($tabs) { print render($tabs); } ?></div>
            <?php print render($page['help']); ?>
            <ul class="action-links"><?php if($action_links) { print render($action_links); } ?></ul>
            <?php print render($page['content']); ?>
        </div>
    </div>
</div>