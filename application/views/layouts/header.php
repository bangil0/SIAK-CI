<nav>
    <? if(isset($_SESSION['admin_logged_in'])){ ?>
        <li><a href="admin_logout">logout</a></li>
    <? } else { ?>
        <li><a href="admin">login</a></li>
    <? } ?>
</nav>

<br>
