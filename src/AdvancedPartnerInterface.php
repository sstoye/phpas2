<?php

namespace AS2;

interface AdvancedPartnerInterface
{
    /**
     * @return boolean Whether to check the signature
     */
    public function getCheckSignature();

    /**
     * @return string
     */
    public function getSignatureCertificate();

    /**
     * @return bool
     */
    public function getRequireSignedMessages();

    /**
     * @return bool
     */
    public function getBinaryContentTransferEncoding();

}