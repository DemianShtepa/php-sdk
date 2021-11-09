<?php

namespace Tests\WayForPay\SDK\Response;

use PHPUnit\Framework\TestCase;
use WayForPay\SDK\Domain\CardToken;
use WayForPay\SDK\Response\SettleResponse;

/**
 * Class SettleResponseTest
 * @package Tests\WayForPay\SDK\Response
 */
class SettleResponseTest extends TestCase {



    private $data = array(
        'orderReference' => 'test-order-reference',
        'currency' => 'UAH',
        'amount' => 200.0,
        'transactionStatus' => 'Approved',
        'authCode' => 'test-auth-code',
        'createdDate' => '',
        'processingDate' => '',
        'cardPan' => '5444****2222',
        'cardType' => 'Visa',
        'issuerBankName' => 'Privat',
        'issuerBankCountry' => 'Ukraine',
        'recToken' => 'test-rec-token',
        'fee' => '5.0',
        'paymentSystem' => 'Visa'
    );

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->data['createdDate'] = time();
        $this->data['processingDate'] = time()+60;
    }

    public function test_getters() {
        $response = new SettleResponse(array_merge($this->data, array(
            'reason' => 'test-reason',
            'reasonCode' => '1100'
        )));

        foreach ($this->data as $field => $value) {
            if(in_array($field, array('createdDate', 'processingDate'))) {
                $value = \DateTime::createFromFormat('U', $value);
            } elseif($field == 'transactionStatus') {
                $field = 'Status';
            }

            $realValue = $response->getTransaction()->{'get'.ucfirst($field)}();

            $this->assertEquals($this->convertToScalar($value), $this->convertToScalar($realValue), 'Wrong value field ' . $field.' Value: ' . $this->convertToScalar($value));

        }
    }

    /**
     * @param $value
     * @return bool|float|int|string
     */
    private function convertToScalar($value) {
        if($value instanceof \DateTime) {
            return (string)$value->getTimestamp();
        } elseif ($value instanceof CardToken) {
            return $value->getToken();
        }

        return $value;
    }


}