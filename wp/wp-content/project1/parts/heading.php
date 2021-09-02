<div class="heading<?php echo !empty($modifier) ? ' heading--'.$modifier : ''; ?>">
  <div class="l-container l-container--bg">
    <div class="heading__wrapper">
      <h1 class="heading__title">
        <?php echo !empty($heading_title) ? $heading_title : get_the_title(); ?>
        <?php if(!empty($heading_description)): ?>
          <span><?php echo $heading_description;?></span>
        <?php endif; ?>
      </h1>
    </div>
  </div>
</div>
