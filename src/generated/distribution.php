<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/api/distribution.proto
//   Date: 2016-11-23 22:55:02

namespace google\api\Distribution {

  class Range extends \DrSlump\Protobuf\Message {

    /**  @var float */
    public $min = null;
    
    /**  @var float */
    public $max = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Distribution.Range');

      // OPTIONAL DOUBLE min = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "min";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE max = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "max";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <min> has a value
     *
     * @return boolean
     */
    public function hasMin(){
      return $this->_has(1);
    }
    
    /**
     * Clear <min> value
     *
     * @return \google\api\Distribution\Range
     */
    public function clearMin(){
      return $this->_clear(1);
    }
    
    /**
     * Get <min> value
     *
     * @return float
     */
    public function getMin(){
      return $this->_get(1);
    }
    
    /**
     * Set <min> value
     *
     * @param float $value
     * @return \google\api\Distribution\Range
     */
    public function setMin( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <max> has a value
     *
     * @return boolean
     */
    public function hasMax(){
      return $this->_has(2);
    }
    
    /**
     * Clear <max> value
     *
     * @return \google\api\Distribution\Range
     */
    public function clearMax(){
      return $this->_clear(2);
    }
    
    /**
     * Get <max> value
     *
     * @return float
     */
    public function getMax(){
      return $this->_get(2);
    }
    
    /**
     * Set <max> value
     *
     * @param float $value
     * @return \google\api\Distribution\Range
     */
    public function setMax( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\api\Distribution\BucketOptions {

  class Linear extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $num_finite_buckets = null;
    
    /**  @var float */
    public $width = null;
    
    /**  @var float */
    public $offset = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Distribution.BucketOptions.Linear');

      // OPTIONAL INT32 num_finite_buckets = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "num_finite_buckets";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE width = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "width";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE offset = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "offset";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <num_finite_buckets> has a value
     *
     * @return boolean
     */
    public function hasNumFiniteBuckets(){
      return $this->_has(1);
    }
    
    /**
     * Clear <num_finite_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions\Linear
     */
    public function clearNumFiniteBuckets(){
      return $this->_clear(1);
    }
    
    /**
     * Get <num_finite_buckets> value
     *
     * @return int
     */
    public function getNumFiniteBuckets(){
      return $this->_get(1);
    }
    
    /**
     * Set <num_finite_buckets> value
     *
     * @param int $value
     * @return \google\api\Distribution\BucketOptions\Linear
     */
    public function setNumFiniteBuckets( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <width> has a value
     *
     * @return boolean
     */
    public function hasWidth(){
      return $this->_has(2);
    }
    
    /**
     * Clear <width> value
     *
     * @return \google\api\Distribution\BucketOptions\Linear
     */
    public function clearWidth(){
      return $this->_clear(2);
    }
    
    /**
     * Get <width> value
     *
     * @return float
     */
    public function getWidth(){
      return $this->_get(2);
    }
    
    /**
     * Set <width> value
     *
     * @param float $value
     * @return \google\api\Distribution\BucketOptions\Linear
     */
    public function setWidth( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <offset> has a value
     *
     * @return boolean
     */
    public function hasOffset(){
      return $this->_has(3);
    }
    
    /**
     * Clear <offset> value
     *
     * @return \google\api\Distribution\BucketOptions\Linear
     */
    public function clearOffset(){
      return $this->_clear(3);
    }
    
    /**
     * Get <offset> value
     *
     * @return float
     */
    public function getOffset(){
      return $this->_get(3);
    }
    
    /**
     * Set <offset> value
     *
     * @param float $value
     * @return \google\api\Distribution\BucketOptions\Linear
     */
    public function setOffset( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\api\Distribution\BucketOptions {

  class Exponential extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $num_finite_buckets = null;
    
    /**  @var float */
    public $growth_factor = null;
    
    /**  @var float */
    public $scale = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Distribution.BucketOptions.Exponential');

      // OPTIONAL INT32 num_finite_buckets = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "num_finite_buckets";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE growth_factor = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "growth_factor";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE scale = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "scale";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <num_finite_buckets> has a value
     *
     * @return boolean
     */
    public function hasNumFiniteBuckets(){
      return $this->_has(1);
    }
    
    /**
     * Clear <num_finite_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions\Exponential
     */
    public function clearNumFiniteBuckets(){
      return $this->_clear(1);
    }
    
    /**
     * Get <num_finite_buckets> value
     *
     * @return int
     */
    public function getNumFiniteBuckets(){
      return $this->_get(1);
    }
    
    /**
     * Set <num_finite_buckets> value
     *
     * @param int $value
     * @return \google\api\Distribution\BucketOptions\Exponential
     */
    public function setNumFiniteBuckets( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <growth_factor> has a value
     *
     * @return boolean
     */
    public function hasGrowthFactor(){
      return $this->_has(2);
    }
    
    /**
     * Clear <growth_factor> value
     *
     * @return \google\api\Distribution\BucketOptions\Exponential
     */
    public function clearGrowthFactor(){
      return $this->_clear(2);
    }
    
    /**
     * Get <growth_factor> value
     *
     * @return float
     */
    public function getGrowthFactor(){
      return $this->_get(2);
    }
    
    /**
     * Set <growth_factor> value
     *
     * @param float $value
     * @return \google\api\Distribution\BucketOptions\Exponential
     */
    public function setGrowthFactor( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <scale> has a value
     *
     * @return boolean
     */
    public function hasScale(){
      return $this->_has(3);
    }
    
    /**
     * Clear <scale> value
     *
     * @return \google\api\Distribution\BucketOptions\Exponential
     */
    public function clearScale(){
      return $this->_clear(3);
    }
    
    /**
     * Get <scale> value
     *
     * @return float
     */
    public function getScale(){
      return $this->_get(3);
    }
    
    /**
     * Set <scale> value
     *
     * @param float $value
     * @return \google\api\Distribution\BucketOptions\Exponential
     */
    public function setScale( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\api\Distribution\BucketOptions {

  class Explicit extends \DrSlump\Protobuf\Message {

    /**  @var float[]  */
    public $bounds = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Distribution.BucketOptions.Explicit');

      // REPEATED DOUBLE bounds = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "bounds";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <bounds> has a value
     *
     * @return boolean
     */
    public function hasBounds(){
      return $this->_has(1);
    }
    
    /**
     * Clear <bounds> value
     *
     * @return \google\api\Distribution\BucketOptions\Explicit
     */
    public function clearBounds(){
      return $this->_clear(1);
    }
    
    /**
     * Get <bounds> value
     *
     * @param int $idx
     * @return float
     */
    public function getBounds($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <bounds> value
     *
     * @param float $value
     * @return \google\api\Distribution\BucketOptions\Explicit
     */
    public function setBounds( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <bounds>
     *
     * @return float[]
     */
    public function getBoundsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <bounds>
     *
     * @param float $value
     * @return \google\api\Distribution\BucketOptions\Explicit
     */
    public function addBounds( $value){
     return $this->_add(1, $value);
    }
  }
}

namespace google\api\Distribution {

  class BucketOptions extends \DrSlump\Protobuf\Message {

    /**  @var \google\api\Distribution\BucketOptions\Linear */
    public $linear_buckets = null;
    
    /**  @var \google\api\Distribution\BucketOptions\Exponential */
    public $exponential_buckets = null;
    
    /**  @var \google\api\Distribution\BucketOptions\Explicit */
    public $explicit_buckets = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Distribution.BucketOptions');

      // OPTIONAL MESSAGE linear_buckets = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "linear_buckets";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\api\Distribution\BucketOptions\Linear';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE exponential_buckets = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "exponential_buckets";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\api\Distribution\BucketOptions\Exponential';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE explicit_buckets = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "explicit_buckets";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\api\Distribution\BucketOptions\Explicit';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <linear_buckets> has a value
     *
     * @return boolean
     */
    public function hasLinearBuckets(){
      return $this->_has(1);
    }
    
    /**
     * Clear <linear_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions
     */
    public function clearLinearBuckets(){
      return $this->_clear(1);
    }
    
    /**
     * Get <linear_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions\Linear
     */
    public function getLinearBuckets(){
      return $this->_get(1);
    }
    
    /**
     * Set <linear_buckets> value
     *
     * @param \google\api\Distribution\BucketOptions\Linear $value
     * @return \google\api\Distribution\BucketOptions
     */
    public function setLinearBuckets(\google\api\Distribution\BucketOptions\Linear $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <exponential_buckets> has a value
     *
     * @return boolean
     */
    public function hasExponentialBuckets(){
      return $this->_has(2);
    }
    
    /**
     * Clear <exponential_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions
     */
    public function clearExponentialBuckets(){
      return $this->_clear(2);
    }
    
    /**
     * Get <exponential_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions\Exponential
     */
    public function getExponentialBuckets(){
      return $this->_get(2);
    }
    
    /**
     * Set <exponential_buckets> value
     *
     * @param \google\api\Distribution\BucketOptions\Exponential $value
     * @return \google\api\Distribution\BucketOptions
     */
    public function setExponentialBuckets(\google\api\Distribution\BucketOptions\Exponential $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <explicit_buckets> has a value
     *
     * @return boolean
     */
    public function hasExplicitBuckets(){
      return $this->_has(3);
    }
    
    /**
     * Clear <explicit_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions
     */
    public function clearExplicitBuckets(){
      return $this->_clear(3);
    }
    
    /**
     * Get <explicit_buckets> value
     *
     * @return \google\api\Distribution\BucketOptions\Explicit
     */
    public function getExplicitBuckets(){
      return $this->_get(3);
    }
    
    /**
     * Set <explicit_buckets> value
     *
     * @param \google\api\Distribution\BucketOptions\Explicit $value
     * @return \google\api\Distribution\BucketOptions
     */
    public function setExplicitBuckets(\google\api\Distribution\BucketOptions\Explicit $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\api {

  class Distribution extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $count = null;
    
    /**  @var float */
    public $mean = null;
    
    /**  @var float */
    public $sum_of_squared_deviation = null;
    
    /**  @var \google\api\Distribution\Range */
    public $range = null;
    
    /**  @var \google\api\Distribution\BucketOptions */
    public $bucket_options = null;
    
    /**  @var int[]  */
    public $bucket_counts = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Distribution');

      // OPTIONAL INT64 count = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "count";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE mean = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "mean";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL DOUBLE sum_of_squared_deviation = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "sum_of_squared_deviation";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE range = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "range";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\api\Distribution\Range';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bucket_options = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "bucket_options";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\api\Distribution\BucketOptions';
      $descriptor->addField($f);

      // REPEATED INT64 bucket_counts = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "bucket_counts";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <count> has a value
     *
     * @return boolean
     */
    public function hasCount(){
      return $this->_has(1);
    }
    
    /**
     * Clear <count> value
     *
     * @return \google\api\Distribution
     */
    public function clearCount(){
      return $this->_clear(1);
    }
    
    /**
     * Get <count> value
     *
     * @return int
     */
    public function getCount(){
      return $this->_get(1);
    }
    
    /**
     * Set <count> value
     *
     * @param int $value
     * @return \google\api\Distribution
     */
    public function setCount( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <mean> has a value
     *
     * @return boolean
     */
    public function hasMean(){
      return $this->_has(2);
    }
    
    /**
     * Clear <mean> value
     *
     * @return \google\api\Distribution
     */
    public function clearMean(){
      return $this->_clear(2);
    }
    
    /**
     * Get <mean> value
     *
     * @return float
     */
    public function getMean(){
      return $this->_get(2);
    }
    
    /**
     * Set <mean> value
     *
     * @param float $value
     * @return \google\api\Distribution
     */
    public function setMean( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <sum_of_squared_deviation> has a value
     *
     * @return boolean
     */
    public function hasSumOfSquaredDeviation(){
      return $this->_has(3);
    }
    
    /**
     * Clear <sum_of_squared_deviation> value
     *
     * @return \google\api\Distribution
     */
    public function clearSumOfSquaredDeviation(){
      return $this->_clear(3);
    }
    
    /**
     * Get <sum_of_squared_deviation> value
     *
     * @return float
     */
    public function getSumOfSquaredDeviation(){
      return $this->_get(3);
    }
    
    /**
     * Set <sum_of_squared_deviation> value
     *
     * @param float $value
     * @return \google\api\Distribution
     */
    public function setSumOfSquaredDeviation( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <range> has a value
     *
     * @return boolean
     */
    public function hasRange(){
      return $this->_has(4);
    }
    
    /**
     * Clear <range> value
     *
     * @return \google\api\Distribution
     */
    public function clearRange(){
      return $this->_clear(4);
    }
    
    /**
     * Get <range> value
     *
     * @return \google\api\Distribution\Range
     */
    public function getRange(){
      return $this->_get(4);
    }
    
    /**
     * Set <range> value
     *
     * @param \google\api\Distribution\Range $value
     * @return \google\api\Distribution
     */
    public function setRange(\google\api\Distribution\Range $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <bucket_options> has a value
     *
     * @return boolean
     */
    public function hasBucketOptions(){
      return $this->_has(6);
    }
    
    /**
     * Clear <bucket_options> value
     *
     * @return \google\api\Distribution
     */
    public function clearBucketOptions(){
      return $this->_clear(6);
    }
    
    /**
     * Get <bucket_options> value
     *
     * @return \google\api\Distribution\BucketOptions
     */
    public function getBucketOptions(){
      return $this->_get(6);
    }
    
    /**
     * Set <bucket_options> value
     *
     * @param \google\api\Distribution\BucketOptions $value
     * @return \google\api\Distribution
     */
    public function setBucketOptions(\google\api\Distribution\BucketOptions $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <bucket_counts> has a value
     *
     * @return boolean
     */
    public function hasBucketCounts(){
      return $this->_has(7);
    }
    
    /**
     * Clear <bucket_counts> value
     *
     * @return \google\api\Distribution
     */
    public function clearBucketCounts(){
      return $this->_clear(7);
    }
    
    /**
     * Get <bucket_counts> value
     *
     * @param int $idx
     * @return int
     */
    public function getBucketCounts($idx = NULL){
      return $this->_get(7, $idx);
    }
    
    /**
     * Set <bucket_counts> value
     *
     * @param int $value
     * @return \google\api\Distribution
     */
    public function setBucketCounts( $value, $idx = NULL){
      return $this->_set(7, $value, $idx);
    }
    
    /**
     * Get all elements of <bucket_counts>
     *
     * @return int[]
     */
    public function getBucketCountsList(){
     return $this->_get(7);
    }
    
    /**
     * Add a new element to <bucket_counts>
     *
     * @param int $value
     * @return \google\api\Distribution
     */
    public function addBucketCounts( $value){
     return $this->_add(7, $value);
    }
  }
}
