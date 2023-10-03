<?php
/*
Template Name: NewThankYouPage
*/

get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/text-page.css">
</head>

<body>
    <div class="text-page ty-page">
        <h2 class="block h2-title ty-page__title">
            <span class="text-orange">Thank you</span> for trusting Corewide with your project needs!
        </h2>
        <h3 class="h3-title ty-page__subtitle">
            <span class="text-orange">Keep an eye on your inbox;</span> we'll send over details for our introductory call.
            <br />Eagerly awaiting the chance to dive deep into your project's specifics.
        </h3>

        <a class="btn-primary ty-page__btn" href="/">Go to Corewide.com</a>
    </div>

</body>

<?php get_footer(); ?>
</html>