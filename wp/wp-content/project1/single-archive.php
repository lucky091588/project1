<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
  <main class="l-main l-main--page">
    <?php
      $category         = get_the_terms( $post->ID, ARCHIVE_TAX_CAT );
      $mainCategoryName = !empty($category[0]->name) ? $category[0]->name : 'preview';
      $mainCategorySlug = !empty($category[0]->slug) ? $category[0]->slug : '';

      $bread_crumbs = array(
        'bread_crumbs' => array (
          array(
            'title' => strtoupper($mainCategoryName),
            'link'  => resolve_url(ARCHIVE_POST_TYPE.'/'.$mainCategorySlug),
          ),
          array(
            'title' => get_the_title(),
            'link'  => get_the_permalink(),
          ),
        )
      );
      importPart('breadcrumbs', $bread_crumbs);
    ?>
    <div class="article-main article-main--single">
      <div class="l-container l-container--bg">
        <div class="article-main__wrapper flex">
          <div class="article-main__content">
            <div class="article-main__content-wrapper js-article-index">
              <div class="article-single">
                <div class="article-single__detail">
                  <em class="article-single__detail-category"><?php echo $mainCategoryName; ?></em>
                  <time class="article-single__detail-date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
                </div>
                <?php $title = str_replace("　", "<br>", get_the_title()); ?>
                <h1 class="article-single__heading"><?php echo $title; ?></h1>
                <?php importPart('article-sns'); ?>
                <?php if(get_the_post_thumbnail()): ?>
                  <figure class="article-single__figure">
                    <img class="article-single__image" src="<?php echo get_eyecatch_data( $post->ID, 'article_single_size', 'http://via.placeholder.com/500x500'); ?>" alt="<?php the_title(); ?>" />
                  </figure>
                <?php endif; ?>
                <div class="single-body">
                  <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
                <?php
                  $sns_args = array(
                    'modifier'      => 'bottom',
                    'hetena_width'  => '178',
                    'hetena_height' => '40',
                  );
                  importPart('article-sns',$sns_args);
                ?>
                <?php if(!get_field('hide_author_on_articles_and_author_page', 'user_'. get_the_author_meta('ID'))): ?>
                  <div class="article-single__author">
                    <h2 class="article-single__author-heading">この記事を書いた人</h2>
                    <div class="article-single__author-details flex flex-align-center">
                      <div class="article-single__author-image">
                        <?php
                          $avatar = resolve_image_uri('no-image.jpg');
                          if(get_field('image_avatar', 'user_'. get_the_author_meta('ID') )) {
                            $avatar = get_field('image_avatar', 'user_'. get_the_author_meta('ID') );
                          }
                        ?>
                        <span style="background-image: url(<?php echo $avatar; ?>);"></span>
                      </div>
                      <div class="article-single__author-user">
                        <p class="article-single__author-info">
                          <strong><?php echo get_the_author_meta('last_name') . get_the_author_meta('first_name'); ?></strong>
                          <?php if(get_the_author_meta('user_description')): ?>
                            <br><?php echo get_the_author_meta('user_description'); ?>
                          <?php endif; ?>
                        </p>
                      </div>
                    </div>
                    <a class="article-single__author-link" href="<?php echo get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><?php echo get_the_author_meta('last_name') . get_the_author_meta('first_name'); ?>の書いた記事一覧へ</a>
                  </div>
                <?php endif; ?>
                <?php
                  $archive_tag_terms = wp_get_object_terms( $post->ID,  ARCHIVE_TAX_TAG );
                  if ( ! empty( $archive_tag_terms ) ) :
                    if ( ! is_wp_error( $archive_tag_terms ) ) :
                ?>
                    <div class="article-single__author">
                      <h2 class="article-single__author-heading">タグ</h2>
                      <ul class="article-single__tag">
                        <?php foreach( $archive_tag_terms as $tags ): ?>
                            <li class="article-single__tag-item">
                              <a class="article-single__tag-link" href="<?php echo get_term_link( $tags->slug, ARCHIVE_TAX_TAG ); ?>">
                                <span><?php echo $tags->name; ?></span>
                              </a>
                            </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
              <?php if(!empty($category)): ?>
                <?php importTemplate('modules/article-related'); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="article-main__sidebar article-main__sidebar--single">
            <?php importPart('sidebar'); ?>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php
get_footer();
