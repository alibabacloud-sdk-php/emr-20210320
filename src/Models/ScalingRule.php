<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ScalingRule extends Model
{
    /**
     * @var string
     */
    public $activityType;
    /**
     * @var int
     */
    public $adjustmentValue;
    /**
     * @var MetricsTrigger
     */
    public $metricsTrigger;
    /**
     * @var int
     */
    public $minAdjustmentValue;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var TimeTrigger
     */
    public $timeTrigger;
    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'activityType'       => 'ActivityType',
        'adjustmentValue'    => 'AdjustmentValue',
        'metricsTrigger'     => 'MetricsTrigger',
        'minAdjustmentValue' => 'MinAdjustmentValue',
        'ruleName'           => 'RuleName',
        'timeTrigger'        => 'TimeTrigger',
        'triggerType'        => 'TriggerType',
    ];

    public function validate()
    {
        if (null !== $this->metricsTrigger) {
            $this->metricsTrigger->validate();
        }
        if (null !== $this->timeTrigger) {
            $this->timeTrigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }

        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }

        if (null !== $this->metricsTrigger) {
            $res['MetricsTrigger'] = null !== $this->metricsTrigger ? $this->metricsTrigger->toArray($noStream) : $this->metricsTrigger;
        }

        if (null !== $this->minAdjustmentValue) {
            $res['MinAdjustmentValue'] = $this->minAdjustmentValue;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->timeTrigger) {
            $res['TimeTrigger'] = null !== $this->timeTrigger ? $this->timeTrigger->toArray($noStream) : $this->timeTrigger;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
        }

        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }

        if (isset($map['MetricsTrigger'])) {
            $model->metricsTrigger = MetricsTrigger::fromMap($map['MetricsTrigger']);
        }

        if (isset($map['MinAdjustmentValue'])) {
            $model->minAdjustmentValue = $map['MinAdjustmentValue'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['TimeTrigger'])) {
            $model->timeTrigger = TimeTrigger::fromMap($map['TimeTrigger']);
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
