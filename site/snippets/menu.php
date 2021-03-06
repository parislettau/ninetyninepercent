<div class="menu-pane">
    <div class="logo">
        <img onclick="closeMenu(true)" src="<?php echo url('assets/css/images/logo.svg') ?>" class="filter-green" />
    </div>
    <div class="nav">
        <nav>
            <ul>
                <?php foreach ($site->children()->listed() as $subpage) : ?>
                    <li><a onclick="closeMenu()" class="content-pane-trigger" href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a></li>
                <?php endforeach ?>
            </ul>

        </nav>
    </div>

</div>

<script>
    // open close
    function openMenu() {
        $('.menu-pane').addClass('show')
        $('body').addClass('menu-pane-open')
        $('main').addClass('menu-pane-open')
    }

    function closeMenu() {
        $('.menu-pane').removeClass('show')
        $('body').removeClass('menu-pane-open')
        $('main').removeClass('menu-pane-open')
    }

    // triggers
    $(document).ready(function() {
        // click outside pane to close all menus
        $(document).mouseup(function(e) {
            let container = $(".menu-pane");
            // if the target of the click isn't the container and isn't menu-b nor a descendant of the container
            if (
                !container.is(e.target) &&
                container.has(e.target).length === 0
            ) {
                closeMenu(true)
            }
        });
    })
</script>