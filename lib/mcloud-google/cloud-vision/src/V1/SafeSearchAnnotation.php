<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace MediaCloud\Vendor\Google\Cloud\Vision\V1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Set of features pertaining to the image, computed by computer vision
 * methods over safe-search verticals (for example, adult, spoof, medical,
 * violence).
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.SafeSearchAnnotation</code>
 */
class SafeSearchAnnotation extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * Represents the adult content likelihood for the image. Adult content may
     * contain elements such as nudity, pornographic images or cartoons, or
     * sexual activities.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood adult = 1;</code>
     */
    private $adult = 0;
    /**
     * Spoof likelihood. The likelihood that an modification
     * was made to the image's canonical version to make it appear
     * funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood spoof = 2;</code>
     */
    private $spoof = 0;
    /**
     * Likelihood that this is a medical image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood medical = 3;</code>
     */
    private $medical = 0;
    /**
     * Likelihood that this image contains violent content.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood violence = 4;</code>
     */
    private $violence = 0;
    /**
     * Likelihood that the request image contains racy content. Racy content may
     * include (but is not limited to) skimpy or sheer clothing, strategically
     * covered nudity, lewd or provocative poses, or close-ups of sensitive
     * body areas.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood racy = 9;</code>
     */
    private $racy = 0;
    /**
     * Confidence of adult_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float adult_confidence = 16;</code>
     */
    private $adult_confidence = 0.0;
    /**
     * Confidence of spoof_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float spoof_confidence = 18;</code>
     */
    private $spoof_confidence = 0.0;
    /**
     * Confidence of medical_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float medical_confidence = 20;</code>
     */
    private $medical_confidence = 0.0;
    /**
     * Confidence of violence_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float violence_confidence = 22;</code>
     */
    private $violence_confidence = 0.0;
    /**
     * Confidence of racy_score. Range [0, 1]. 0 means not confident, 1 means very
     * confident.
     *
     * Generated from protobuf field <code>float racy_confidence = 24;</code>
     */
    private $racy_confidence = 0.0;
    /**
     * Confidence of nsfw_score. Range [0, 1]. 0 means not confident, 1 means very
     * confident.
     *
     * Generated from protobuf field <code>float nsfw_confidence = 26;</code>
     */
    private $nsfw_confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $adult
     *           Represents the adult content likelihood for the image. Adult content may
     *           contain elements such as nudity, pornographic images or cartoons, or
     *           sexual activities.
     *     @type int $spoof
     *           Spoof likelihood. The likelihood that an modification
     *           was made to the image's canonical version to make it appear
     *           funny or offensive.
     *     @type int $medical
     *           Likelihood that this is a medical image.
     *     @type int $violence
     *           Likelihood that this image contains violent content.
     *     @type int $racy
     *           Likelihood that the request image contains racy content. Racy content may
     *           include (but is not limited to) skimpy or sheer clothing, strategically
     *           covered nudity, lewd or provocative poses, or close-ups of sensitive
     *           body areas.
     *     @type float $adult_confidence
     *           Confidence of adult_score. Range [0, 1]. 0 means not confident, 1 means
     *           very confident.
     *     @type float $spoof_confidence
     *           Confidence of spoof_score. Range [0, 1]. 0 means not confident, 1 means
     *           very confident.
     *     @type float $medical_confidence
     *           Confidence of medical_score. Range [0, 1]. 0 means not confident, 1 means
     *           very confident.
     *     @type float $violence_confidence
     *           Confidence of violence_score. Range [0, 1]. 0 means not confident, 1 means
     *           very confident.
     *     @type float $racy_confidence
     *           Confidence of racy_score. Range [0, 1]. 0 means not confident, 1 means very
     *           confident.
     *     @type float $nsfw_confidence
     *           Confidence of nsfw_score. Range [0, 1]. 0 means not confident, 1 means very
     *           confident.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the adult content likelihood for the image. Adult content may
     * contain elements such as nudity, pornographic images or cartoons, or
     * sexual activities.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood adult = 1;</code>
     * @return int
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Represents the adult content likelihood for the image. Adult content may
     * contain elements such as nudity, pornographic images or cartoons, or
     * sexual activities.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood adult = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAdult($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\Likelihood::class);
        $this->adult = $var;

        return $this;
    }

    /**
     * Spoof likelihood. The likelihood that an modification
     * was made to the image's canonical version to make it appear
     * funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood spoof = 2;</code>
     * @return int
     */
    public function getSpoof()
    {
        return $this->spoof;
    }

    /**
     * Spoof likelihood. The likelihood that an modification
     * was made to the image's canonical version to make it appear
     * funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood spoof = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSpoof($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\Likelihood::class);
        $this->spoof = $var;

        return $this;
    }

    /**
     * Likelihood that this is a medical image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood medical = 3;</code>
     * @return int
     */
    public function getMedical()
    {
        return $this->medical;
    }

    /**
     * Likelihood that this is a medical image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood medical = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMedical($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\Likelihood::class);
        $this->medical = $var;

        return $this;
    }

    /**
     * Likelihood that this image contains violent content.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood violence = 4;</code>
     * @return int
     */
    public function getViolence()
    {
        return $this->violence;
    }

    /**
     * Likelihood that this image contains violent content.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood violence = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setViolence($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\Likelihood::class);
        $this->violence = $var;

        return $this;
    }

    /**
     * Likelihood that the request image contains racy content. Racy content may
     * include (but is not limited to) skimpy or sheer clothing, strategically
     * covered nudity, lewd or provocative poses, or close-ups of sensitive
     * body areas.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood racy = 9;</code>
     * @return int
     */
    public function getRacy()
    {
        return $this->racy;
    }

    /**
     * Likelihood that the request image contains racy content. Racy content may
     * include (but is not limited to) skimpy or sheer clothing, strategically
     * covered nudity, lewd or provocative poses, or close-ups of sensitive
     * body areas.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood racy = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRacy($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\Likelihood::class);
        $this->racy = $var;

        return $this;
    }

    /**
     * Confidence of adult_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float adult_confidence = 16;</code>
     * @return float
     */
    public function getAdultConfidence()
    {
        return $this->adult_confidence;
    }

    /**
     * Confidence of adult_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float adult_confidence = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setAdultConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->adult_confidence = $var;

        return $this;
    }

    /**
     * Confidence of spoof_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float spoof_confidence = 18;</code>
     * @return float
     */
    public function getSpoofConfidence()
    {
        return $this->spoof_confidence;
    }

    /**
     * Confidence of spoof_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float spoof_confidence = 18;</code>
     * @param float $var
     * @return $this
     */
    public function setSpoofConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->spoof_confidence = $var;

        return $this;
    }

    /**
     * Confidence of medical_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float medical_confidence = 20;</code>
     * @return float
     */
    public function getMedicalConfidence()
    {
        return $this->medical_confidence;
    }

    /**
     * Confidence of medical_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float medical_confidence = 20;</code>
     * @param float $var
     * @return $this
     */
    public function setMedicalConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->medical_confidence = $var;

        return $this;
    }

    /**
     * Confidence of violence_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float violence_confidence = 22;</code>
     * @return float
     */
    public function getViolenceConfidence()
    {
        return $this->violence_confidence;
    }

    /**
     * Confidence of violence_score. Range [0, 1]. 0 means not confident, 1 means
     * very confident.
     *
     * Generated from protobuf field <code>float violence_confidence = 22;</code>
     * @param float $var
     * @return $this
     */
    public function setViolenceConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->violence_confidence = $var;

        return $this;
    }

    /**
     * Confidence of racy_score. Range [0, 1]. 0 means not confident, 1 means very
     * confident.
     *
     * Generated from protobuf field <code>float racy_confidence = 24;</code>
     * @return float
     */
    public function getRacyConfidence()
    {
        return $this->racy_confidence;
    }

    /**
     * Confidence of racy_score. Range [0, 1]. 0 means not confident, 1 means very
     * confident.
     *
     * Generated from protobuf field <code>float racy_confidence = 24;</code>
     * @param float $var
     * @return $this
     */
    public function setRacyConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->racy_confidence = $var;

        return $this;
    }

    /**
     * Confidence of nsfw_score. Range [0, 1]. 0 means not confident, 1 means very
     * confident.
     *
     * Generated from protobuf field <code>float nsfw_confidence = 26;</code>
     * @return float
     */
    public function getNsfwConfidence()
    {
        return $this->nsfw_confidence;
    }

    /**
     * Confidence of nsfw_score. Range [0, 1]. 0 means not confident, 1 means very
     * confident.
     *
     * Generated from protobuf field <code>float nsfw_confidence = 26;</code>
     * @param float $var
     * @return $this
     */
    public function setNsfwConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->nsfw_confidence = $var;

        return $this;
    }

}

