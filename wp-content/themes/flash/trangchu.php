<?php
$vnkings = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => id_của_category,
//thay id_của_category bằng id danh mục bạn muốn hiển thị nhé
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> 5));
?>
<?php $i=1; while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
<?php if($i==1){ ?>
<div class="bai_dau_tien">
    <a href="<?php the_permalink() ;?>" class="anh_bai_viet"> 
        <?php the_post_thumbnail("thumbnail",array( "title" => get_the_title(),"alt" => get_the_title() ));?>
    </a>
    <a href="<?php the_permalink() ;?>" class="tieu_de_bai_viet"><?php the_title() ;?></a>
    <p class="trich_dan">
        <?php the_excerpt() ;?>
    </p>
</div>
<?php } else { ?>
<div class="cac_bai_con_lai"><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a> </div>
<?php } ?>
<?php $i++; endwhile ; wp_reset_query() ;?>