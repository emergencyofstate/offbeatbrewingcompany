
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_artist_image']);
    hide($content['field_artist_website']);
    hide($content['field_artist_location']);
    hide($content['field_artist_favorite_beer']);
    hide($content['field_artist_fun_fact']);
  ?>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <p class="unpublished"><?php print t('Unpublished'); ?></p>
      <?php endif; ?>
    </header>
  <?php endif; ?>


  <?php if (isset($content['field_artist_website']['#items'][0])): ?> 
    <?php print render($content['field_artist_website']); ?>
  <?php endif; ?>


  <?php if (isset($content['field_artist_location']['#items'][0])): ?>
    <?php print render($content['field_artist_location']); ?>
  <?php endif; ?>

  <?php if (isset($content['field_artist_favorite_beer']['#items'][0])): ?>
    <?php print render($content['field_artist_favorite_beer']); ?>
  <?php endif; ?>

  <?php if (isset($content['field_artist_fun_fact']['#items'][0])): ?>
    <?php print render($content['field_artist_fun_fact']); ?>
  <?php endif; ?>

  <?php if (isset($content['field_artist_image']['#items'][0])): ?>
    <?php print render($content['field_artist_image']); ?>
  <?php endif; ?>

  <?php print render($content); ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article><!-- /.node -->
