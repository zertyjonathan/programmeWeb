<?php if($app){ ?>
<nav>
    <ul>
        <li><a href="<?=Link::linkComposer($link->getHome())?>" class="nav-link>"  id="<?= ($link->getLinkActive()==strtolower(str_replace(' ', '', 'home')))?'activeLink':'activeLink';?>"><?=$link->getHome();?></a></li>
        <li><a href="<?=Link::linkComposer($link->getAdduser())?>" class="nav-link" id="<?= ($link->getLinkActive()==strtolower(str_replace(' ', '', 'adduser')))?'activeLink':'';?>"><?=$link->getAdduser();?></a></li>
        <li><a href="<?=Link::linkComposer($link->getLogout())?>" class="nav-link" id="<?= ($link->getLinkActive()==strtolower(str_replace(' ', '', 'logout')))?'activeLink':'';?>"><?=$link->getLogout();?></a></li>
    </ul>
</nav>

</header>
<div style="border:1px solid #dfd80c;" class="separator"></div>
<?php } ?>