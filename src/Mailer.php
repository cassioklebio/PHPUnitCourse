<?php
    /**
     * Class Mailer
     *
     */
    class Mailer
    {
        /**
         * @param $email $email the email address
         * @param $message $message the message
         * @return boolean True if sent, false otherwise
         */
        public function sendMessage($email, $message)
        {
            if(empty($email))
            {
                throw new Exception;
            }


            //Use mail() or PHPMailer for example
            sleep(3);

            echo "send '$message' to 'email'";

            return true;
        }

    }