<?php

namespace MValidator;



final class EmailDomainValidator
{
    /**
     * @var string
     */
    private $email;

    /**
     * EmailDisponibilityValidator constructor.
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        return $this->isEmail() && ! $this->isInList();
    }

    /**
     * @return mixed
     */
    private function isEmail(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @return bool
     */
    private function isInList(): bool
    {
        $domain = explode('@', $this->email)[1];
        $emailList = include dirname(__DIR__) . '/data/list.php';

        return in_array($domain, $emailList);
    }
}