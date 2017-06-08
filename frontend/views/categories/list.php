<?php
use yii\helpers\Url;
?>
<section class="ib-container" id="ib-container">
    <?php foreach ($categories as $category){?>
        <article>
            <div>
                    <ul class="category-list">
                        <li><a target="_blank" href="#"><?= $category->_text->name?></a></li>
                    <?php foreach ($category->childrens as $children){ ?>
                        <li><a href="<?= Url::toRoute(['categories/index','category' => $children->url])?>"><?= $children->_text->name?></a></li>
                    <?php } ?>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                        <li><a>ghjkfsdgh sdfjkghdjkf</a></li>
                    </ul>
            </div>
        </article>

    <?php } ?>
</section>

<script type="text/javascript">
        $(function() {

                var $container	= $('#ib-container'),
                        $articles	= $container.children('article'),
                        timeout,
                        el;

                $articles.on( 'mouseenter', function( event ) {

                        var $article	= $(this);
                            el          = $(this).children('div');

//                        $article.css
//                        clearTimeout( timeout );
//                        timeout = setTimeout( function() {

                                if( el.hasClass('active') ) return false;

                                $articles.children('.show-article').not( el.removeClass('blur').addClass('active') )
                                                 .removeClass('active');
//                                                 .addClass('blur');

//                        }, 1 );

                });

                $articles.on( 'mouseleave', function( event ) {

//                        clearTimeout( timeout );
                        $articles.children('div').removeClass('active blur');
//                        $(this).removeClass('active');

                });

        });
</script>