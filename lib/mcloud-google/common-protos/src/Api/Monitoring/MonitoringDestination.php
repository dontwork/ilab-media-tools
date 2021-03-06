<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitoring.proto

namespace MediaCloud\Vendor\Google\Api\Monitoring;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of a specific monitoring destination (the producer project
 * or the consumer project).
 *
 * Generated from protobuf message <code>google.api.Monitoring.MonitoringDestination</code>
 */
class MonitoringDestination extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     */
    private $monitored_resource = '';
    /**
     * Names of the metrics to report to this monitoring destination.
     * Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     */
    private $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $monitored_resource
     *           The monitored resource type. The type must be defined in
     *           [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Names of the metrics to report to this monitoring destination.
     *           Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Monitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @return string
     */
    public function getMonitoredResource()
    {
        return $this->monitored_resource;
    }

    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources] section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMonitoredResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->monitored_resource = $var;

        return $this;
    }

    /**
     * Names of the metrics to report to this monitoring destination.
     * Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Names of the metrics to report to this monitoring destination.
     * Each name must be defined in [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::STRING);
        $this->metrics = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MonitoringDestination::class, \MediaCloud\Vendor\Google\Api\Monitoring_MonitoringDestination::class);

