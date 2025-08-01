<?php
/**
 * note - 默认主题修改
 *
 * @package note
 * @author SHI 記
 * @version 0.1
 * @link https://shinote.net/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="col-mb-12 col-8" id="main" role="main">
    <?php while ($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="post-header">
                <h2 class="post-title-left" itemprop="name headline">
                    <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>
                <ul class="post-meta-right">
                    <li class="post-meta-item">
                        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                    </li>
                    <li class="post-meta-item" itemprop="interactionCount">
                        <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                    </li>
                </ul>
            </div>
        </article>
    <?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
