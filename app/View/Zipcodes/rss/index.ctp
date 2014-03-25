<?php // -*-php-*-
$this->set('channelData', array(
    'title' => __("ZipCodes"),
    'link' => $this->Html->url('/', true),
    'description' => __("Zipcode centerpoints."),
    'language' => 'en-us'
));
?>

<?php
// You should import Sanitize
App::uses('Sanitize', 'Utility');

foreach ($zipcodes as $zipcode)  {

    unset( $zipcode['Zipcode']['generated_html']);

    $city = $zipcode['Zipcode']['city'];
    $zip  = $zipcode['Zipcode']['zip'];
    $link = array(
        'controller' => 'zipcodes',
        'action' => 'view', 
        $zipcode['Zipcode']['zip'] + '.rss'
    );

    echo $this->Rss->item(array(), array(
        'title' => "Zip $city $zip",
        'link'  => $link,
    ));
}
?>