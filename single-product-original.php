<?php
/*
Template name: Продукт
*/
?>
	<!DOCTYPE html>
	<!-- Last Published: Mon Sep 14 2020 15:55:40 GMT+0000 (Coordinated Universal Time) -->
	<html data-wf-page="5eb2d98c73894f789b7db7b8" data-wf-site="5eb2cd821d6236480cfeeab5">
<?php get_template_part( "header_block", "" ); ?>
<body>
<script id="query_vars">
	var query_vars = '<?php echo serialize( $wp_query -> query_vars ) ?>';
</script>
<div class="div-block-279">
    <?php if ( have_rows( 'verhnee_menyu', 'options' ) ) { ?>
		<div class="div-block-280">
            <?php global $parent_id;
            $parent_id = $loop_id;
            $loop_index = 0;
            $loop_field = "verhnee_menyu";
            while ( have_rows( 'verhnee_menyu', 'options' ) ) {
                global $loop_id;
                $loop_index++;
                $loop_id++;
                the_row(); ?>
				<div class="div-block-259">
					<div class="text-block-163"></div>
					<a href="<?php echo get_sub_field( 'ssylka' ) ?>"
					   class="link-5"><?php echo get_sub_field( 'tekst' ) ?></a></div>
            <?php } ?>
		</div>
    <?php } ?>
</div>
<div class="menu-home">
	<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="nav-hidden w-nav">
		<div class="container-6 w-container">
			<div class="w-nav-button">
				<div class="w-icon-nav-menu"></div>
			</div>
			<a href="<?php echo get_home_url() ?>" class="w-nav-brand"><img
						src="<?php echo get_template_directory_uri() ?>/images/5eb55369d4d4d992f17621ba_124870279-fox-.jpg"
						width="56" alt=""></a>
			<div class="menu-contacts-2"><a href="#" class="link-block-6 w-inline-block">
					<div class="div-block-275">
						<div class="div-block-276">
							<div class="div-block-277">
								<div class="text-block-160"
								     data-wc="cart_count"><?php echo WC() -> cart -> cart_contents_count ?></div>
							</div>
						</div>
						<div class="div-block-278">
							<div class="text-block-162">Корзина:</div>
							<div class="text-block-161"
							     data-wc="cart_total"><?php echo WC() -> cart -> get_cart_total() ?></div>
						</div>
					</div>
				</a></div>
			<nav role="navigation" class="w-nav-menu">
                <?php if ( $menu_items = wp_get_nav_menu_items( 'Главное меню' ) ) {
                    $menu_list = '';
                    $current_class = '';
                    foreach ( (array)$menu_items as $key => $menu_item ) {
                        if ( $menu_item -> url === get_home_url( null, $wp -> request ) . '/' ) {
                            $current_class = ' w--current';
                        } else {
                            $current_class = '';
                        }
                        if ( $menu_items[ $key + 1 ] -> menu_item_parent != 0 && $menu_items[ $key ] -> menu_item_parent == 0 ) {
                            $target = $menu_item -> target ? $menu_item -> target : '_self';
                            $menu_list .= '
						<div data-ix="" class="">
							<div class="">
								<div>' . $menu_item -> title . '</div>
								<div class=""></div>
							</div>
							<nav class="">';
                        } else {
                            if ( $menu_items[ $key ] -> menu_item_parent == 0 ) {
                                $target = $menu_item -> target ? $menu_item -> target : '_self';
                                $link_class = 'navnaf w-nav-link';
                            } else {
                                $link_class = '';
                            }
                            $menu_list .= '<a class="' . $link_class . $current_class . '" title="' . $menu_item -> attr_title . '" target="' . $target . '" href="' . $menu_item -> url . '">' . $menu_item -> title . '</a> ';
                            if ( $menu_items[ $key + 1 ] -> menu_item_parent == 0 && $menu_items[ $key ] -> menu_item_parent != 0 ) {
                                $menu_list .= '</nav>
						</div>';
                            }
                        }
                    }
                    echo $menu_list;
                } ?></nav>
		</div>
	</div>
	<div data-w-id="42f28a63-f1e3-fc5a-13c5-91632107742e" class="head">
		<div class="head__container w-container"><a href="<?php echo get_home_url() ?>"
		                                            class="brand w-inline-block"><img
						src="<?php echo get_template_directory_uri() ?>/images/5eb56e7f51528b4f5ac10d6a_unnamed.jpg"
						alt="" class="logo-brand"></a>
			<div class="w-form">
				<form id="search" name="search" data-name="search"
				      action="<?php echo get_home_url() ?>/index.php#results" class="sear-h" method="get"
				      data-action="search">
					<input type="text" class="search-field w-input" maxlength="256" name="s" data-name="s"
					       placeholder="Поиск" id="s">
					<input type="submit" value="Поиск" data-wait="Please wait..." class="search-button w-button"></form>
				<div class="w-form-done">
					<div>Thank you! Your submission has been received!</div>
				</div>
				<div class="w-form-fail">
					<div>Oops! Something went wrong while submitting the form.</div>
				</div>
			</div>
			<div class="contact-head__wrp">
				<div class="head-contact-title">Горячая линия:</div>
				<a href="tel:+<?php echo preg_replace( "/(\D)/", "", get_field( 'telefon', 'options' ) ) ?>"
				   class="phone_link"><?php echo get_field( 'telefon', 'options' ) ?></a></div>
			<div data-w-id="42f28a63-f1e3-fc5a-13c5-91632107743a" class="head-card__wrp"><img
						src="<?php echo get_template_directory_uri() ?>/images/5eb63905fb1f1eb9d2b0f97f_img_225646.png"
						alt="" class="cart-ico">
				<div class="count-oval">
					<div class="cart-count" data-wc="cart_count">
                        <?php echo WC() -> cart -> cart_contents_count ?></div>
				</div>
				<div class="cart-list">
					<div class="cart-mini-space"></div>
					<div class="cart-mini-list__wrp" data-wc="mini_cart">
                        <?php get_template_part( "mini_cart", "" ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="nav-visible w-nav">
		<div class="container-7 w-container">
			<nav role="navigation" class="nav-menu-7 w-nav-menu">
                <?php if ( $menu_items = wp_get_nav_menu_items( 'Главное меню' ) ) {
                    $menu_list = '';
                    $current_class = '';
                    foreach ( (array)$menu_items as $key => $menu_item ) {
                        if ( $menu_item -> url === get_home_url( null, $wp -> request ) . '/' ) {
                            $current_class = ' w--current';
                        } else {
                            $current_class = '';
                        }
                        if ( $menu_items[ $key + 1 ] -> menu_item_parent != 0 && $menu_items[ $key ] -> menu_item_parent == 0 ) {
                            $target = $menu_item -> target ? $menu_item -> target : '_self';
                            $menu_list .= '
						<div data-ix="" class="">
							<div class="">
								<div>' . $menu_item -> title . '</div>
								<div class=""></div>
							</div>
							<nav class="">';
                        } else {
                            if ( $menu_items[ $key ] -> menu_item_parent == 0 ) {
                                $target = $menu_item -> target ? $menu_item -> target : '_self';
                                $link_class = 'nav-link-7 w-nav-link';
                            } else {
                                $link_class = '';
                            }
                            $menu_list .= '<a class="' . $link_class . $current_class . '" title="' . $menu_item -> attr_title . '" target="' . $target . '" href="' . $menu_item -> url . '">' . $menu_item -> title . '</a> ';
                            if ( $menu_items[ $key + 1 ] -> menu_item_parent == 0 && $menu_items[ $key ] -> menu_item_parent != 0 ) {
                                $menu_list .= '</nav>
						</div>';
                            }
                        }
                    }
                    echo $menu_list;
                } ?></nav>
			<div class="menu-button w-nav-button">
				<div class="w-icon-nav-menu"></div>
			</div>
		</div>
	</div>
</div>
<div class="bredcrumbs_wrp"><a href="#" class="home-link w-inline-block"><img
				src="<?php echo get_template_directory_uri() ?>/images/5ebeebb3b9fac24e5f085846_icons8-D0B3D0BBD0B0D0B2D0BDD0B0D18F.svg"
				alt="" class="icon-home"></a>
	<div class="text-breadcrumbs">
        <?php if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
        } ?>
	</div>
