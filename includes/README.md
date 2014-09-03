Includes
========

Instead of writing the header and footer on every single page we just use PHP and use the `include` or `require` method.
This is the syntax we use for includes:

```HTML+PHP
<?php require '/includes/upper_header.php'; ?>
    <title>1294 | PAGE TITLE</title>
    <meta name="description" content="The description for the page"/>
<?php require '/includes/lower_header.php'; ?>

THE WEBPAGE

<?php
//Use $ExtraFooterTags to add extra page specific HTML tags to the footer

require '/includes/footer.php';

?>

```
