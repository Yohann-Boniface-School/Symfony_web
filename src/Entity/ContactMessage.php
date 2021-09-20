<?php

namespace App\Entity;

class ContactMessage
{
    protected $who;

    /**
     * @return mixed
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * @param mixed $who
     * @return ContactMessage
     */
    public function setWho($who): ContactMessage
    {
        $this->who = $who;
        return $this;
    }
    protected $email;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return ContactMessage
     */
    public function setEmail($email): ContactMessage
    {
        $this->email = $email;
        return $this;
    }
    protected $message;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return ContactMessage
     */
    public function setMessage($message): ContactMessage
    {
        $this->message = $message;
        return $this;
    }
}