</div>
<div class="section" data-content="product">
    <?php global $post;
    $post = get_post( get_the_ID() );
    setup_postdata( $post );
    $product = get_product( get_the_ID() ); ?>
    <?php if ( $product -> product_type === "grouped" ) { ?>
		<div class="page__container w-container">
			<h1 class="product-page_name">
                <?php the_title(); ?>
			</h1>
			<div class="div-block-358">
				<div class="text-block-213"><span>Код товара:</span> <span><strong
								data-content="var_sku"><?php $product = get_product( get_the_ID() );
                            echo( $product -> sku ); ?></strong></span></div>
				<div class="rating-box">
					<div class="zvezda">
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
					</div>
					<div class="zvezda-full" style="<?php echo get_field( 'rejting_tovara' ) ?>">
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
					</div>
				</div>
				<a href="#" class="link-11">Отзывов (5)</a></div>
			<div class="prodct-page__wrp">
				<div class="product-page__coll-img">
					<div class="product-page-img">
						<div class="product-page-img-miniature">
                            <?php global $post, $product, $woocommerce;
                            $attachment_ids = $product -> get_gallery_attachment_ids();
                            if ( $attachment_ids ) {
                                foreach ( $attachment_ids as $attachment_id ) {
                                    $props = wc_get_product_attachment_props( $attachment_id, $post ); ?><a href="#"
									                                                                        class="product-page-slider-lbox w-inline-block w-lightbox">
									<div class="product-page__slider-lbox-img"
									     style="background-image: url('<?php echo $props[ "url" ] ?>');"></div>
									<script type="application/json" class="w-json">
										{ "group": "product-<?php echo get_the_ID() ?>
										", "items": [{ "url": "<?php echo $props[ "url" ] ?>
										", "fileName": "", "origFileName": "", "width": 1920, "height": 1100, "size": 1, "type": "image" }] }
									</script></a>
                                <?php }
                            } ?>
						</div>
						<div class="product-page-img-hero"><a href="#"
						                                      class="product-page-lbox w-inline-block w-lightbox"
						                                      data-content="var_lbox_image">
								<div class="product-page__lbox-img" data-content="var_bg_image"
								     style="background-image: url('<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                                     echo $img[ 0 ]; ?>');"></div>
								<script type="application/json" class="w-json">
									{ "group": "product-<?php echo get_the_ID() ?>
									", "items": [{ "url": "<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                                    echo $img[ 0 ]; ?>
									", "fileName": "", "origFileName": "", "width": 1920, "height": 1100, "size": 1, "type": "image" }] }
								</script>
							</a></div>
					</div>
					<div class="product-page-option">
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Доставка по всей России, транспортными компаниями и собственным
								транспортном.
							</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Весь асортимент товара в наличии, собственный склад.</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Мы бесплатно, осуществляем предпродажную подготовку.</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Гарантия 1 год. Широкая сеть сервисных центров по всей России.
							</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Конкурентные цены за счет прямых контрактов с иностранными
								поставщиками.
							</div>
						</div>
					</div>
				</div>
				<div class="product-page__coll-infom">
					<div class="div-block-317">
						<div class="div-block-318">
                            <?php if ( get_post_meta( get_the_ID(), '_stock_status', true ) === 'instock' ) { ?>
								<div class="div-block-331">
									<div class="text-block-184"><strong class="bold-text-8"></strong></div>
									<div class="text-block-185">Есть в наличии</div>
								</div>
                            <?php } ?><a href="#" class="link-10">Нужны оптовые поставки?</a></div>
						<div class="div-block-319">
							<div class="div-block-320">
								<div class="text-block-187 product-old-price" data-content="var_price_regular"></div>
							</div>
							<div class="div-block-321">
								<div class="product-price" data-content="var_price"></div>
								<div class="product-price sale" data-content="var_price_sale"></div>
							</div>
						</div>
						<div class="div-block-328">
							<div class="w-form">
								<form id="add_to_cart_<?php echo get_the_ID() ?>" name="add_to_cart"
								      data-name="add_to_cart" data-action="add_to_cart" action="/index.php"
								      data-product-id='<?php $product = get_product( get_the_ID() );
                                      if ( $product -> product_type === "variable" ) {
                                          echo( $product -> get_available_variations()[ 0 ][ "variation_id" ] );
                                      } else {
                                          echo( $product -> id );
                                      } ?>' data-product_id="<?php the_ID(); ?>">
									<div class="div-block-325">
										<div class="div-block-327">
											<div class="text-block-189">Выберите комплектацию</div>
											<div class="text-block-191">Вместе дешевле</div>
                                            <?php if ( !isset( $query_args ) ) $query_args = array ( 'post_type' => 'product', 'post__in' => $product -> get_children(), 'orderby' => 'title', 'order' => 'ASC' );
                                            $args[ 'paged' ] ? $query_args[ 'paged' ] = $args[ 'paged' ] : $query_args[ 'paged' ] = get_query_var( 'paged' );
                                            $query = new WP_Query( $query_args );
                                            if ( $query -> have_posts() ) : ?>
												<div class="div-block-326">
                                                    <?php $rotation = 0;
                                                    $group = 0;
                                                    $post_index = 0;
                                                    while ( $query -> have_posts() ) : $query -> the_post();
                                                        $rotation === 0 ? $rotation = 1 : $rotation++;
                                                        $group === 0 ? $group = 1 : $group++;
                                                        $post_index++; ?>
														<label class="radio-button-field-2 w-radio">
															<input type="radio" data-name="product_id" name="product_id"
															       value="<?php echo get_the_ID(); ?>"
															       class="w-form-formradioinput radio-button-2 w-radio-input"><span
																	class="radio-button-label-2 w-form-label"><span
																		class="text-span-22"><?php the_title(); ?></span></span><?php $product = get_product( get_the_ID() );
                                                            if ( is_object( $product ) ) {
                                                                if ( !$product -> is_on_sale() || $product -> product_type === 'variable' ) { ?>
																	<div class="text-block-228"
																	     data-content="product_price"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_price() ) ?></div><?php }
                                                            } ?></label>
                                                    <?php endwhile; ?>
												</div>
                                            <?php else : ?>
                                            <?php endif;
                                            unset( $query_args );
                                            wp_reset_postdata(); ?>
										</div>
									</div>
									<div class="change-count_wrp"><a href="#" class="btn-chage-count min"
									                                 data-action="product_qty_minus">-</a>
										<input type="text" class="count-select w-input" maxlength="256" name="qty"
										       data-name="qty" placeholder="1" id="qty<?php echo get_the_ID() ?>"
										       required="" value="<?php $min_qty = get_field( 'qty_min' );
                                        echo( $min_qty ? $min_qty : 1 ); ?>"
										       data-qty-min="<?php $min_qty = get_field( 'qty_min' );
                                               echo( $min_qty ? $min_qty : 1 ); ?>"
										       data-qty-max="<?php $min_qty = get_field( 'qty_max' );
                                               echo( $min_qty ? $min_qty : 0 ); ?>"
										       data-qty-step="<?php $min_qty = get_field( 'qty_step' );
                                               echo( $min_qty ? $min_qty : 1 ); ?>"><a href="#"
										                                               class="btn-chage-count max"
										                                               data-action="product_qty_plus">+</a>
									</div>
									<div class="add-to-cart-btn__wrp">
										<input type="submit" value="В корзину" data-wait="Please wait..."
										       class="product__button-add-to-cart-page w-button"><a
												data-w-id="576294ff-a6ff-46b4-1f56-2a81bc05165b" href="#"
												class="btn-1-click w-button">купить в 1 клик</a></div>
								</form>
								<div class="w-form-done">
									<div>Товар добавлен в корзину</div>
								</div>
								<div class="w-form-fail">
									<div>Oops! Something went wrong while submitting the form.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php } ?>
    <?php if ( $product -> product_type === "simple" ) { ?>
		<div class="page__container w-container">
			<h1 class="product-page_name">
                <?php the_title(); ?>
			</h1>
			<div class="div-block-358">
				<div class="text-block-213"><span>Код товара:</span> <span><strong
								data-content="product_sku"><?php $product = get_product( get_the_ID() );
                            echo( $product -> sku ); ?></strong></span></div>
				<div class="rating-box">
					<div class="zvezda">
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11 _1"></strong></div>
					</div>
					<div class="zvezda-full" style="<?php echo get_field( 'rejting_tovara' ) ?>">
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
						<div class="text-block-207"><strong class="bold-text-11"></strong></div>
					</div>
				</div>
				<a href="#" class="link-11">Отзывов (5)</a></div>
			<div class="prodct-page__wrp">
				<div class="product-page__coll-img">
					<div class="product-page-img">
						<div class="product-page-img-miniature">
                            <?php global $post, $product, $woocommerce;
                            $attachment_ids = $product -> get_gallery_attachment_ids();
                            if ( $attachment_ids ) {
                                foreach ( $attachment_ids as $attachment_id ) {
                                    $props = wc_get_product_attachment_props( $attachment_id, $post ); ?><a href="#"
									                                                                        class="product-page-slider-lbox w-inline-block w-lightbox">
									<div class="product-page__slider-lbox-img"
									     style="background-image: url('<?php echo $props[ "url" ] ?>');"></div>
									<script type="application/json" class="w-json">
										{ "group": "product-<?php echo get_the_ID() ?>
										", "items": [{ "url": "<?php echo $props[ "url" ] ?>
										", "fileName": "", "origFileName": "", "width": 1920, "height": 1100, "size": 1, "type": "image" }] }
									</script></a>
                                <?php }
                            } ?>
						</div>
						<div class="product-page-img-hero"><a href="#"
						                                      class="product-page-lbox w-inline-block w-lightbox">
								<div class="product-page__lbox-img"
								     style="background-image: url('<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                                     echo $img[ 0 ]; ?>');"></div>
								<script type="application/json" class="w-json">
									{ "group": "product-<?php echo get_the_ID() ?>
									", "items": [{ "url": "<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                                    echo $img[ 0 ]; ?>
									", "fileName": "", "origFileName": "", "width": 1920, "height": 1100, "size": 1, "type": "image" }] }
								</script>
							</a></div>
					</div>
					<div class="product-page-option">
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Доставка по всей России, транспортными компаниями и собственным
								транспортном.
							</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Весь асортимент товара в наличии, собственный склад.</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Мы бесплатно, осуществляем предпродажную подготовку.</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Гарантия 1 год. Широкая сеть сервисных центров по всей России.
							</div>
						</div>
						<div class="produ-page__option">
							<div class="icon_option"></div>
							<div class="text_option">Конкурентные цены за счет прямых контрактов с иностранными
								поставщиками.
							</div>
						</div>
					</div>
				</div>
				<div class="product-page__coll-infom">
					<div class="div-block-317">
						<div class="div-block-318">
                            <?php if ( get_post_meta( get_the_ID(), '_stock_status', true ) === 'instock' ) { ?>
								<div class="div-block-331">
									<div class="text-block-184"><strong class="bold-text-8"></strong></div>
									<div class="text-block-185">Есть в наличии</div>
								</div>
                            <?php } ?><a href="#" class="link-10">Нужны оптовые поставки?</a></div>
						<div class="div-block-319">
							<div class="div-block-320">
                                <?php $product = get_product( get_the_ID() );
                                if ( is_object( $product ) ) {
                                    if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
										<div class="text-block-187" data-content="product_price_regular">
                                            <?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_regular_price() ) ?></div>
                                    <?php }
                                } ?>
							</div>
							<div class="div-block-321">
                                <?php $product = get_product( get_the_ID() );
                                if ( is_object( $product ) ) {
                                    if ( !$product -> is_on_sale() || $product -> product_type === 'variable' ) { ?>
										<div class="product-price" data-content="product_price">
                                            <?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_price() ) ?></div>
                                    <?php }
                                } ?>
                                <?php $product = get_product( get_the_ID() );
                                if ( is_object( $product ) ) {
                                    if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
										<div class="product-price sale" data-content="product_price_sale">
                                            <?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_sale_price() ) ?></div>
                                    <?php }
                                } ?>
							</div>
						</div>
						<div class="div-block-328">
							<div class="w-form">
								<form id="add_to_cart_<?php echo get_the_ID() ?>" name="add_to_cart"
								      data-name="add_to_cart" data-action="add_to_cart" action="/index.php"
								      data-product-id='<?php $product = get_product( get_the_ID() );
                                      if ( $product -> product_type === "variable" ) {
                                          echo( $product -> get_available_variations()[ 0 ][ "variation_id" ] );
                                      } else {
                                          echo( $product -> id );
                                      } ?>' data-product_id="<?php the_ID(); ?>">
									<div class="change-count_wrp"><a href="#" class="btn-chage-count min"
									                                 data-action="product_qty_minus">-</a>
										<input type="text" class="count-select w-input" maxlength="256" name="qty"
										       data-name="qty" placeholder="1" id="qty<?php echo get_the_ID() ?>"
										       required="" value="<?php $min_qty = get_field( 'qty_min' );
                                        echo( $min_qty ? $min_qty : 1 ); ?>"
										       data-qty-min="<?php $min_qty = get_field( 'qty_min' );
                                               echo( $min_qty ? $min_qty : 1 ); ?>"
										       data-qty-max="<?php $min_qty = get_field( 'qty_max' );
                                               echo( $min_qty ? $min_qty : 0 ); ?>"
										       data-qty-step="<?php $min_qty = get_field( 'qty_step' );
                                               echo( $min_qty ? $min_qty : 1 ); ?>"><a href="#"
										                                               class="btn-chage-count max"
										                                               data-action="product_qty_plus">+</a>
									</div>
									<div class="add-to-cart-btn__wrp">
										<input type="submit" value="В корзину" data-wait="Please wait..."
										       class="product__button-add-to-cart-page w-button"><a
												data-w-id="cd7b0fc6-0547-c798-e58c-e793f50fd759" href="#"
												class="btn-1-click w-button">купить в 1 клик</a></div>
								</form>
								<div class="w-form-done">
									<div>Товар добавлен в корзину</div>
								</div>
								<div class="w-form-fail">
									<div>Oops! Something went wrong while submitting the form.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php } ?>
    <?php if ( have_rows( 'podarki' ) ) { ?>
		<div class="div-block-338">
			<h1 class="heading-11">
                <?php echo get_field( 'zagolovok_sekcii_podarkov', 'options' ) ?>
			</h1>
            <?php if ( have_rows( 'podarki' ) ) { ?>
				<div class="div-block-339">
                    <?php global $parent_id;
                    $parent_id = $loop_id;
                    $loop_index = 0;
                    $loop_field = "podarki";
                    while ( have_rows( 'podarki' ) ) {
                        global $loop_id;
                        $loop_index++;
                        $loop_id++;
                        the_row(); ?>
						<div class="div-block-340">
							<div class="div-block-341"
							     style="background-image:url('<?php $field = get_sub_field( 'izobrazhenie_podarka' );
                                 if ( isset( $field[ 'url' ] ) ) {
                                     echo( $field[ 'url' ] );
                                 } elseif ( is_numeric( $field ) ) {
                                     echo( wp_get_attachment_image_url( $field, 'full' ) );
                                 } else {
                                     echo( $field );
                                 } ?>');"></div>
							<div class="text-block-200">
                                <?php echo get_sub_field( 'opisanie_podarka' ) ?>
							</div>
						</div>
                    <?php } ?>
				</div>
            <?php } ?>
		</div>
    <?php } ?>
	<div class="div-block-343">
		<div class="div-block-344">
			<div data-duration-in="300" data-duration-out="100" class="tabs-menu w-tabs">
				<div class="tabs-menu w-tab-menu"><a data-w-tab="Tab 2"
				                                     class="tab w-inline-block w-tab-link w--current">
						<div class="text-block-218">Описание</div>
					</a><a data-w-tab="Tab 3" class="tab w-inline-block w-tab-link">
						<div class="text-block-219">Характеристики</div>
					</a><a data-w-tab="Tab 4" class="tab w-inline-block w-tab-link">
						<div class="text-block-220">Комплектация</div>
					</a><a data-w-tab="Tab 5" class="tab w-inline-block w-tab-link">
						<div class="text-block-221">Отзывы (5)</div>
					</a></div>
				<div class="w-tab-content">
					<div data-w-tab="Tab 2" class="w-tab-pane">
						<div class="div-tabs">
							<h3 class="h-headinf-tovar">Название товара</h3>
							<p class="tab-tovar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
								varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
								interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus
								id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
							<h3 class="h-headinf-tovar">Преимущества</h3>
							<div class="div-block-345">
								<div class="text-block-203"></div>
								<p class="tab-tovar">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra
									ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
									faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
									tristique posuere.</p>
							</div>
							<div class="div-block-345">
								<div class="text-block-203"></div>
								<p class="tab-tovar">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra
									ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
									faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
									tristique posuere.</p>
							</div>
							<div class="div-block-345">
								<div class="text-block-203"></div>
								<p class="tab-tovar">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra
									ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
									faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
									tristique posuere.</p>
							</div>
							<div class="div-block-345">
								<div class="text-block-203"></div>
								<p class="tab-tovar">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra
									ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
									faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
									tristique posuere.</p>
							</div>
							<p class="tab-tovar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
								varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
								interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus
								id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
						</div>
					</div>
					<div data-w-tab="Tab 3" class="w-tab-pane">
						<div class="div-tabs">
							<h1 class="h-headinf-tovar">Характеристики товара</h1>
                            <?php if ( have_rows( 'harakteristiki' ) ) { ?>
								<div>
                                    <?php global $parent_id;
                                    $parent_id = $loop_id;
                                    $loop_index = 0;
                                    $loop_field = "harakteristiki";
                                    while ( have_rows( 'harakteristiki' ) ) {
                                        global $loop_id;
                                        $loop_index++;
                                        $loop_id++;
                                        the_row(); ?>
										<div class="columns-33 w-row">
											<div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
												<div class="tab-har">
                                                    <?php echo get_sub_field( 'opisanie_harakteristiki' ) ?>
												</div>
											</div>
											<div class="w-col w-col-6 w-col-small-6 w-col-tiny-6">
												<div class="tab-har">
                                                    <?php echo get_sub_field( 'znachenie_harakteristiki' ) ?>
												</div>
											</div>
										</div>
                                    <?php } ?>
								</div>
                            <?php } ?>
						</div>
					</div>
					<div data-w-tab="Tab 4" class="w-tab-pane">
						<div class="div-tabs">
							<h1 class="h-headinf-tovar">В комплект входят:</h1>
                            <?php if ( have_rows( 'komplektaciya' ) ) { ?>
								<div class="div-block-346">
                                    <?php global $parent_id;
                                    $parent_id = $loop_id;
                                    $loop_index = 0;
                                    $loop_field = "komplektaciya";
                                    while ( have_rows( 'komplektaciya' ) ) {
                                        global $loop_id;
                                        $loop_index++;
                                        $loop_id++;
                                        the_row(); ?>
										<div class="div-block-349">
											<div class="div-block-347"
											     style="background-image:url('<?php $field = get_sub_field( 'izobrazhenie_komplektacii' );
                                                 if ( isset( $field[ 'url' ] ) ) {
                                                     echo( $field[ 'url' ] );
                                                 } elseif ( is_numeric( $field ) ) {
                                                     echo( wp_get_attachment_image_url( $field, 'full' ) );
                                                 } else {
                                                     echo( $field );
                                                 } ?>');"></div>
											<div class="div-block-348">
												<div>
													<p class="paragraph-31">
                                                        <?php echo get_sub_field( 'opisanie_komplektacii' ) ?>
													</p>
												</div>
											</div>
										</div>
                                    <?php } ?>
								</div>
                            <?php } ?>
						</div>
					</div>
					<div data-w-tab="Tab 5" class="w-tab-pane">
						<div class="div-tabs">
							<h1 class="h-headinf-tovar">Отзывы. Название товара.</h1>
							<div class="div-block-350"><a data-w-id="5b8f8eb4-f243-faf2-ebc8-b8f2abf773f1" href="#"
							                              class="link-block-9 w-inline-block">
									<div class="div-block-351">
										<div class="div-block-352">
											<div class="text-block-205"></div>
											<div class="text-block-206">Оставить отзыв</div>
										</div>
									</div>
								</a></div>
                            <?php if ( have_rows( 'otzyvy_ot_tovare' ) ) { ?>
								<div>
                                    <?php global $parent_id;
                                    $parent_id = $loop_id;
                                    $loop_index = 0;
                                    $loop_field = "otzyvy_ot_tovare";
                                    while ( have_rows( 'otzyvy_ot_tovare' ) ) {
                                        global $loop_id;
                                        $loop_index++;
                                        $loop_id++;
                                        the_row(); ?>
										<div class="columns-34 w-row">
											<div class="w-col w-col-3">
												<div class="div-block-353">
													<div class="text-block-208">
                                                        <?php echo get_sub_field( 'imya_klienta' ) ?>
													</div>
													<div class="text-block-209">
                                                        <?php echo get_sub_field( 'data_otzyva' ) ?>
													</div>
													<div class="rating-box">
														<div class="zvezda">
															<div class="text-block-207"><strong class="bold-text-11 _1"></strong>
															</div>
															<div class="text-block-207"><strong class="bold-text-11 _1"></strong>
															</div>
															<div class="text-block-207"><strong class="bold-text-11 _1"></strong>
															</div>
															<div class="text-block-207"><strong class="bold-text-11 _1"></strong>
															</div>
															<div class="text-block-207"><strong class="bold-text-11 _1"></strong>
															</div>
														</div>
														<div class="zvezda-full"
														     style="<?php echo get_sub_field( 'rejting' ) ?>">
															<div class="text-block-207"><strong
																		class="bold-text-11"></strong></div>
															<div class="text-block-207"><strong
																		class="bold-text-11"></strong></div>
															<div class="text-block-207"><strong
																		class="bold-text-11"></strong></div>
															<div class="text-block-207"><strong
																		class="bold-text-11"></strong></div>
															<div class="text-block-207"><strong
																		class="bold-text-11"></strong></div>
														</div>
													</div>
												</div>
											</div>
											<div class="w-col w-col-9">
												<div>
													<p class="paragraph-32">
                                                        <?php echo get_sub_field( 'tekst_otzyva' ) ?>
													</p>
												</div>
											</div>
										</div>
                                    <?php } ?>
								</div>
                            <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section-16"></div>
<div id="sales" class="product__section">
    <?php if ( related_products() ) { ?>
		<div class="page__container w-container">
			<h3 class="heading-product">Похожие товары</h3>
			<div class="product-offerr_oveflow-hidden">
                <?php $query = new WP_Query( get_related_products( 8 ) );
                if ( $query -> have_posts() ) : ?>
					<div class="product-offer_flex-wrp">
                        <?php $rotation = 0;
                        $group = 0;
                        $post_index = 0;
                        while ( $query -> have_posts() ) : $query -> the_post();
                            $rotation === 0 ? $rotation = 1 : $rotation++;
                            $group === 0 ? $group = 1 : $group++;
                            $post_index++; ?>
							<div class="product-offer-card-coll">
								<div data-w-id="addd8cf8-eda2-d0a7-1a29-086b14fac5df" class="card-product__block"><a
											href="<?php the_permalink(); ?>"
											class="card-roduct-link w-inline-block"><?php $product = get_product( get_the_ID() );
                                        if ( $product -> product_type === 'variable' ) {
                                            $price = $product -> get_variation_price();
                                            $sale_price = $product -> get_variation_sale_price();
                                            $regular_price = $product -> get_variation_regular_price();
                                        } else {
                                            $price = $product -> get_price();
                                            $sale_price = $product -> get_sale_price();
                                            $regular_price = $product -> get_regular_price();
                                        }
                                        if ( !empty( $sale_price ) && $price !== $regular_price ) { ?>
											<div class="oval-percent"><?php $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
                                            echo $percentage . "%"; ?></div><?php } ?>
										<div class="img-card_bg"
										     style="background-image: url('<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                                             echo $img[ 0 ]; ?>');"></div>
										<h3 class="title_card-priduct"><?php the_title(); ?></h3>
										<div class="div-block-384">
											<div class="rating-box">
												<div class="zvezda">
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
												</div>
												<div class="zvezda-full"
												     style="<?php echo get_field( 'rejting_tovara' ) ?>">
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
												</div>
											</div>
										</div>
										<div class="card-price__wrp"><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
													<div class="old-price"
													     data-content="product_price_regular"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_regular_price() ) ?></div><?php }
                                            } ?><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
													<div class="new-price sale"
													     data-content="product_price_sale"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_sale_price() ) ?></div><?php }
                                            } ?><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( !$product -> is_on_sale() || $product -> product_type === 'variable' ) { ?>
													<div class="new-price"
													     data-content="product_price"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_price() ) ?></div><?php }
                                            } ?></div>
										<div class="card-line-decore"></div>
									</a>
									<div class="w-form">
										<form id="add_to_cart_<?php echo get_the_ID() ?>" name="add_to_cart"
										      data-name="add_to_cart" class="form-4" data-action="add_to_cart"
										      action="/index.php"
										      data-product-id='<?php $product = get_product( get_the_ID() );
                                              if ( $product -> product_type === "variable" ) {
                                                  echo( $product -> get_available_variations()[ 0 ][ "variation_id" ] );
                                              } else {
                                                  echo( $product -> id );
                                              } ?>' data-product_id="<?php the_ID(); ?>">
											<input type="submit" value="В корзину" data-wait="Please wait..."
											       class="product__button-add-to-cart w-button"></form>
										<div class="w-form-done">
											<div>Thank you! Your submission has been received!</div>
										</div>
										<div class="w-form-fail">
											<div>Oops! Something went wrong while submitting the form.</div>
										</div>
									</div>
									<a href="<?php the_permalink(); ?>" class="text-link">Подробнее</a></div>
							</div>
                        <?php endwhile; ?>
					</div>
                <?php else : ?>
                <?php endif;
                unset( $query_args );
                wp_reset_postdata(); ?>
			</div>
		</div>
    <?php } ?>
