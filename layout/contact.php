<?php

defined('MOODLE_INTERNAL') || die();

global $CFG, $PAGE, $OUTPUT;

echo $OUTPUT->doctype();
?>

<html <?php echo $OUTPUT->htmlattributes(); ?>>

<head>
    <title><?php echo s($PAGE->title); ?></title>

    <?php echo $OUTPUT->standard_head_html(); ?>
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html(); ?>

<header class="lh-header">

    <div class="lh-container lh-header-inner">

        <a
            href="<?php echo $CFG->wwwroot; ?>"
            class="lh-brand"
        >

            <span class="lh-brand-mark">
                <span></span>
                <span></span>
            </span>

            <span class="lh-brand-text">
                <strong>Learning Hub</strong>
                <small>Learn · Grow · Perform</small>
            </span>

        </a>

        <nav class="lh-navigation" aria-label="Learning Hub navigation">

            <a
                href="<?php echo $CFG->wwwroot; ?>"
                class="lh-nav-link"
            >
                Home
            </a>

            <a
                href="<?php echo $CFG->wwwroot; ?>#lh-services"
                class="lh-nav-link"
            >
                Features
            </a>

            <a
                href="<?php echo $CFG->wwwroot; ?>#lh-about"
                class="lh-nav-link"
            >
                About Me
            </a>

            <a
                href="<?php echo $CFG->wwwroot; ?>/local/learninghub/"
                class="lh-nav-link active"
            >
                Contact
            </a>

        </nav>

        <a
            href="<?php echo $CFG->wwwroot; ?>/local/learninghub/"
            class="lh-header-cta"
        >
            Let's Build Your LMS →
        </a>

        <div class="lh-user-menu">
            <?php echo $OUTPUT->user_menu(); ?>
        </div>

    </div>

</header>

<main id="maincontent" class="lh-contact-main">

    <div class="lh-contact-content-wrapper">

        <?php echo $OUTPUT->main_content(); ?>

    </div>

</main>

<?php echo $OUTPUT->standard_footer_html(); ?>

</body>

</html>
