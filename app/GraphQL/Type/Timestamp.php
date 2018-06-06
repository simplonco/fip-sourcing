<?php

namespace App\GraphQL\Type;

use Carbon\Carbon;
use GraphQL\Type\Definition\ScalarType;
use GraphQL\Utils\Utils;

class Timestamp extends ScalarType
{
    /**
     * @var string
     */
    public $name = "Timestamp";

    public function __construct()
    {
        Utils::invariant($this->name, 'Type must be named.');
    }

    /**
     * @var string
     */
    public $description = "A UNIX timestamp represented as an integer";

    /**
     * Serializes an internal value to include in a response.
     *
     * @param mixed $value
     * @return mixed
     */
    public function serialize($value)
    {
        return $this->toTimestamp($value);
    }

    /**
     * Parses an externally provided value (query variable) to use as an input
     *
     * @param mixed $value
     * @return mixed
     */
    public function parseValue($value)
    {
        return $this->toTimestamp($value);
    }

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input
     *
     * @param \GraphQL\Language\AST\Node $valueNode
     * @return mixed
     */
    public function parseLiteral($ast)
    {
        if ($ast instanceof IntValueNode) {
            $val = (int) $ast->value;
            if ($ast->value === (string) $val && self::MIN_INT <= $val && $val <= self::MAX_INT) {
                return Carbon::createFromTimestamp($val);
            }
        }
        return null;
    }

    /**
     * Turn a value into a timestamp.
     *
     * @param mixed $value Could be anything Carbon can parse (Carbon, DateTime,
     * string, timestamp, ...)
     *
     * @return int
     */
    protected function toTimestamp($value)
    {
        return (new Carbon($value))->getTimestamp();
    }
}