jQuery(document).ready(function($) {
    var $grid = $('#masonry-grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-item',
    });

    // Layout Masonry after each image loads
    $grid.imagesLoaded().progress(function() {
        $grid.masonry('layout');
    });
});
