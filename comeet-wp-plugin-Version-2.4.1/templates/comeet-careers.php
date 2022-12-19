<div class="comeet-outer-wrapper">
    <div class="s-comeet-catalog__controls">
        <div class="s-news__types-dropdown dropdown-js-action dropdown-departments">
            All Departments <span class="count-departments"></span>
            <ul class="departments-list" style="display: none;">
                <li><a>All Departments</a></li>
            </ul>
        </div>
        <div class="s-news__types-dropdown dropdown-js-action dropdown-locations">
            Locations <span class="count-locations"></span>
            <ul class="locations-list" style="display: none;">
                <li><a>All Locations</a></li>
            </ul>
        </div>
        <div class="btn-yellow action-dropdown-filter">search</div>
    </div>
    <?php
    if (isset($comeet_groups) && !empty($comeet_groups)) {
    ?>
    <ul class="comeet-positions-list">
        <?php
        foreach ($comeet_groups as $category) {
            ?>
            <?php
            if (isset($data)) {
                foreach ($data as $post) {
                    if (isset($group_element)) {
                        if ($this->check_comeet_is_category($post, $group_element, $category)) {
                            $href = $this->generate_careers_url($base, $category, $post);
                            ?>
                            <li>
                                <a class="comeet-position" href="<?= $href ?>">
                                    <div class="comeet-position-name">
                                        <span class="comeet-position-title"><?= $post['name'] ?></span>
                                        <?php
                                        if (!$post['employment_type'] == NULL || !$post['employment_type'] == "") {
                                            echo '  &middot;  ' . $post['employment_type'];
                                        }
                                        if (!$post['experience_level'] == NULL || !$post['experience_level'] == "") {
                                            echo '  &middot;  ' . $post['experience_level'];
                                        }
                                        ?>
                                    </div>
                                    <div class="comeet-position-meta">
                                        <?php
                                        echo '<div class="comeet-position-department">' . $post['department'] . '</div>';
                                        echo '<div class="comeet-position-location">' . '<span class="comeet-position-location-name">' . $post['location']['name'] . '</span>';
                                        if ($post['location']['country']) echo ', ' . $post['location']['country'];
                                        echo '</div>';
                                        ?>
                                    </div>
                                </a>
                            </li>
                            <?php
                        }
                    }
                }
            }
            ?>
            <?php
        }
        ?>
    </ul>
</div>
<!--div class="comeet-social">
    <script type="comeet-social"></script>
</div-->
<?php
} else {
    echo "We don't have any open positions at this time. Please visit again soon.";
}
?>
<?php
//include('version-comments.php');
?>
</div>
