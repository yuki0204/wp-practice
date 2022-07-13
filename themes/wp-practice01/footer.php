<footer>
	<!--  カスタム投稿「フッター」のIDを取得 -->
	<?php 
		// 「フッター」のカスタム投稿タイプ一覧を取得
		$posts_footer = get_posts(array('post_type' => 'footer'));
		$id_footer = $posts_footer[0]->ID; 
	?>

    <div class="footer_contents">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo_sp.svg" alt="">
      <ul class="footer_nav">
        <li><a href="#about">Nakanoya<span class="hira">吉兵衛</span>について</a></li>
        <li><a href="#info">インフォメーション</a></li>
        <li><a href="#access">アクセス</a></li>
        <li><a href="#contact">お問い合わせ</a></li>
        <li><a href="#reserve" class="reserve">ご予約</a></li>
      </ul>
      <div class="infomation">
        <p>
			<?php echo get_post_meta($id_footer , 'post-number' ,true); ?>
		</p>
		<p>
			<?php echo get_post_meta($id_footer , 'address' ,true); ?>
		</p>
        <p>TEL : <?php echo get_post_meta($id_footer , 'tel-number' ,true); ?> (受付時間 <?php echo get_post_meta($id_footer , 'time' ,true); ?>)</p>
        <p>MAILL : <?php echo get_post_meta($id_footer , 'mail' ,true); ?></p>
      </div>
      <small>&copy; Nakanoya-Kitibe . All RightsReserved.</small>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>