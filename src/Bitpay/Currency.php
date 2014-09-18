<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 BitPay, Inc.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Bitpay;

/**
 *
 * @package Bitpay
 */
class Currency implements CurrencyInterface
{

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $symbol;

    /**
     * @var integer
     */
    protected $precision;

    /**
     * @var float
     */
    protected $exchangePercentageFee;

    /**
     * @var boolean
     */
    protected $payoutEnabled;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $pluralName;

    /**
     * @var array
     */
    protected $alts;

    /**
     * @var array
     */
    protected $payoutFields;

    /**
     */
    public function __construct()
    {
        $this->payoutEnabled = false;
        $this->payoutFields  = array();
    }

    /**
     * @inheritdoc
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * This will change the $code to all uppercase
     *
     * @param string $code
     *
     * @return CurrencyInterface
     */
    public function setCode($code)
    {
        $this->code = strtoupper($code);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     *
     * @return CurrencyInterface
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @param integer $precision
     *
     * @return CurrencyInterface
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getExchangePctFee()
    {
        return $this->exchangePercentageFee;
    }

    /**
     * @param string $fee
     *
     * @return CurrencyInterface
     */
    public function setExchangePctFee($fee)
    {
        $this->exchangePercentageFee = $fee;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function isPayoutEnabled()
    {
        return $this->payoutEnabled;
    }

    /**
     * @param boolean $enabled
     *
     * @return CurrencyInterface
     */
    public function setPayoutEnabled($enabled)
    {
        $this->payoutEnabled = (boolean) $enabled;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return CurrencyInterface
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPluralName()
    {
        return $this->pluralName;
    }

    /**
     * @param string $pluralName
     *
     * @return CurrencyInterface
     */
    public function setPluralName($pluralName)
    {
        $this->pluralName = $pluralName;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAlts()
    {
        return $this->alts;
    }

    /**
     * @param string $alts
     *
     * @return CurrencyInterface
     */
    public function setAlts($alts)
    {
        $this->alts = $alts;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPayoutFields()
    {
        return $this->payoutFields;
    }

    /**
     * @param array $payoutFields
     *
     * @return CurrencyInterface
     */
    public function setPayoutFields(array $payoutFields)
    {
        $this->payoutFields = $payoutFields;

        return $this;
    }
}
