<?php

namespace AS2;

interface AdvancedPartnerInterface
{
    /**
     * @return boolean Whether to check the signature
     */
    public function getCheckSignature();
}