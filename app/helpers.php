<?php
use App\Helpers\ImageKitHelper;

/**
 * Generate a slug from a given string.
 *
 * @param string $string
 * @return string
 */
function generateSlug($string)
{
    // Replace non-alphanumeric characters with a hyphen
    $slug = preg_replace('/[^a-zA-Z0-9\s]+/', '-', $string);

    // Replace multiple spaces with a single space
    $slug = preg_replace('/\s+/', ' ', $slug);

    // Trim leading/trailing spaces and convert to lowercase
    $slug = strtolower(trim($slug));

    // Replace consecutive letters with a single letter
    $slug = preg_replace('/([a-z])(\1+)/', '$1', $slug);

    // Replace consecutive digits with a single digit
    $slug = preg_replace('/(\d)(\d+)/', '$1', $slug);

    // Replace spaces with hyphens
    $slug = str_replace(' ', '-', $slug);

    return $slug;
}

function storeImage($requestOrImage, string|bool $inputAttribute = false, array $options = [])
{

    return ImageKitHelper::storeImage($requestOrImage, $inputAttribute, $options);
}

function deleteImage(string $url){

    return ImageKitHelper::delete($url);
}