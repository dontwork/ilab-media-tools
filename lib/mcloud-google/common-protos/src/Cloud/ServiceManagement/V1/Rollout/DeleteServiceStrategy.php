<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace MediaCloud\Vendor\Google\Cloud\ServiceManagement\V1\Rollout;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Strategy used to delete a service. This strategy is a placeholder only
 * used by the system generated rollout to delete a service.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.Rollout.DeleteServiceStrategy</code>
 */
class DeleteServiceStrategy extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeleteServiceStrategy::class, \MediaCloud\Vendor\Google\Cloud\ServiceManagement\V1\Rollout_DeleteServiceStrategy::class);

