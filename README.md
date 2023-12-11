# Custom-Business-Listing-ACF-Frontend
Custom Business Listing using ACF Frontend

Usage:
Download the zip file
Move the folders profile-assets & ultimate-member into the root folder of your Template.
Include both assets to your template header (profile-assets folder contains the google map js as well)
Inside functions.php add the following to make your Google Map work if you require an API (Get a key from: https://console.cloud.google.com):
function my_acf_google_map_api( $api ){
    $api['key'] = 'API-KEY';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
