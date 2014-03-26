<?php // -*-php-*-

$this->Paginator->options(
    array(
        'update' => '#content',
        'evalScripts' => true
    )
);

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
//debug($this);

$attributes = array(
			'namespace' => array(
				'prefix' => 'georss',
				'url' => 'http://www.georss.org/georss'

            ///$this->Rss->setNamespace("georss", );
			)
		);

foreach ($zipcodes as $zipcode)  {

    unset( $zipcode['Zipcode']['generated_html']);

    $city = $zipcode['Zipcode']['city'];
    $zip  = $zipcode['Zipcode']['zip'];
    $link = array(
        'controller' => 'zipcodes',
        'action' => 'view', 
        $zipcode['Zipcode']['zip'] + '.rss'
    );

    $lat = $zipcode['Zipcode']['latitude'];
    $lon = $zipcode['Zipcode']['longitude'];

        // 
    echo $this->Rss->item(
        $attributes, 
        array(
            'title' => "Zip $city $zip",
            'link'  => $link,
            'georss:point' =>  "$lat $lon",
        ));
}

echo $this->Js->writeBuffer();
?>