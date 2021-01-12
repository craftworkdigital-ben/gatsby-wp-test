<?php
/**
 * Register new image sizes.
 *
 * @author Craftwork Digital
 */

// Quality
add_filter('jpeg_quality', function($arg) {
    return 85;
});

// Rectangles
add_image_size('rect_735x480', 735, 480, true);
add_image_size('rect_745x420', 745, 420, true);
add_image_size('rect_670x442', 670, 442, true);
add_image_size('rect_585x330', 585, 330, true);
add_image_size('rect_585x200', 585, 200, true);
add_image_size('rect_428x285', 428, 285, true);

// Square
add_image_size('square_600x600', 600, 600, true);
add_image_size('square_400x400', 400, 400, true);
add_image_size('square_300x300', 300, 300, true);
add_image_size('square_250x250', 250, 250, true);
add_image_size('square_65x65', 65, 65, true);
