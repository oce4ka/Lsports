<?php
/**
 * Template Name: Contact SEC
 *
 * This is the template that displays page Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LSport
 */

get_header();
?>

    <section class="s-contact bg-grey">
        <?php if (have_rows('left_column')): while (have_rows('left_column')) :
        the_row(); ?>
        <div class="container s-contact__grid">
            <div class="s-contact__content-form">
                <h1><?php the_sub_field('title') ?></h1>
                <h2><?php the_sub_field('subtitle') ?></h2>
                <p><?php the_sub_field('description') ?></p>
                <div class="s-contact__form">
                    <?php the_sub_field('form') ?>
                </div>
            </div>
            <?php endwhile;
            endif; ?>
            <?php if (have_rows('right_column')): while (have_rows('right_column')) :
            the_row(); ?>
            <div class="s-contact__content">
                <?php if (have_rows('list')): while (have_rows('list')) :the_row(); ?>
                    <h2><?php the_sub_field('title') ?></h2>
                    <ul>
                        <?php if (have_rows('list_item')): while (have_rows('list_item')) :the_row(); ?>
                            <li><?php the_sub_field('text') ?></li>
                        <?php endwhile;endif; ?>
                    </ul>
                <?php endwhile;endif; ?>
            </div>
        </div>
    <?php endwhile;
    endif; ?>
    </section>


<lsports-sec api-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkb21haW4iOiJodHRwczovL3d3dy5sc3BvcnRzLmV1Iiwid2lkZ2V0SWQiOiIwMmk3UzAwMDAwNlhLV05RQTQiLCJjdXN0b21lcklkIjoiMDAxM1YwMDAwMDlIQXlUUUFXIiwiZXhwIjo0ODYzNTc5NDQwLCJpc3MiOiJsc3BvcnRzLmV1IiwiYXVkIjoiaHR0cHM6Ly93d3cubHNwb3J0cy5ldSJ9.fM1ad2MTKnuqJmZvoA1fzswpOegnEqaVMi4HQHkcQJY"   is-open="true"></lsports-sec>



<script>
const req = async () => {
  try {
    const res = await fetch("https://sec-gw.lsports.eu/fixtures/api/v1/fixtures", {
      headers: {
        Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkb21haW4iOiJodHRwczovL3d3dy5sc3BvcnRzLmV1Iiwid2lkZ2V0SWQiOiIwMmk3UzAwMDAwNlhLV05RQTQiLCJjdXN0b21lcklkIjoiMDAxM1YwMDAwMDlIQXlUUUFXIiwiZXhwIjo0ODYzNTc5NDQwLCJpc3MiOiJsc3BvcnRzLmV1IiwiYXVkIjoiaHR0cHM6Ly93d3cubHNwb3J0cy5ldSJ9.fM1ad2MTKnuqJmZvoA1fzswpOegnEqaVMi4HQHkcQJY"
      }
    });
    if (!res.ok) {
        throw new Error(`HTTP error! status: ${res.status}`);
    }
    const json = await res.json();
    console.log(json);

    const widget = document.querySelector('lsports-sec');  
    if (widget != null) {
          // Assuming 'json' contains a property 'fixtures' that you want to assign
          // Adjust this based on the actual structure of your JSON response
          widget.fixtures = json.fixtures;
    }
  } catch (error) {
    console.error("Failed to fetch data:", error);
  }
};

req();
</script>

<?php get_footer();