</div>

<!-- related products START -->
<?php get_template_part( 'partials/related-products' ); ?>
<!-- related products END -->


<!-- асейлы -->
<div id="sales" class="product__section">
    <?php if ( upsell_products() ) { ?>
		<div class="page__container w-container">
			<h3 class="heading-product">(Асейлы) Аксессуары 1 (товары по тегам) Планируется таких блоков 4-8 шт. на
				странице</h3>
			<div class="product-offerr_oveflow-hidden ">
                <?php $query = new WP_Query( get_upsell_products( 8 ) );
                if ( $query -> have_posts() ) : ?>
					<div class="product-offer_flex-wrp">
                        <?php $rotation = 0;
                        $group = 0;
                        $post_index = 0;
                        while ( $query -> have_posts() ) : $query -> the_post();
                            $rotation === 0 ? $rotation = 1 : $rotation++;
                            $group === 0 ? $group = 1 : $group++;
                            $post_index++; ?>
							<div class="product-offer-card-coll">
								<div data-w-id="addd8cf8-eda2-d0a7-1a29-086b14fac5df" class="card-product__block">
									<a href="<?php the_permalink(); ?>" class="card-roduct-link w-inline-block">
                                        <?php
                                        $product = get_product(get_the_ID());
                                        if ($product->product_type === 'variable') {
                                            $price = $product->get_variation_price();
                                            $sale_price = $product->get_variation_sale_price();
                                            $regular_price = $product->get_variation_regular_price();
                                        } else {
                                            $price = $product->get_price();
                                            $sale_price = $product->get_sale_price();
                                            $regular_price = $product->get_regular_price();
                                        }
                                        if ( !empty($sale_price) && $price !== $regular_price ) { ?>
											<div class="oval-percent">
                                                <?php
                                                $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
                                                echo $percentage."%"; ?>
											</div>
                                        <?php } ?>
										<div class="img-card_bg" style="background-image: url('<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), "large"); echo $img[0]; ?>');"></div>
										<h3 class="title_card-priduct"><?php the_title(); ?></h3>

										<!-- rating -->
										<div class="div-block-384">
											<div class="rating-box">
												<div class="zvezda">
													<div class="text-block-207">
														<strong class="bold-text-11 _1"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11 _1"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11 _1"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11 _1"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11 _1"></strong>
													</div>
												</div>
												<div class="zvezda-full" style="<?php echo get_field('rejting_tovara') ?>">
													<div class="text-block-207">
														<strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207">
														<strong class="bold-text-11"></strong>
													</div>
												</div>
											</div>
										</div>

										<!-- price -->
										<div class="card-price__wrp">
                                            <?php
                                            $product = get_product(get_the_ID());
                                            if (is_object($product)) {
                                                if ( $product->is_on_sale() && $product->product_type !== 'variable') { ?>
													<div class="old-price" data-content="product_price_regular">
                                                        <?php echo $product->product_type === 'variable'
                                                            ? $product->get_price_html()
                                                            : wc_price($product->get_regular_price())
                                                        ?>
													</div>
                                                <?php }} ?>
                                            <?php
                                            $product = get_product(get_the_ID());
                                            if (is_object($product)){
                                                if( $product->is_on_sale() && $product->product_type !== 'variable' ) { ?>
													<div class="new-price sale" data-content="product_price_sale">
                                                        <?php echo $product->product_type === 'variable'
                                                            ? $product->get_price_html()
                                                            : wc_price($product->get_sale_price()) ?>
													</div>
                                                <?php }} ?>
                                            <?php
                                            $product = get_product(get_the_ID());
                                            if(is_object($product)){
                                                if( !$product->is_on_sale() || $product->product_type === 'variable') { ?>
													<div class="new-price" data-content="product_price">
                                                        <?php echo $product->product_type === 'variable'
                                                            ? $product->get_price_html()
                                                            : wc_price($product->get_price()) ?>
													</div>
                                                <?php }} ?>
										</div>
										<div class="card-line-decore"></div>
									</a>
									<!-- add to card -->
									<div class="w-form">
										<form
												id="add_to_cart_<?php echo get_the_ID() ?>"
												name="add_to_cart"
												data-name="add_to_cart"
												class="form-4 form-card-asale"
												data-action="add_to_cart"
												action="/index.php"
												data-product-id='<?php
                                                $product = get_product(get_the_ID());
                                                if($product->product_type === "variable") {
                                                    echo($product->get_available_variations()[0]["variation_id"]);
                                                } else {
                                                    echo($product->id); }
                                                ?>'
												data-product_id="<?php the_ID(); ?>">

											<input
													type="submit"
													value="В корзину"
													data-wait="Please wait..."
													class="product__button-add-to-cart w-button">
										</form>
										<!-- done -->
										<div class="w-form-done">
											<div>Thank you! Your submission has been received!</div>
										</div>
										<!-- fail -->
										<div class="w-form-fail">
											<div>Oops! Something went wrong while submitting the form.</div>
										</div>
									</div>
									<!-- link product -->
									<a href="<?php the_permalink(); ?>" class="text-link">Подробнее</a>
								</div>
							</div>
                        <?php endwhile; ?>
					</div>
                <?php else : ?>
                <?php
                endif;
                unset( $query_args );
                wp_reset_postdata();
                ?>
			</div>
		</div>

    <?php } ?>
