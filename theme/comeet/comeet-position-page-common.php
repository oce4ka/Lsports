<div>
    <?php
    if (isset($this->post_data)) {
        $this->plugin_debug(['Template page: comeet-position-page-common.php', 'Data:', $this->post_data], __LINE__, __FILE__);
    }
    if (isset($post)) {
        $this->plugin_debug(['Template page: comeet-position-page-common.php', 'Data:', $post], __LINE__, __FILE__);
    }
    ?>
</div>

<section class="s-about-positions bg-grey one-position">
     <div class="container s-about-positions__grid">
        <div class="s-about-positions__content">
            <div class="s-about-positions__title-label"><?php the_field('title_position_label', 'option') ?></div>
            <?php
            if (empty($this->post_data) || (isset($this->post_data) && (isset($this->post_data['status'])) && ($this->post_data['status'] == 404))) {
                $careerurl = site_url() . (isset($post) ? '/' . $post->post_name : '');
                echo 'The position may have been closed or the link is incorrect. You will be redirected to the careers page, if nothing happens click <a href="' . $careerurl . '">here</a>.';
            } else {
                ?>
                <div id="<?php echo $this->post_data['uid']; ?>">
                    <h2 class="comeet-position-name">
                        <?php echo $this->post_data['name'] ?>
                    </h2>
                    <div class="comeet-position-meta-single">
                        <div class="comeet-position-meta">
                            <?php
                            echo '<span class="comeet-position-department">' . $this->post_data['department'] . '</span>';
                            echo '<span class="comeet-position-location">' . '<span class="comeet-position-location-name">' . $this->post_data['location']['name'] . '</span>';
                            if ($this->post_data['location']['country']) echo ', ' . $this->post_data['location']['country'];
                            echo '</span>';
                            ?>
                        </div>
                    </div>

                </div>


                <?php
            }
            ?>

        </div>
    </div>


       <div class="container s-about-positions__grid">
        <div class="s-about-positions__content">
 
            <?php
            if (empty($this->post_data) || (isset($this->post_data) && (isset($this->post_data['status'])) && ($this->post_data['status'] == 404))) {
                $careerurl = site_url() . (isset($post) ? '/' . $post->post_name : '');
                echo 'The position may have been closed or the link is incorrect. You will be redirected to the careers page, if nothing happens click <a href="' . $careerurl . '">here</a>.';
            } else {
                ?>
                <div id="<?php echo $this->post_data['uid']; ?>">
 
 
                    <div class="comeet-position-info">
                        <?php if (isset($this->post_data['details'])) : ?>
                            <?php foreach ($this->post_data['details'] as $details): ?>
                                <?php if (isset($details['value']) && !empty($details['value']) && !empty(trim($details['value']))) : ?>
                                    <?php $title = $this->get_position_title($details['name']); ?>
                                    <?php $css = $this->get_position_css($details['name']); ?>
                                    <?php $prop = $this->get_schema_prop($details['name']); ?>
                                    <h4><?php echo $title; ?></h4>
                                    <div class="comeet-position-<?php echo $css; ?> comeet-user-text">
                                        <?php echo $details['value'] ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- <h3>--><?php //the_field('about_the_position', 'option') ?><!--</h3>-->
                        <!-- <h3>--><?php //the_field('requirements', 'option') ?><!--</h3>-->
                    </div>
                </div>

                <a href="#apply" class="btn-yellow"><?php the_field('apply', 'option') ?></a>

                <?php
            }
            ?>
            <div class="comeet-social">
                <div class="s-about-positions__share-label"><?php the_field('share_with_someone_you_care', 'option') ?></div>
                <script type="comeet-social" data-position-uid="<?php echo $this->post_data['uid'] ?>" data-css-url="https://www.lsports.eu/wp-content/themes/LSport/css/custom-comeet.css"></script>
            </div>
        </div>

        <div  id="apply" class="s-about-positions__image">
        <h4>A<u>p</u>ply</h4>
        <script data-css-cache="false" data-css-url="https://www.lsports.eu/wp-content/themes/LSport/css/custom-comeet.css" type="comeet-applyform" data-position-uid="<?php echo $this->post_data['uid'] ?>"></script>
        </div>
    </div>
</section>



<section class="s-comeet-catalog">
    <div class="container">
        <h2>J<u>o</u>in our t<u>e</u>am</h2>
        <div class="s-comeet-catalog__total"><strong class="s-comeet-catalog__total-number"></strong> Open positions</div>

        <?php
        global $wp_query;
        $this->comeet_cat = (isset($wp_query->query_vars['comeet_cat'])) ? urldecode($wp_query->query_vars['comeet_cat']) : null;
        $options = $this->get_options();
        list($comeet_groups, $data, $group_element) = ComeetData::get_groups($options, $this->comeet_cat);
        foreach ($data as $post) {
            if (ComeetData::is_category($post, $group_element, $this->comeet_cat)) {
                $this->title = $post[$group_element];
                $this->social_graph_description = $this->social_graph_default_description . ' - ' . ComeetData::get_group_value($post, $group_element);
                break;
            }
        }

        $this->comeet_preload_data();
        include('comeet-careers.php');
        ?>
    </div>
</section>

