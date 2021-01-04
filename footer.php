</div>
<footer>
    <div class="l-footer">
        <p class="l-footer__information"><a href="<?php echo get_permalink(54); ?>">ショップ情報</a><span> | </span><a href="<?php echo get_permalink(153); ?>">ヒストリー</a></p>


        <p class="l-footer__copyright">Copyright: RaiseTech</p>
    </div>
</footer>
<?php wp_footer(); ?>

<script>
jQuery('.btn-1').click(function () {
  jQuery('.open-1').addClass('active');
  jQuery(this).addClass('on');
  jQuery(this).addClass('move-1');
  jQuery('main').addClass('fixed');
  jQuery('.wp-pagenavi').addClass('fixed');
});

jQuery('.close-btn').click(function () {
  jQuery('.open-1').removeClass('active');
  jQuery('.btn-1').removeClass('on');
  jQuery('.btn-1').removeClass('move-1');
  jQuery('main').removeClass('fixed');
  jQuery('.wp-pagenavi').removeClass('fixed');
});
</script>
</body>