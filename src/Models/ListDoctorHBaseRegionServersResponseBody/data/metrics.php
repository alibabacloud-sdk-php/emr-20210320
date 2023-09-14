<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\avgGc;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\cacheRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\dailyReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\dailyReadRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\dailyWriteRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\dailyWriteRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\regionCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\totalReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\totalRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics\totalWriteRequest;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var avgGc
     */
    public $avgGc;

    /**
     * @var cacheRatio
     */
    public $cacheRatio;

    /**
     * @var dailyReadRequest
     */
    public $dailyReadRequest;

    /**
     * @var dailyReadRequestDayGrowthRatio
     */
    public $dailyReadRequestDayGrowthRatio;

    /**
     * @var dailyWriteRequest
     */
    public $dailyWriteRequest;

    /**
     * @var dailyWriteRequestDayGrowthRatio
     */
    public $dailyWriteRequestDayGrowthRatio;

    /**
     * @var regionCount
     */
    public $regionCount;

    /**
     * @var totalReadRequest
     */
    public $totalReadRequest;

    /**
     * @var totalRequest
     */
    public $totalRequest;

    /**
     * @var totalWriteRequest
     */
    public $totalWriteRequest;
    protected $_name = [
        'avgGc'                           => 'AvgGc',
        'cacheRatio'                      => 'CacheRatio',
        'dailyReadRequest'                => 'DailyReadRequest',
        'dailyReadRequestDayGrowthRatio'  => 'DailyReadRequestDayGrowthRatio',
        'dailyWriteRequest'               => 'DailyWriteRequest',
        'dailyWriteRequestDayGrowthRatio' => 'DailyWriteRequestDayGrowthRatio',
        'regionCount'                     => 'RegionCount',
        'totalReadRequest'                => 'TotalReadRequest',
        'totalRequest'                    => 'TotalRequest',
        'totalWriteRequest'               => 'TotalWriteRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgGc) {
            $res['AvgGc'] = null !== $this->avgGc ? $this->avgGc->toMap() : null;
        }
        if (null !== $this->cacheRatio) {
            $res['CacheRatio'] = null !== $this->cacheRatio ? $this->cacheRatio->toMap() : null;
        }
        if (null !== $this->dailyReadRequest) {
            $res['DailyReadRequest'] = null !== $this->dailyReadRequest ? $this->dailyReadRequest->toMap() : null;
        }
        if (null !== $this->dailyReadRequestDayGrowthRatio) {
            $res['DailyReadRequestDayGrowthRatio'] = null !== $this->dailyReadRequestDayGrowthRatio ? $this->dailyReadRequestDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->dailyWriteRequest) {
            $res['DailyWriteRequest'] = null !== $this->dailyWriteRequest ? $this->dailyWriteRequest->toMap() : null;
        }
        if (null !== $this->dailyWriteRequestDayGrowthRatio) {
            $res['DailyWriteRequestDayGrowthRatio'] = null !== $this->dailyWriteRequestDayGrowthRatio ? $this->dailyWriteRequestDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->regionCount) {
            $res['RegionCount'] = null !== $this->regionCount ? $this->regionCount->toMap() : null;
        }
        if (null !== $this->totalReadRequest) {
            $res['TotalReadRequest'] = null !== $this->totalReadRequest ? $this->totalReadRequest->toMap() : null;
        }
        if (null !== $this->totalRequest) {
            $res['TotalRequest'] = null !== $this->totalRequest ? $this->totalRequest->toMap() : null;
        }
        if (null !== $this->totalWriteRequest) {
            $res['TotalWriteRequest'] = null !== $this->totalWriteRequest ? $this->totalWriteRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgGc'])) {
            $model->avgGc = avgGc::fromMap($map['AvgGc']);
        }
        if (isset($map['CacheRatio'])) {
            $model->cacheRatio = cacheRatio::fromMap($map['CacheRatio']);
        }
        if (isset($map['DailyReadRequest'])) {
            $model->dailyReadRequest = dailyReadRequest::fromMap($map['DailyReadRequest']);
        }
        if (isset($map['DailyReadRequestDayGrowthRatio'])) {
            $model->dailyReadRequestDayGrowthRatio = dailyReadRequestDayGrowthRatio::fromMap($map['DailyReadRequestDayGrowthRatio']);
        }
        if (isset($map['DailyWriteRequest'])) {
            $model->dailyWriteRequest = dailyWriteRequest::fromMap($map['DailyWriteRequest']);
        }
        if (isset($map['DailyWriteRequestDayGrowthRatio'])) {
            $model->dailyWriteRequestDayGrowthRatio = dailyWriteRequestDayGrowthRatio::fromMap($map['DailyWriteRequestDayGrowthRatio']);
        }
        if (isset($map['RegionCount'])) {
            $model->regionCount = regionCount::fromMap($map['RegionCount']);
        }
        if (isset($map['TotalReadRequest'])) {
            $model->totalReadRequest = totalReadRequest::fromMap($map['TotalReadRequest']);
        }
        if (isset($map['TotalRequest'])) {
            $model->totalRequest = totalRequest::fromMap($map['TotalRequest']);
        }
        if (isset($map['TotalWriteRequest'])) {
            $model->totalWriteRequest = totalWriteRequest::fromMap($map['TotalWriteRequest']);
        }

        return $model;
    }
}
