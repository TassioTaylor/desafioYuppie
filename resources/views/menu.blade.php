<!-- SmartMenus core CSS (required) -->
<link href="../css/sm-core-css.css" rel="stylesheet" type="text/css" />

<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="../css/sm-blue/sm-blue.css" rel="stylesheet" type="text/css" />

<!-- #main-menu config - instance specific stuff not covered in the theme -->
<!-- You could put this in an external stylesheet (e.g. where the rest of your page styles are) -->
<style type="text/css">
    @media (min-width: 768px) {
        #main-menu {
            float: left;
            width: 12em;
        }
    }
</style>

<nav id="main-nav">
    <ul id="main-menu" class="sm sm-vertical sm-blue">
        <li>
            <a href="/alunos/">Alunos</a>
            <a href="/alunos/">Produto</a>
            <a href="/alunos/">Turmas</a>
        </li>
    </ul>
</nav>

<!-- jQuery -->
<script type="text/javascript" src="../libs/jquery/jquery.js"></script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="../jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery init -->
<script type="text/javascript">
    $(function() {
        $('#main-menu').smartmenus({
            mainMenuSubOffsetX: 1,
            mainMenuSubOffsetY: -8,
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
        });
    });
</script>