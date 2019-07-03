# WayForPay PHP SDK [![Packagist PHP version](https://img.shields.io/packagist/php-v/wayforpay/php-sdk.svg?style=for-the-badge&logo=php)](https://packagist.org/packages/wayforpay/php-sdk)
[![License](https://img.shields.io/github/license/wayforpay/php-sdk.svg)](https://github.com/wayforpay/php-sdk) ![Packagist](https://img.shields.io/packagist/dm/wayforpay/php-sdk.svg) 

[![Latest Stable Version](https://img.shields.io/packagist/v/wayforpay/php-sdk.svg)](https://packagist.org/packages/wayforpay/php-sdk) ![GitHub Release Date](https://img.shields.io/github/release-date/wayforpay/php-sdk.svg)
 
[![Packagist PHP version](https://img.shields.io/packagist/php-v/wayforpay/php-sdk.svg)](https://packagist.org/packages/wayforpay/php-sdk) [![Code size](https://img.shields.io/github/languages/code-size/wayforpay/php-sdk.svg)](https://github.com/wayforpay/php-sdk)

[![GitHub stars](https://img.shields.io/github/stars/wayforpay/php-sdk.svg)](https://github.com/wayforpay/php-sdk/stargazers) [![GitHub issues](https://img.shields.io/github/issues/wayforpay/php-sdk.svg)](https://github.com/wayforpay/php-sdk/issues)

PHP SDK for payment system [WayForPay](https://wayforpay.com).

## Table Of Contents

- [WayForPay documentation](#wayforpay-documentation)
- [How to use](#how-to-use)
  - [Wizard](#wizard)
    - [Transactions List](#transactions-list)
    - [Charge](#charge)
    - [Complete 3DS](#complete-3ds)
    - [Check](#check)
    - [Refund](#refund)
- [TODO](#todo)
- [Contributing](#contributing)


## WayForPay documentation
* [English](https://wiki.wayforpay.com/display/WADE/Wayforpay+Api+documentations+ENG)
* [Ukrainian](https://wiki.wayforpay.com/display/WADU/Wayforpay+Api+documentations+UA)
* [Russian](https://wiki.wayforpay.com/display/AD/Api+documentation)

## How to use
### Wizard
#### Transactions List

See [transaction-list.php](examples/transaction-list.php).

```bash
$ php examples/transaction-list.php 
Reason Code: 1100
2019-07-01 07:02:44     PURCHASE        Declined                9024 UAH
2019-07-01 06:48:27     PURCHASE        Expired                 50000 UAH
2019-07-01 07:04:10     PURCHASE        Declined                9024 UAH
2019-07-01 07:14:14     CHARGE          Approved                0.01 UAH
2019-07-01 07:13:31     PURCHASE        Declined                9024 UAH
2019-07-01 07:14:38     CHARGE          Approved                0.01 UAH
2019-07-01 07:13:31     PURCHASE        Declined                9024 UAH
2019-07-01 07:15:23     CHARGE          Declined                0.01 UAH
2019-07-01 07:17:39     REFUND          Refunded                0.01 UAH
2019-07-01 07:17:41     REFUND          Refunded                0.01 UAH
2019-07-01 07:17:44     CHARGE          Approved                0.01 UAH
2019-07-01 07:17:48     REFUND          Refunded                0.01 UAH
2019-07-01 07:19:14     CHARGE          Approved                0.01 UAH
2019-07-01 07:04:11     PURCHASE        Expired                 9024 UAH
2019-07-01 07:19:42     PURCHASE        Declined                9024 UAH
2019-07-01 07:23:08     CHARGE          Approved                0.01 UAH
2019-07-01 07:24:25     CHARGE          Approved                0.01 UAH
2019-07-01 07:19:41     PURCHASE        Declined                9024 UAH
2019-07-01 07:32:39     REFUND          Refunded                0.01 UAH
2019-07-01 07:32:41     REFUND          Refunded                0.01 UAH
2019-07-01 07:34:37     PURCHASE        Declined                9024 UAH
2019-07-01 07:35:46     CHARGE          WaitingAuthComplete     39 UAH
2019-07-01 07:34:38     PURCHASE        Declined                9024 UAH
2019-07-01 07:36:01     REFUND          Voided                  39 UAH
2019-07-01 07:36:41     CHARGE          WaitingAuthComplete     95 UAH
2019-07-01 07:36:42     REFUND          Refunded                0.01 UAH
2019-07-01 07:37:01     REFUND          Voided                  95 UAH
2019-07-01 07:39:52     PURCHASE        Declined                9024 UAH
2019-07-01 07:39:52     PURCHASE        Declined                9024 UAH
2019-07-01 07:40:33     REFUND          Refunded                0.01 UAH
2019-07-01 07:40:35     REFUND          Refunded                0.01 UAH
2019-07-01 07:25:52     PURCHASE        Expired                 1.99 USD
2019-07-01 07:42:58     CHARGE          Approved                0.01 UAH
2019-07-01 07:59:27     REFUND          Refunded                0.01 UAH
```

Response will be instance of `TransactionListResponse`. Transactions can be retrieved via
`getTransactionList` method.

#### Charge

See [charge.php](examples/charge.php).

```bash
$ php examples/charge.php 
Status: InProcessing
```

Response will be instance of `ChargeResponse`. Transaction can be retrieved via
`getTransaction` method.

#### Complete 3DS

```bash
$ php examples/complete-3ds.php 
Status: Approved
```

Response will be instance of `Complete3DSResponse`. Transaction can be retrieved via
`getTransaction` method.

#### Check

```bash
$ php examples/check.php 
Reason Code: 1100
Order status: Refunded
```

Response will be instance of `CheckResponse`. Order can be retrieved via
`getOrder` method.

### Refund

```bash
$ php examples/refund.php 
Reason Code: 1100
Order status: Refunded
```

Response will be instance of `RufundResponse`.

## TODO

* Methods
    * SETTLE
    * P2P_CREDIT
    * CREATE_INVOICE
    * P2_PHONE
* Pay Widget
* PURCHASE form

## Contributing
See [contributing note](./CONTRIBUTING.md)