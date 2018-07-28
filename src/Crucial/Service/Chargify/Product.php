<?php

/**
 * Copyright 2011 Crucial Web Studio, LLC or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * https://raw.githubusercontent.com/chargely/chargify-sdk-php/master/LICENSE.md
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Crucial\Service\Chargify;

class Product extends AbstractEntity
{
    /**
     * @param $priceInCents
     * @return $this
     */
    public function setPriceInCents($priceInCents)
    {
        $this->setParam('price_in_cents', $priceInCents);

        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setParam('name', $name);

        return $this;
    }

    /**
     * @param $handle
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->setParam('handle', $handle);

        return $this;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setParam('description', $description);

        return $this;
    }

    /**
     * @param $productFamilyId
     * @return $this
     */
    public function setProductFamilyId($productFamilyId)
    {
        $this->setParam('product_family_id', $productFamilyId);

        return $this;
    }

    /**
     * @param $accountingCode
     * @return $this
     */
    public function setAccountingCode($accountingCode)
    {
        $this->setParam('accounting_code', $accountingCode);

        return $this;
    }

    /**
     * @param $intervalUnit
     * @return $this
     */
    public function setIntervalUnit($intervalUnit)
    {
        $this->setParam('interval_unit', $intervalUnit);

        return $this;
    }

    /**
     * @param $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->setParam('interval', $interval);

        return $this;
    }

    /**
     * @param $initialChargeInCents
     * @return $this
     */
    public function setInitialChargeInCents($initialChargeInCents)
    {
        $this->setParam('initial_charge_in_cents', $initialChargeInCents);

        return $this;
    }

    /**
     * @param $trialPriceInCents
     * @return $this
     */
    public function setTrialPriceInCents($trialPriceInCents)
    {
        $this->setParam('trial_price_in_cents', $trialPriceInCents);

        return $this;
    }

    /**
     * @param $trialInterval
     * @return $this
     */
    public function setTrialInterval($trialInterval)
    {
        $this->setParam('trial_interval', $trialInterval);

        return $this;
    }

    /**
     * @param $trialIntervalUnit
     * @return $this
     */
    public function setTrialIntervalUnit($trialIntervalUnit)
    {
        $this->setParam('trial_interval_unit', $trialIntervalUnit);

        return $this;
    }

    /**
     * @param $expirationInterval
     * @return $this
     */
    public function setExpirationInterval($expirationInterval)
    {
        $this->setParam('expiration_interval', $expirationInterval);

        return $this;
    }

    /**
     * @param $expirationIntervalUnit
     * @return $this
     */
    public function setExpirationIntervalUnit($expirationIntervalUnit)
    {
        $this->setParam('expiration_interval_unit', $expirationIntervalUnit);

        return $this;
    }

    /**
     * @param $requireCreditCard
     * @return $this
     */
    public function setRequireCreditCard($requireCreditCard)
    {
        $this->setParam('require_credit_card', $requireCreditCard);

        return $this;
    }

    /**
     * @param $requestCreditCard
     * @return $this
     */
    public function setRequestCreditCard($requestCreditCard)
    {
        $this->setParam('request_credit_card', $requestCreditCard);

        return $this;
    }

    /**
     * @param $requireBillingAddress
     * @return $this
     */
    public function setRequireBillingAddress($requireBillingAddress)
    {
        $this->setParam('require_billing_address', $requireBillingAddress);

        return $this;
    }

    /**
     * @param $requestBillingAddress
     * @return $this
     */
    public function setRequestBillingAddress($requestBillingAddress)
    {
        $this->setParam('request_billing_address', $requestBillingAddress);

        return $this;
    }

    /**
     * @param $requestShippingAddress
     * @return $this
     */
    public function setRequestShippingAddress($requestShippingAddress)
    {
        $this->setParam('request_shipping_address', $requestShippingAddress);

        return $this;
    }

    /**
     * @param $requireShippingAddress
     * @return $this
     */
    public function setRequireShippingAddress($requireShippingAddress)
    {
        $this->setParam('require_shipping_address', $requireShippingAddress);

        return $this;
    }

    /**
     * @param $taxable
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->setParam('taxable', $taxable);

        return $this;
    }

    /**
     * @param $trialType
     * @return $this
     */
    public function setTrialType($trialType)
    {
        $this->setParam('trial_type', $trialType);

        return $this;
    }

    /**
     * @param $autoCreateSignupPage
     * @return $this
     */
    public function setAutoCreateSignupPage($autoCreateSignupPage)
    {
        $this->setParam('auto_create_signup_page', $autoCreateSignupPage);

        return $this;
    }

    /**
     * @param $updateReturnUrl
     * @return $this
     */
    public function setUpdateReturnUrl($updateReturnUrl)
    {
        $this->setParam('update_return_url', $updateReturnUrl);

        return $this;
    }

    /**
     * @param $returnUrl
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->setParam('return_url', $returnUrl);

        return $this;
    }

    /**
     * @param $returnParams
     * @return $this
     */
    public function setReturnParams($returnParams)
    {
        $this->setParam('return_params', $returnParams);

        return $this;
    }

    /**
     * @param $taxCode
     * @return $this
     */
    public function setTaxCode($taxCode)
    {
        $this->setParam('tax_code', $taxCode);

        return $this;
    }

    /**
     * Create a new product
     *
     * @return Product
     */
    public function create()
    {
        $service       = $this->getService();
        $rawData       = $this->getRawData(array('product' => $this->getParams()));
        $response      = $service->request('products', 'POST', $rawData);
        $responseArray = $this->getResponseArray($response);

        if (!$this->isError()) {
            $this->_data = $responseArray['product'];
        } else {
            $this->_data = array();
        }

        return $this;
    }

    /**
     * List all products for your site
     *
     * @return Product
     */
    public function listProducts()
    {
        $service = $this->getService();

        $response      = $service->request('products', 'GET');
        $responseArray = $this->getResponseArray($response);

        if (!$this->isError()) {
            $this->_data = $this->_normalizeResponseArray($responseArray);
        } else {
            $this->_data = array();
        }

        return $this;
    }

    /**
     * Get product details by Chargify ID
     *
     * @param int $id
     *
     * @return Product
     */
    public function readByChargifyId($id)
    {
        $service = $this->getService();

        $response      = $service->request('products/' . $id, 'GET');
        $responseArray = $this->getResponseArray($response);

        if (!$this->isError()) {
            $this->_data = $responseArray['product'];
        } else {
            $this->_data = array();
        }

        return $this;
    }

    /**
     * Get product details by API handle
     *
     * @param string $handle
     *
     * @return Product
     */
    public function readByHandle($handle)
    {
        $service = $this->getService();

        $response      = $service->request('products/handle/' . $handle, 'GET');
        $responseArray = $this->getResponseArray($response);

        if (!$this->isError()) {
            $this->_data = $responseArray['product'];
        } else {
            $this->_data = array();
        }

        return $this;
    }

    /**
     * This normalizes the array for us so we can rely on a consistent structure.
     *
     * @param array $responseArray
     *
     * @return array
     */
    protected function _normalizeResponseArray($responseArray)
    {
        $return = array();
        foreach ($responseArray as $prod) {
            $return[] = $prod['product'];
        }

        return $return;
    }
}