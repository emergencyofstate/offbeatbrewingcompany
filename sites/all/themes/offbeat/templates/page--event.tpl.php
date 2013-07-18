<div id="wrapper">

  <div id="header">

    <div id="ipa"></div>
    <div id="hops"></div>

    <?php if ($logo): ?>
      <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div>
    <?php endif; ?>

    <div id="social">
      <a target="_blank" href="http://www.facebook.com/offbeatbrewing"><img src="/sites/all/themes/offbeat/images/facebook.png"></a>
      <a target="_blank" href="http://twitter.com/offbeatbrewing"><img src="/sites/all/themes/offbeat/images/twitter.png"></a>
      <a target="_blank" href="http://www.youtube.com/offbeatbrewing"><img src="/sites/all/themes/offbeat/images/youtube.png"></a>
    </div>

    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup><!-- /#name-and-slogan -->
    <?php endif; ?>

    <!-- secondary menu (not currently used.) --> 

    <?php print render($page['header']); ?>

  </div>

  <div id="main">   

    <div id="content">
      <div id="left">  
        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
          <a id="main-content"></a>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print 'OFFBEAT Events'; ?></h1>
        <?php endif; ?>
        <?php print '<div class="events-home"><a href="/events">Back to Events home</a></div>'; ?>
        <?php print $messages; ?>
         <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div> <!-- /#left -->
      
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_second = render($page['sidebar_second']);
    ?>
     
    <?php if ($sidebar_second): ?>
      <div id="sidebar">
        <?php print $sidebar_second; ?>
      </div><!-- /.sidebars -->
    <?php endif; ?>

    </div><!-- /#content -->

  </div><!-- /#main -->

  <div id="clear"></div>

  <div id="cap"></div>

  <div id="footer"><div id="copyright"><?php print render($page['footer']); ?></div></div>

</div><!-- /#wrapper -->

