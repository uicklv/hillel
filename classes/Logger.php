<?php

class Logger implements LoggerInterface
{
    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function emergency($message, array $context = array())
    {
        // TODO: Implement emergency() method.
    }

    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function alert($message, array $context = array())
    {
        // TODO: Implement alert() method.
    }

    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function critical($message, array $context = array())
    {
        // TODO: Implement critical() method.
    }

    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function error($message, array $context = array())
    {
        // TODO: Implement error() method.
    }

    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function warning($message, array $context = array())
    {
        // TODO: Implement warning() method.
    }

    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function notice($message, array $context = array())
    {
        // TODO: Implement notice() method.
    }

    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function info($message, array $context = array())
    {
        // TODO: Implement info() method.
    }

    /**
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function debug($message, array $context = array())
    {
        // TODO: Implement debug() method.
    }

    /**
     * @param $level
     * @param $message
     * @param array $context
     * @return mixed
     */
    #[\Override] public function log($level, $message, array $context = array())
    {
        // TODO: Implement log() method.
    }
}