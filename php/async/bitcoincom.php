<?php

namespace ccxt\async;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import

class bitcoincom extends fmfwio {

    public function describe() {
        return $this->deep_extend(parent::describe (), array(
            'id' => 'bitcoincom',
            'alias' => true,
        ));
    }
}