</div>
<div id="sales" class="product__section">
    <?php if ( crosssell_products() ) { ?>
		<div class="page__container w-container">
			<h3 class="heading-product">(Кроссейлы) Аксессуары 1 (товары по тегам) Планируется таких блоков 4-8 шт. на
				странице</h3>
			<div class="product-offerr_oveflow-hidden">
                <?php $query = new WP_Query( get_crosssell_products( 8 ) );
                if ( $query -> have_posts() ) : ?>
					<div class="product-offer_flex-wrp">
                        <?php $rotation = 0;
                        $group = 0;
                        $post_index = 0;
                        while ( $query -> have_posts() ) : $query -> the_post();
                            $rotation === 0 ? $rotation = 1 : $rotation++;
                            $group === 0 ? $group = 1 : $group++;
                            $post_index++; ?>
							<div class="product-offer-card-coll">
								<div data-w-id="addd8cf8-eda2-d0a7-1a29-086b14fac5df" class="card-product__block"><a
											href="<?php the_permalink(); ?>"
											class="card-roduct-link w-inline-block"><?php $product = get_product( get_the_ID() );
                                        if ( $product -> product_type === 'variable' ) {
                                            $price = $product -> get_variation_price();
                                            $sale_price = $product -> get_variation_sale_price();
                                            $regular_price = $product -> get_variation_regular_price();
                                        } else {
                                            $price = $product -> get_price();
                                            $sale_price = $product -> get_sale_price();
                                            $regular_price = $product -> get_regular_price();
                                        }
                                        if ( !empty( $sale_price ) && $price !== $regular_price ) { ?>
											<div class="oval-percent"><?php $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
                                            echo $percentage . "%"; ?></div><?php } ?>
										<div class="img-card_bg"
										     style="background-image: url('<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                                             echo $img[ 0 ]; ?>');"></div>
										<h3 class="title_card-priduct"><?php the_title(); ?></h3>
										<div class="div-block-384">
											<div class="rating-box">
												<div class="zvezda">
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
												</div>
												<div class="zvezda-full"
												     style="<?php echo get_field( 'rejting_tovara' ) ?>">
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
												</div>
											</div>
										</div>
										<div class="card-price__wrp"><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
													<div class="old-price"
													     data-content="product_price_regular"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_regular_price() ) ?></div><?php }
                                            } ?><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
													<div class="new-price sale"
													     data-content="product_price_sale">
	                                                <?php
	                                                echo $product -> product_type === 'variable'
		                                                ? $product -> get_price_html()
		                                                : wc_price( $product -> get_sale_price() ) ?>
	                                                </div>
                                                <?php }
                                            } ?><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( !$product -> is_on_sale() || $product -> product_type === 'variable' ) { ?>
													<div class="new-price"
													     data-content="product_price"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_price() ) ?></div><?php }
                                            } ?></div>
										<div class="card-line-decore"></div>
									</a>
									<div class="w-form">
										<form id="add_to_cart_<?php echo get_the_ID() ?>" name="add_to_cart"
										      data-name="add_to_cart" class="form-4" data-action="add_to_cart"
										      action="/index.php"
										      data-product-id='<?php $product = get_product( get_the_ID() );
                                              if ( $product -> product_type === "variable" ) {
                                                  echo( $product -> get_available_variations()[ 0 ][ "variation_id" ] );
                                              } else {
                                                  echo( $product -> id );
                                              } ?>' data-product_id="<?php the_ID(); ?>">
											<input type="submit" value="В корзину" data-wait="Please wait..."
											       class="product__button-add-to-cart w-button"></form>
										<div class="w-form-done">
											<div>Thank you! Your submission has been received!</div>
										</div>
										<div class="w-form-fail">
											<div>Oops! Something went wrong while submitting the form.</div>
										</div>
									</div>
									<a href="<?php the_permalink(); ?>" class="text-link">Подробнее</a></div>
							</div>
                        <?php endwhile; ?>
					</div>
                <?php else : ?>
                <?php endif;
                unset( $query_args );
                wp_reset_postdata(); ?>
			</div>
		</div>
    <?php } ?>
