<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/conformance_service.proto

namespace MediaCloud\Vendor\Google\Api\Expr\V1alpha1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the Check method.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.CheckResponse</code>
 */
class CheckResponse extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The annotated representation, or unset if checking failed.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.CheckedExpr checked_expr = 1;</code>
     */
    private $checked_expr = null;
    /**
     * Any number of issues with [StatusDetails][] as the details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status issues = 2;</code>
     */
    private $issues;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\CheckedExpr $checked_expr
     *           The annotated representation, or unset if checking failed.
     *     @type \MediaCloud\Vendor\Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $issues
     *           Any number of issues with [StatusDetails][] as the details.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Alpha1\ConformanceService::initOnce();
        parent::__construct($data);
    }

    /**
     * The annotated representation, or unset if checking failed.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.CheckedExpr checked_expr = 1;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\CheckedExpr
     */
    public function getCheckedExpr()
    {
        return $this->checked_expr;
    }

    /**
     * The annotated representation, or unset if checking failed.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.CheckedExpr checked_expr = 1;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\CheckedExpr $var
     * @return $this
     */
    public function setCheckedExpr($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\CheckedExpr::class);
        $this->checked_expr = $var;

        return $this;
    }

    /**
     * Any number of issues with [StatusDetails][] as the details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status issues = 2;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Any number of issues with [StatusDetails][] as the details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status issues = 2;</code>
     * @param \MediaCloud\Vendor\Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIssues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Rpc\Status::class);
        $this->issues = $arr;

        return $this;
    }

}

