<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class EmailDomainValidatorTest extends TestCase
{
    const VALID_EMAIL = 'mathiasd88@gmail.com';
    const INVALID_EMAIL = 'php';
    const TEMPORARY_EMAIL = 'temp@tempail.com';


    public function testValidEmail()
    {
        $validator = new \MValidator\EmailDomainValidator(self::VALID_EMAIL);

        $this->assertTrue($validator->validate());
    }

    public function testInvalidEmail()
    {
        $validator = new \MValidator\EmailDomainValidator(self::INVALID_EMAIL);

        $this->assertFalse($validator->validate());
    }

    public function testEmailFromTheList()
    {
        $validator = new \MValidator\EmailDomainValidator(self::TEMPORARY_EMAIL);

        $this->assertFalse($validator->validate());
    }
}