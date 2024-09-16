<?php

    use Cloudinary\Transformation\Effect;
    use Cloudinary\Transformation\Resize;
    use Cloudinary\Transformation\Rotate;
    use Cloudinary\Transformation\Argument\Color;
    use Cloudinary\Transformation\RoundCorners;
    use Cloudinary\Transformation\Border;
    use Illuminate\Support\Str;


    $defaultFormatMethod = 'scale';
    $retrieveFormattedVideo = cloudinary()->getVideoTag($publicId ?? '')
                                    ->setAttributes(['controls', 'loop', 'preload'])
                                    ->fallback('Your browser does not support HTML5 video tagsssss.')
                                    ->$defaultFormatMethod($width ?? '', $height ?? '');
?>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/vendor/cloudinary-labs/cloudinary-laravel/resources/views/components/video.blade.php ENDPATH**/ ?>