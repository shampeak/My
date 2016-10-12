<?php
$entrancefile = $_SERVER['PHP_SELF'];
//$basefile = "unit/document.php";
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$entrancefile?>">知识库</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
<?php
if(!empty($lm)):
?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文章 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach($arlistInfo as $key=>$value):
                            ?>
                            <li <?php if($key == $ar):?> class="active"<?php endif; ?>><a href="<?=$entrancefile?>?book=<?=$book?>&lm=<?=$lm?>&ar=<?=$key?>"><?=$value['title']?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>
<?php
endif;
if(!empty($book)):
?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">节点 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach($lmlist as $key=>$value):
                            ?>
                            <li <?php if($value == $lm):?> class="active"<?php endif; ?>><a href="<?=$entrancefile?>?book=<?=$book?>&lm=<?=$value?>"><?=$value?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>
<?php
endif;
?>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Book <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach($booklistInfo as $key => $value):
                            ?>
                            <li <?php if($key == $book):?> class="active"<?php endif; ?>><a href="<?=$entrancefile?>?book=<?=$key?>"><?=$value['title']?></a></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">


                        <li <?php if($_GET['tpl'] == 'depends'):?>class="active"<?php endif?>><a href="<?=$entrancefile?>?tpl=depends">Depends</a></li>
                        <li <?php if($_GET['tpl'] == 'oplist'):?>class="active"<?php endif?>><a href="<?=$entrancefile?>?tpl=oplist">List</a></li>
                        <li <?php if($_GET['tpl'] == 'map'):?>class="active"<?php endif?>><a href="<?=$entrancefile?>?tpl=map">Map</a></li>

                    </ul>
                </li>
                <li><a href="<?=$entrancefile?>?book=00-api">Api</a></li>
                <!--li><a href="#">设置</a></li -->
            </ul>
        </div>
    </div>
</nav>