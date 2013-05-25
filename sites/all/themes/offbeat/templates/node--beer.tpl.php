<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_beer_image']);
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
  
  <?php print '<h2>' . render($content['field_tags']) . '</h2>'; ?>

  <?php if (isset($content[field_beer_image])) {
    
    print render($content[field_beer_image]);

  }

  ?>

  <?php print render($content['body']); ?>

  <div class="clear"></div>
  
  <div id="beerspecs">
    <div id="abv">
      <?php print '<strong>IBUs: </strong>' . $variables['field_beer_ibu'][0]['safe_value']; ?>
      <?php print '<br /><strong>ABV: </strong>' . $variables['field_beer_abv'][0]['safe_value']; ?>
    </div>
    <div id="pairings">
      <?php print '<strong>Suggested Pairings: </strong>' . $variables['field_beer_suggested_pairings'][0]['safe_value']; ?>
    </div>
  </div>

</article><!-- /.node -->
