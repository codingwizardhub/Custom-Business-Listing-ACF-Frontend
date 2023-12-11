# Custom-Business-Listing-ACF-Frontend
Custom Business Listing using ACF Frontend

Usage:
1. Download the zip file<br/>
2. Move the folders profile-assets & ultimate-member into the root folder of your Template.<br/>
3. Include both assets to your template header (profile-assets folder contains the google map js as well)<br/>
4. Inside functions.php add the following to make your Google Map work if you require an API (Get a key from: https://console.cloud.google.com):<br/>
function my_acf_google_map_api( $api ){<br/>
    $api['key'] = 'API-KEY';<br/>
    return $api;<br/>
}<br/>
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');<br/>
5. Import the Frontend-ACF.json file into Frontend ACF (download frontend acf here: https://wordpress.org/plugins/acf-frontend-form-element/)
