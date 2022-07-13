<!-- <?php wp_link_pages( $args ); ?> -->
<?php get_header(); ?>
<?php 
	// 「Nakanoya吉兵衛について」のカスタム投稿タイプ一覧を取得
	$posts_about = get_posts(array('post_type' => 'about'));
	
	// 「お部屋情報」のカスタム投稿タイプ一覧を取得
	$posts_information_room = get_posts(array('post_type' => 'information_room'));
	
	// 「アクティビティ」のカスタム投稿タイプ一覧を取得
	$posts_activity = get_posts(array('post_type' => 'activity'));
	
	// 「お食事メニュー」のカスタム投稿タイプ一覧を取得
	$posts_food_menu = get_posts(array('post_type' => 'food_menu','posts_per_page' => -1));
	
	// 「レンタルルーム」のカスタム投稿タイプ一覧を取得
	$posts_rental_room = get_posts(array('post_type' => 'rental_room'));
	
	// 「アクセス」のカスタム投稿タイプ一覧を取得
	$posts_access = get_posts(array('post_type' => 'access'));
	
	// 「お問い合せ」のカスタム投稿タイプ一覧を取得
	$posts_contact = get_posts(array('post_type' => 'contact'));

?>

  <main>
    <div class="kv">
      <div class="fade_img01">
        <div class="fade_item item01"></div>
        <div class="fade_item item02"></div>
      </div>
      <img class="kv_logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/kv_logo.svg" alt="">
    </div>

    <section class="about" id="about">
      <h2 class="sec_ttl target">
        Nakanoya<span class="hira">吉兵衛</span>について
        <span class="gold">ABOUT</span>
      </h2>
      <div class="container">

		<!-- カスタム投稿タイプの一覧を取得して繰り返す -->
		<?php foreach ($posts_about as $post) : setup_postdata($post); ?>
		<?php $id_about = $post->ID; ?>
		
        <div <?php post_class("image"); ?>>
			<!-- カスタムフィールドの画像を取得 -->
			<?php $about_image = get_post_meta($id_about, 'image', true); ?>
			<?php $about_image = wp_get_attachment_image_src($about_image, 'full'); ?>
			<img src="<?php echo $about_image[0]; ?>" alt="Nakanoya吉兵衛のイメージ画像">
        </div>
        <div class="about_text">
			<p>
				<!-- テキストテキストテキストテキストテキストテキストテキストテキストテキスト -->
				<?php echo get_post_meta($id_about , 'heading' ,true); ?>
			</p>
			<p>
				<!-- テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト -->
				<?php echo get_post_meta($id_about , 'info' ,true); ?>
			</p>
          <a href="#reserve">ご予約はこちら</a>
        </div>
      </div>

	  <?php endforeach; ?>
	  <?php wp_reset_postdata(); ?>
    </section>

    <section class="info" id="info">
      <h2 class="sec_ttl">
        インフォメーション
        <span class="gold">Infomation</span>
      </h2>
      <h3 class="room_info">お部屋情報</h3>
      <div class="room_contents">
		<!-- カスタム投稿タイプの一覧を取得して繰り返す -->
		<?php foreach ($posts_information_room as $post) : setup_postdata($post); ?>
		<?php $id_information_room = $post->ID; ?>
			
			<div class="room_item">
			<div class="room_image">
				<!-- カスタムフィールドの画像を取得 -->
			<?php $information_room_image = get_post_meta($id_information_room, 'image', true); ?>
			<?php $information_room_image = wp_get_attachment_image_src($information_room_image, 'full'); ?>
			<img src="<?php echo $information_room_image[0]; ?>" alt="Nakanoya吉兵衛のイメージ画像">
			</div>
			<div class="room_text">
				<h4 class="room_name">
					<?php echo get_post_meta($id_information_room , 'name' ,true); ?>
				</h4>
				<p class="room_ex">
					<?php echo get_post_meta($id_information_room , 'info' ,true); ?>
				</p>
				<p class="money">
					<?php echo get_post_meta($id_information_room , 'price' ,true); ?>
				</p>
				<h5>お部屋詳細 </h5>
				<dl>
				<dt>定員</dt>
				<dd><?php echo get_post_meta($id_information_room , 'capacity' ,true); ?></dd>
				</dl>
				<dl>
				<dt>アメニティ</dt>
				<dd><?php echo get_post_meta($id_information_room , 'amenities' ,true); ?></dd>
				</dl>
				<dl>
				<dt>食事</dt>
				<dd><?php echo get_post_meta($id_information_room , 'meal' ,true); ?></dd>
				</dl>
				<dl>
				<dt>トイレ・シャワー</dt>
				<dd><?php echo get_post_meta($id_information_room , 'Toilet / shower' ,true); ?></dd>
				</dl>
				<dl>
				<dt>喫煙</dt>
				<dd><?php echo get_post_meta($id_information_room , 'smoking' ,true); ?></dd>
				</dl>
				<dl>
				<dt>チェックイン・アウト</dt>
				<dd>
					<?php echo get_post_meta($id_information_room , 'check-in' ,true); ?>
					<br>
					<span class="mt_15">
					<?php echo get_post_meta($id_information_room , 'check-out' ,true); ?>
					</span>
				</dd>
				</dl>
			</div>
			</div>
		<?php endforeach; ?>
	  	<?php wp_reset_postdata(); ?>
      </div>

      <div class="activity_contents">
        <h3 class="activity">アクテビティ</h3>
        <div class="act_items">
			<!-- カスタム投稿タイプの一覧を取得して繰り返す -->
			<?php foreach ($posts_activity as $post) : setup_postdata($post); ?>
			<?php $id_activity = $post->ID; ?>

				<div class="item">
					<!-- カスタムフィールドの画像を取得 -->
					<?php $activity_image = get_post_meta($id_activity, 'image', true); ?>
					<?php $activity_image = wp_get_attachment_image_src($activity_image, 'full'); ?>
					<img src="<?php echo $activity_image[0]; ?>" alt="アクティビティのイメージ画像">
					<div class="text">
					<h4 class="act_name">
						<?php echo get_post_meta($id_activity , 'title' ,true); ?>
					</h4>
					<p class="act_ex">
						<?php echo get_post_meta($id_activity , 'text' ,true); ?>
					</p>
					</div>
				</div>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
        </div>
      </div>

      <div class="menu_contents">
        <h3 class="menu">お食事メニュー</h3>
        <div class="menu_items">
			<!-- カスタム投稿タイプの一覧を取得して繰り返す -->
			<?php foreach ($posts_food_menu as $post) : setup_postdata($post); ?>
			<?php $id_food_menu = $post->ID; ?>

				<div class="menu_item">
					<!-- カスタムフィールドの画像を取得 -->
					<?php $food_menu_image = get_post_meta($id_food_menu, 'image', true); ?>
					<?php $food_menu_image = wp_get_attachment_image_src($food_menu_image, 'full'); ?>
					<img src="<?php echo $food_menu_image[0]; ?>" alt="お食事メニューのイメージ画像">
					<h4 class="menu_name">
						<?php echo get_post_meta($id_food_menu , 'title' ,true); ?>
					</h4>
					<p class="menu_ex">
						<?php echo get_post_meta($id_food_menu , 'text' ,true); ?>
					</p>
					<p class="menu_price">
						<?php echo get_post_meta($id_food_menu , 'price' ,true); ?>
					</p>
				</div>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
        </div>
      </div>

      <div class="rental_contents">
        <h4 class="rental">レンタルルーム</h4>
        <div class="rental_items">
			<!-- カスタム投稿タイプの一覧を取得して繰り返す -->
			<?php foreach ($posts_rental_room as $post) : setup_postdata($post); ?>
			<?php $id_rental_room = $post->ID; ?>

				<div class="item">
					<!-- カスタムフィールドの画像を取得 -->
					<?php $rental_room_image = get_post_meta($id_rental_room, 'image', true); ?>
					<?php $rental_room_image = wp_get_attachment_image_src($rental_room_image, 'full'); ?>
					<img src="<?php echo $rental_room_image[0]; ?>" alt="レンタルルームのイメージ画像">
					<div class="rental_text">
					<p>
						<?php echo get_post_meta($id_rental_room , 'heading' ,true); ?>
					</p>
					<p>
						<?php echo get_post_meta($id_rental_room , 'text' ,true); ?>
					</p>
					<p class="rental_price">
						<?php echo get_post_meta($id_rental_room , 'price' ,true); ?>
					</p>
					</div>
				</div>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>

    <section class="access" id="access">
		<!--  カスタム投稿「アクセス」のIDを取得 -->
		<?php $id_access = $posts_access[0]->ID; ?>

			<h2 class="sec_ttl">
				アクセス
				<span class="gold">Access</span>
			</h2>
			<div class="sales_time">
				<h5>営業時間</h5>
				<p>
					<?php echo get_post_meta($id_access , 'time' ,true); ?>
				</p>
			</div>
			<div class="adress">
				<h5>住所</h5>
				<p>
					<?php echo get_post_meta($id_access , 'post-number' ,true); ?>
				</p>
				<p>
					<?php echo get_post_meta($id_access , 'address' ,true); ?>
				</p>
				<!-- <?php echo esc_html(get_post_meta($id_access , 'map' ,true)); ?> -->
				<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.634633805209!2d139.76549865!3d35.681499949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf97912d02d%3A0xee1220ee8337117!2z44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1655353117534!5m2!1sja!2sjp"
				class="map"
				style="border:0;"
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</div>
      
    </section>

    <section class="reserve" id="reserve">
      <h2 class="sec_ttl">
        ご予約
        <span class="gold">Reserve</span>
      </h2>
      <p>ご予約は公式LINEから承ります。</p>
      <p>下記ボタンより友達追加お願いいたします。</p>
      <a href="">友だち追加</a>
      <p>LINEの登録ができない場合は、電話でのお問い合わせも可能です。</p>
    </section>

    <section class="contact" id="contact">
		<!--  カスタム投稿「お問い合わせ」のIDを取得 -->
		<?php $id_contact = $posts_contact[0]->ID; ?>

			<h2 class="sec_ttl">
				お問い合わせ
				<span class="gold">Contact</span>
			</h2>
			<div class="tel">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tel.svg" alt="">
				<a href="tel:00-0000-0000">
					<?php echo get_post_meta($id_contact , 'tel-number' ,true); ?>
				</a>
			</div>
			<p>お問い合わせ時間</p>
			<p>
				<?php echo get_post_meta($id_contact , 'time' ,true); ?>
			</p>
    </section>

  </main>

<?php get_footer(); ?>