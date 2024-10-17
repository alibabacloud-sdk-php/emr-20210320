<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta;
use AlibabaCloud\Tea\Model;

class GetClusterCloneMetaResponseBody extends Model
{
    /**
     * @description The metadata of the cluster that you want to clone.
     *
     * @var clusterCloneMeta
     */
    public $clusterCloneMeta;

    /**
     * @description The request ID.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterCloneMeta' => 'ClusterCloneMeta',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCloneMeta) {
            $res['ClusterCloneMeta'] = null !== $this->clusterCloneMeta ? $this->clusterCloneMeta->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterCloneMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCloneMeta'])) {
            $model->clusterCloneMeta = clusterCloneMeta::fromMap($map['ClusterCloneMeta']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