</div>
<div id="sales" class="product__section">
    <?php if ( viewed_products() ) { ?>
		<div class="page__container w-container">
			<h3 class="heading-product">Недавно смотрели</h3>
			<div class="product-offerr_oveflow-hidden">
                <?php $query = new WP_Query( get_viewed_products( 8 ) );
                if ( $query -> have_posts() ) : ?>
					<div class="product-offer_flex-wrp">
                        <?php $rotation = 0;
                        $group = 0;
                        $post_index = 0;
                        while ( $query -> have_posts() ) : $query -> the_post();
                            $rotation === 0 ? $rotation = 1 : $rotation++;
                            $group === 0 ? $group = 1 : $group++;
                            $post_index++; ?>
							<div class="product-offer-card-coll">
								<div data-w-id="addd8cf8-eda2-d0a7-1a29-086b14fac5df" class="card-product__block"><a
											href="<?php the_permalink(); ?>"
											class="card-roduct-link w-inline-block"><?php $product = get_product( get_the_ID() );
                                        if ( $product -> product_type === 'variable' ) {
                                            $price = $product -> get_variation_price();
                                            $sale_price = $product -> get_variation_sale_price();
                                            $regular_price = $product -> get_variation_regular_price();
                                        } else {
                                            $price = $product -> get_price();
                                            $sale_price = $product -> get_sale_price();
                                            $regular_price = $product -> get_regular_price();
                                        }
                                        if ( !empty( $sale_price ) && $price !== $regular_price ) { ?>
											<div class="oval-percent"><?php $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
                                            echo $percentage . "%"; ?></div><?php } ?>
										<div class="img-card_bg"
										     style="background-image: url('<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), "large" );
                                             echo $img[ 0 ]; ?>');"></div>
										<h3 class="title_card-priduct"><?php the_title(); ?></h3>
										<div class="div-block-384">
											<div class="rating-box">
												<div class="zvezda">
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
													<div class="text-block-207"><strong
																class="bold-text-11 _1"></strong></div>
												</div>
												<div class="zvezda-full"
												     style="<?php echo get_field( 'rejting_tovara' ) ?>">
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
													<div class="text-block-207"><strong class="bold-text-11"></strong>
													</div>
												</div>
											</div>
										</div>
										<div class="card-price__wrp">
											<?php
												$product = get_product( get_the_ID() );
                                                if ( is_object( $product ) ) {
                                                if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
													<div class="old-price"
													     data-content="product_price_regular"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_regular_price() ) ?></div><?php }
                                            } ?><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( $product -> is_on_sale() && $product -> product_type !== 'variable' ) { ?>
													<div class="new-price sale"
													     data-content="product_price_sale"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_sale_price() ) ?></div><?php }
                                            } ?><?php $product = get_product( get_the_ID() );
                                            if ( is_object( $product ) ) {
                                                if ( !$product -> is_on_sale() || $product -> product_type === 'variable' ) { ?>
													<div class="new-price"
													     data-content="product_price"><?php echo $product -> product_type === 'variable' ? $product -> get_price_html() : wc_price( $product -> get_price() ) ?></div><?php }
                                            } ?></div>
										<div class="card-line-decore"></div>
									</a>
									<div class="w-form">
										<form id="add_to_cart_<?php echo get_the_ID() ?>" name="add_to_cart"
										      data-name="add_to_cart" class="form-4" data-action="add_to_cart"
										      action="/index.php"
										      data-product-id='<?php $product = get_product( get_the_ID() );
                                              if ( $product -> product_type === "variable" ) {
                                                  echo( $product -> get_available_variations()[ 0 ][ "variation_id" ] );
                                              } else {
                                                  echo( $product -> id );
                                              } ?>' data-product_id="<?php the_ID(); ?>">
											<input type="submit" value="В корзину" data-wait="Please wait..."
											       class="product__button-add-to-cart w-button"></form>
										<div class="w-form-done">
											<div>Thank you! Your submission has been received!</div>
										</div>
										<div class="w-form-fail">
											<div>Oops! Something went wrong while submitting the form.</div>
										</div>
									</div>
									<a href="<?php the_permalink(); ?>" class="text-link">Подробнее</a></div>
							</div>
                        <?php endwhile; ?>
					</div>
                <?php else : ?>
                <?php endif;
                unset( $query_args );
                wp_reset_postdata(); ?>
			</div>
		</div>
    <?php } ?>
