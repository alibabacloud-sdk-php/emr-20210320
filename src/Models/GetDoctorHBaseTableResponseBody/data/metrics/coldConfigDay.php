<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics;

use AlibabaCloud\Tea\Model;

class coldConfigDay extends Model
{
    /**
     * @example Cold config day
     *
     * @var string
     */
    public $description;

    /**
     * @example coldConfigDay
     *
     * @var string
     */
    public $name;

    /**
     * @example day
     *
     * @var string
     */
    public $unit;

    /**
     * @example 10
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'unit'        => 'Unit',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coldConfigDay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
