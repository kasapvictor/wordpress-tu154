<div data-w-id="addd8cf8-eda2-d0a7-1a29-086b14fac5df" class="card-product__block">
    <div class="card-roduct-link w-inline-block asale-card-product">
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

        <div class="img-card_bg" style="background-image: url('<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), "large"); echo $img[0]; ?>');"
             data-asale-product
             data-asale-prouct-id="<?php echo get_the_ID(); ?>">
        </div>

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

        <!-- line -->
        <div class="card-line-decore"></div>
    </div>

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

    <!-- preview product -->
    <div class="asale-product-preview"
        data-asale-product
        data-asale-prouct-id="<?php echo get_the_ID(); ?>">
        <span class="ico">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="#f43131cf" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
              <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
        </span>
        Быстрый просмотр
    </div>
<!--    <a href="--><?php //the_permalink(); ?><!--" class="text-link">Подробнее</a>-->
</div>