</div>
<div id="contakts" class="section-4">
	<div class="div-block-234">
		<div class="w-row">
			<div class="w-col w-col-4">
				<div>
					<div class="div-block-249">
						<div class="text-block-145">Информация:</div>
					</div>
                    <?php if ( have_rows( 'informaciya_v_futere', 'options' ) ) { ?>
						<div class="main-block">
                            <?php global $parent_id;
                            $parent_id = $loop_id;
                            $loop_index = 0;
                            $loop_field = "informaciya_v_futere";
                            while ( have_rows( 'informaciya_v_futere', 'options' ) ) {
                                global $loop_id;
                                $loop_index++;
                                $loop_id++;
                                the_row(); ?>
								<div class="div-block-250">
									<div class="text-block-146"></div>
									<a href="<?php echo get_sub_field( 'ssylka' ) ?>"
									   class="link-2"><?php echo get_sub_field( 'tekst' ) ?></a></div>
                            <?php } ?>
						</div>
                    <?php } ?>
				</div>
			</div>
			<div class="w-col w-col-4">
				<div class="div-block-249">
					<div class="text-block-145">Категории товаров:</div>
				</div>
                <?php if ( have_rows( 'kategorii_v_futere', 'options' ) ) { ?>
					<div class="main-block">
                        <?php global $parent_id;
                        $parent_id = $loop_id;
                        $loop_index = 0;
                        $loop_field = "kategorii_v_futere";
                        while ( have_rows( 'kategorii_v_futere', 'options' ) ) {
                            global $loop_id;
                            $loop_index++;
                            $loop_id++;
                            the_row(); ?>
							<div class="div-block-250">
								<div class="text-block-146"></div>
								<a href="<?php echo get_sub_field( 'ssylka' ) ?>"
								   class="link-2"><?php echo get_sub_field( 'tekst' ) ?></a></div>
                        <?php } ?>
					</div>
                <?php } ?>
			</div>
			<div class="w-col w-col-4">
				<div class="main-block">
					<div class="div-block-249">
						<div class="text-block-145">Контакты:</div>
					</div>
					<div class="div-block-250">
						<div class="text-block-146"></div>
						<div class="link-2">Телефон: <a
									href="tel:+<?php echo preg_replace( "/(\D)/", "", get_field( 'telefon', 'options' ) ) ?>"
									class="contact-footer"><?php echo get_field( 'telefon', 'options' ) ?></a></div>
					</div>
					<div class="div-block-250">
						<div class="text-block-146"></div>
						<div class="link-2">Адрес эл. почты: <a
									href="mailto:<?php echo get_field( 'email', 'options' ) ?>"
									class="contact-footer"><?php echo get_field( 'email', 'options' ) ?></a></div>
					</div>
					<div class="div-block-250">
						<div class="text-block-146"></div>
						<div class="link-2">График работы:
							<span><?php echo get_field( 'grafik_raboty', 'options' ) ?></span></div>
					</div>
					<div class="div-block-250">
						<div class="text-block-146"></div>
						<div class="link-2">Адрес магазина:
							<span><?php echo get_field( 'adres_magazina', 'options' ) ?></span></div>
					</div>
					<div class="div-block-250">
						<div class="text-block-146"></div>
						<div class="link-2">Адрес склада:
							<span><?php echo get_field( 'adres_sklada', 'options' ) ?></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-block-251">
			<div class="div-block-252">
				<div class="text-block-148"></div>
				<div class="text-block-149">
                    <?php echo get_field( 'kopirajt', 'options' ) ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="lbox">
	<div class="lbox bg"></div>
	<div class="lbox window">
		<div class="lbox-clouce">
			<div class="text-block-222" data-ix="lbox-clause">×</div>
		</div>
		<div class="div-forma">
			<h4 class="lbox-header">Полное название товара</h4>
			<div class="w-form">
				<form id="email-form-5" name="email-form-5" data-name="Email Form 5" class="form-3">
					<input type="text" class="text-field-27 w-input" maxlength="256" name="name" data-name="Name"
					       placeholder="Введите Ф.И.О (полностью)" id="name">
					<input type="text" class="text-field-28 w-input" maxlength="256" name="Phone" data-name="Phone"
					       placeholder="+7 (_ _ _)  _ _ _ - _ _ _ _" id="Phone" required="">
					<input type="text" class="text-field-28 w-input" maxlength="256" name="Email" data-name="Email"
					       placeholder="Ваш адрес Email" id="Email" required="">
					<textarea data-name="Koment" maxlength="5000" id="Koment" name="Koment"
					          placeholder="Введите ваш комментарий к заказу, если нужно."
					          class="textarea-5 w-input"></textarea>
					<input type="submit" value="Заказать" data-wait="Please wait..." class="lbox-submit w-button">
				</form>
				<div class="w-form-done">
					<div>Thank you! Your submission has been received!</div>
				</div>
				<div class="w-form-fail">
					<div>Oops! Something went wrong while submitting the form.</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="cart-box">
	<div class="cart-box bg"></div>
	<div class="cart-box window">
		<div class="cart-clouse">
			<div class="cart-off" data-ix="cart-off">×</div>
		</div>
		<div class="div-block-374">
			<div class="text-block-224">Товар добавлен в корзину!</div>
		</div>
		<div class="div-block-371">
			<div class="w-row">
				<div class="column-99 w-col w-col-2 w-col-small-2">
					<div class="div-block-372"></div>
				</div>
				<div class="w-col w-col-10 w-col-small-10">
					<div class="div-block-373"><a href="#" class="link-14">Полное название товара, полное название
							товара, полное название товара</a></div>
				</div>
			</div>
		</div>
		<div class="div-block-376"><a href="#" class="link-block-12 w-inline-block">
				<div class="div-block-377">
					<div class="text-block-226">Продолжить покупки</div>
				</div>
			</a><a href="#" class="link-block-13 w-inline-block">
				<div class="div-block-378">
					<div class="text-block-227">Перейти к Оформлению</div>
				</div>
			</a></div>
	</div>
