<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitoring.proto

namespace MediaCloud\Vendor\Google\Api;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Monitoring configuration of the service.
 * The example below shows how to configure monitored resources and metrics
 * for monitoring. In the example, a monitored resource and two metrics are
 * defined. The `library.googleapis.com/book/returned_count` metric is sent
 * to both producer and consumer projects, whereas the
 * `library.googleapis.com/book/overdue_count` metric is only sent to the
 * consumer project.
 *     monitored_resources:
 *     - type: library.googleapis.com/branch
 *       labels:
 *       - key: /city
 *         description: The city where the library branch is located in.
 *       - key: /name
 *         description: The name of the branch.
 *     metrics:
 *     - name: library.googleapis.com/book/returned_count
 *       metric_kind: DELTA
 *       value_type: INT64
 *       labels:
 *       - key: /customer_id
 *     - name: library.googleapis.com/book/overdue_count
 *       metric_kind: GAUGE
 *       value_type: INT64
 *       labels:
 *       - key: /customer_id
 *     monitoring:
 *       producer_destinations:
 *       - monitored_resource: library.googleapis.com/branch
 *         metrics:
 *         - library.googleapis.com/book/returned_count
 *       consumer_destinations:
 *       - monitored_resource: library.googleapis.com/branch
 *         metrics:
 *         - library.googleapis.com/book/returned_count
 *         - library.googleapis.com/book/overdue_count
 *
 * Generated from protobuf message <code>google.api.Monitoring</code>
 */
class Monitoring extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * Monitoring configurations for sending metrics to the producer project.
     * There can be multiple producer destinations, each one must have a
     * different monitored resource type. A metric can be used in at most
     * one producer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination producer_destinations = 1;</code>
     */
    private $producer_destinations;
    /**
     * Monitoring configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations, each one must have a
     * different monitored resource type. A metric can be used in at most
     * one consumer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination consumer_destinations = 2;</code>
     */
    private $consumer_destinations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Api\Monitoring\MonitoringDestination[]|\Google\Protobuf\Internal\RepeatedField $producer_destinations
     *           Monitoring configurations for sending metrics to the producer project.
     *           There can be multiple producer destinations, each one must have a
     *           different monitored resource type. A metric can be used in at most
     *           one producer destination.
     *     @type \MediaCloud\Vendor\Google\Api\Monitoring\MonitoringDestination[]|\Google\Protobuf\Internal\RepeatedField $consumer_destinations
     *           Monitoring configurations for sending metrics to the consumer project.
     *           There can be multiple consumer destinations, each one must have a
     *           different monitored resource type. A metric can be used in at most
     *           one consumer destination.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Monitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Monitoring configurations for sending metrics to the producer project.
     * There can be multiple producer destinations, each one must have a
     * different monitored resource type. A metric can be used in at most
     * one producer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination producer_destinations = 1;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getProducerDestinations()
    {
        return $this->producer_destinations;
    }

    /**
     * Monitoring configurations for sending metrics to the producer project.
     * There can be multiple producer destinations, each one must have a
     * different monitored resource type. A metric can be used in at most
     * one producer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination producer_destinations = 1;</code>
     * @param \MediaCloud\Vendor\Google\Api\Monitoring\MonitoringDestination[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProducerDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\Monitoring\MonitoringDestination::class);
        $this->producer_destinations = $arr;

        return $this;
    }

    /**
     * Monitoring configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations, each one must have a
     * different monitored resource type. A metric can be used in at most
     * one consumer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination consumer_destinations = 2;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getConsumerDestinations()
    {
        return $this->consumer_destinations;
    }

    /**
     * Monitoring configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations, each one must have a
     * different monitored resource type. A metric can be used in at most
     * one consumer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination consumer_destinations = 2;</code>
     * @param \MediaCloud\Vendor\Google\Api\Monitoring\MonitoringDestination[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsumerDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\Monitoring\MonitoringDestination::class);
        $this->consumer_destinations = $arr;

        return $this;
    }

}

