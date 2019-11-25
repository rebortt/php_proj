<?php
require_once('inc/conn_pdo.php');
$sql = "select * from config";
$rows = $dbh->query($sql);
$config = $rows->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?= $config['site_keywords'] ?>">
    <meta name="description" content="<?= $config['site_description'] ?>">
    <title><?= $config['site_title'] ?></title>
    <!-- 这里将使用链接吧css文件链接进来-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery.jslides.css" media="screen"/>
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.jslides.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
<!--页头开始-->
<div class="top">
    <div class="center">
        <div class="logo"><img src="<?= $config['site_logo'] ?>" width="141" height="42"></div>
        <div class="menu">
            <a href="index.php">网站首页</a>
            <a href="about.php">关于我们</a>
            <a href="article_list.php">新闻动态</a>
            <a href="produce_list.php">产品展示</a>
            <a href="guestbook.php">给我留言</a>
            <a href="contact.php">联系我们</a>
        </div>
    </div>
</div>
<!--页头结束-->
<!--焦点幻灯开始-->
<div id="full-screen-slider">
    <ul id="slides">
        <?php
        $sql_slide = "select * from slide order by orderid asc";
        $rs_slides = $dbh->query($sql_slide);
        $slides = $rs_slides->fetchAll();
        foreach ($slides as $silde) {
            ?>
            <li style="background:url(<?= $silde['thumbnail'] ?>) no-repeat center top">
                <a href="<?= $silde['link'] ?>" target="_blank"><?= $silde['title'] ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
<!--焦点幻灯结束-->
<!--新闻动态、关于我们、最新产品形成的横向区域开始-->
<div class="container">
    <!--新闻动态-->
    <div class="news">
        <div class="n_top">
            <div class="cat_title">新闻中心</div>
            <div class="more"><a href="admin/article_list.php">更多</a></div>
        </div>
        <div class="n_center">
            <img src="images/news_thumbnail.jpg" width="111" height="90"/>
            <div>
                <?php
                $sql_settop = "select * from article where posid='setindex,settop' order by id desc limit 0,1";
                $rs_settop = $dbh->query($sql_settop);
                $settop = $rs_settop->fetch();
                ?>
                <span style="font-weight:bold;"><?= mb_substr($settop['title'], 0, 13, 'utf-8') ?></span><br/>
                <?= mb_substr($settop['content'], 0, 47, 'utf-8') ?>
                ...[<a href="">详细</a>]
            </div>
        </div>
        <div class="n_bottom">
            <?php
            $sql_article = "select * from article where posid='setindex' order by id desc limit 0,5";
            $rs_articles = $dbh->query($sql_article);
            $articles = $rs_articles->fetchAll();
            foreach ($articles as $article) {
                ?>
                <a href="article_show.php?id=<?= $article['id'] ?>"><?= mb_substr($article['title'], 0, 22, 'utf-8') ?></a>
                <?php
            }
            ?>
        </div>
    </div>
    <!--关于我们-->
    <div class="about">
        <div class="a_top">
            <div class="cat_title">关于我们</div>
        </div>
        <div class="a_center">
            <img src="images/about_img.jpg" width="381" height="148">
        </div>
        <div class="a_bottom">
            <?php
            $sql_about = "select * from single where id=10";
            $rs_abouts = $dbh->query($sql_about);
            $about = $rs_abouts->fetch();
            echo mb_substr($about['content'], 0, 128, 'utf-8');
            ?>
            ......[详细]
        </div>
    </div>
    <!--最新产品-->
    <div class="produce">
        <div class="p_top">
            <div class="cat_title">最新产品</div>
            <div class="more"><a href="admin/produce_list.php">更多</a></div>
        </div>
        <div class="p_bottom">
            <div id="slideBox" class="slideBox">
                <div class="bd">
                    <ul>
                        <?php
                        $sql_produce = "select * from produce where posid='setindex' order by id desc limit 0,5";
                        $rs_produces = $dbh->query($sql_produce);
                        $produces = $rs_produces->fetchAll();
                        foreach ($produces as $produce) {
                            ?>
                            <a href="produce_show.php?id=<?= $produce['id'] ?>"><?= mb_substr($produce['title'], 0, 22, 'utf-8') ?></a>
                            <li><a href="produce_show.php?id=<?= $produce['id'] ?>" target="_blank"><img
                                            src="<?= $produce['thumbnail'] ?>"
                                            width="300" height="270"/></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".slideBox").slide({mainCell: ".bd ul", effect: "left", autoPlay: true});
            </script>
        </div>
    </div>
</div>
<!--新闻动态、关于我们、最新产品形成的横向区域结束-->
<!--页尾开始-->
<div class="footer">
    <div class="center_box">
        <div class="text">
            <?=$config['company_name'] ?><br/>
            电话：<?=$config['company_phone'] ?> E-mail:<?=$config['company_email'] ?><br/>
            地址：<?=$config['company_address'] ?><br/>
            技术支持：<?=$config['site_copyright'] ?><br/>
            友情链接：
            <?php
            $sql_friend = "select * from friend";
            $rs_friends = $dbh->query($sql_friend);
            $friends = $rs_friends->fetchAll();
            foreach ($friends as $friend) {
                ?>
                <a href="<?=$friend['url']?>"><?=$friend['title']?></a>&nbsp;&nbsp;
                <?php
            }
            ?>
        </div>
        <div class="ewm">
            <img src="<?=$config['company_ewm'] ?>" alt=""/>
        </div>
    </div>
</div>
<!--页尾结束-->
</body>
</html>