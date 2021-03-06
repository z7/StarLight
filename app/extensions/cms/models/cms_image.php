<?php

/**
 *
 * @property-read CmsNode $CmsNode
 */
class CmsImage extends AppModel {
    
    public $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'filename' => array(
                'dir' => 'files{DS}cms_images',
                'uploadName' => '_uniqid',
        		'maxSize' => 2097152, // 2MB
                'thumbsizes' => array(
                    'normal' => array(
                        'width' => 800,
                        'height' => 800,
//                        'zoomCrop' => 'C',
                    ),
                    'icon' => array(
                        'width' => 100,
                        'height' => 100,
                        'zoomCrop' => 'C',
                    ),
                ),
                'length' => array(
                    'minWidth' => 100, // 0 for not validates
                    //'maxWidth' => 0,
                    'minHeight' => 100,
                    //'maxHeight' => 0
                ),
                'validations' => array(
                    'Empty' => array('check' => true, 'on' => 'create'),
                )
            ),
        ),
        'Translate' => array('title'),
    );

    public $order = array(
        'CmsImage.cms_node_id' => 'ASC',
        'CmsImage.weight' => 'ASC',
    );

    public $belongsTo = array(
        'Cms.CmsNode',
    );

    public $validate = array(
        'href' => array(
            'rule' => 'url',
            'allowEmpty' => true,
        ),
        'weight' => array(
            'rule' => 'numeric',
        ),
    );

}