</div>
<div style="display:none" class="popup">
	<div class="form-popup__wrp">
		<div class="form-block w-form">
			<form id="email-form-6" name="email-form-6" data-name="Email Form 6">
				<div class="form-title">Оставьте ваш отзыв о нашем продукте</div>
				<input type="text" class="input w-input" maxlength="256" name="name-2" data-name="Name 2"
				       placeholder="Ваше имя" id="name-2">
				<input type="text" class="input w-input" maxlength="256" data-name="Дата покупки"
				       placeholder="Дата покупки" id="node" required="">
				<textarea placeholder="Ваш отзыв " maxlength="5000" id="field" name="field"
				          class="area w-input"></textarea>
				<input type="submit" value="отправить отзыв" data-wait="отправка.." class="submit-btn w-button"></form>
			<div class="success-message w-form-done">
				<div>Благодарим Вас за ваш отзыв</div>
			</div>
			<div class="error-message w-form-fail">
				<div>произошла какая-то ошибка, попробуйте еще раз!</div>
			</div>
		</div>
	</div>
	<div data-w-id="a6bc38d4-1837-37c9-7fd2-15d576e95208" class="close_bg"><img
				src="<?php echo get_template_directory_uri() ?>/images/5ebf0d45b3f1fd3b72797733_D0BAD180D0B5D181D182D0B8D0BA.svg"
				alt="" class="close"></div>
