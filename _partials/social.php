<?php
  $facebook = 'https://www.facebook.com/WickedNecrocomiccon';
  $twitter = 'aureliovoltaire';
?>

<ul class="social">
<?php if ( $facebook != '') : ?>
  <li><a href="<?php echo $facebook; ?>" class="fb" rel="me" target="_blank">Facebook</a></li>
<?php endif; ?>
<?php if ( $twitter != '') : ?>
  <li><a href="http://twitter.com/<?php echo $twitter; ?>" class="tw" rel="me" target="_blank">Twitter</a></li>
<?php endif; ?>
</ul>