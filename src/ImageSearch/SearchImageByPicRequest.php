<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class SearchImageByPicRequest extends Model
{
    public $categoryId;
    public $instanceName;
    public $picContent;
    public $crop;
    public $region;
    public $num;
    public $start;
    public $filter;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'instanceName' => 'InstanceName',
        'picContent'   => 'PicContent',
        'crop'         => 'Crop',
        'region'       => 'Region',
        'num'          => 'Num',
        'start'        => 'Start',
        'filter'       => 'Filter',
    ];
    protected $_description = [
        'categoryId'   => 'categoryId',
        'instanceName' => 'instanceName',
        'picContent'   => 'picContent',
        'crop'         => 'crop',
        'region'       => 'region',
        'num'          => 'num',
        'start'        => 'start',
        'filter'       => 'filter',
    ];
    protected $_required = [
        'instanceName' => true,
        'picContent'   => true,
    ];
}