</div>
<div style="display:none" class="popup-1click">
	<div class="form-popup__wrp">
		<div class="form-block w-form">
			<form id="email-form-6" name="email-form-6" data-name="Email Form 6">
				<div class="form-title">Отпера пожлуйста свои данные</div>
				<input type="text" class="input w-input" maxlength="256" name="name-2" data-name="Name 2"
				       placeholder="Ваше имя" id="name-2">
				<input type="tel" class="input w-input" maxlength="256" data-name="телефон" placeholder="Ваш телефон"
				       id="node-2" required="">
				<input type="tel" class="input w-input" maxlength="256" name="E-mail" data-name="E-mail"
				       placeholder="Ваш адрес эл. почты" id="E-mail" required="">
				<input type="submit" value="купить товар" data-wait="отправка.." class="submit-btn w-button"></form>
			<div class="success-message w-form-done">
				<div>Благодарим Вас за ваш отзыв</div>
			</div>
			<div class="error-message w-form-fail">
				<div>произошла какая-то ошибка, попробуйте еще раз!</div>
			</div>
		</div>
	</div>
	<div data-w-id="15ea2ff2-5b59-46a1-bde7-653097e30f6d" class="close_bg"><img
				src="<?php echo get_template_directory_uri() ?>/images/5ebf0d45b3f1fd3b72797733_D0BAD180D0B5D181D182D0B8D0BA.svg"
				alt="" class="close"></div>
</div>
<!--[if lte IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<?php get_template_part( "footer_block", "" ); ?>