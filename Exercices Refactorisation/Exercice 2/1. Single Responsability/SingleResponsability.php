<?php

namespace SRPViolation;


interface DataChannel
{
    public function send($c);
    public function receive();
}
interface Connection
{
    public function dial($pno);
    public function hangup();
}

class Modem implements Connection, DataChannel
{
    public function dial($pno)
    {
        // Implementing dial($pno) method.
    }

    public function hangup()
    {
        //  Implementing hangup() method.
    }

    public function send($c)
    {
        // Implementing send($c) method.
    }

    public function receive()
    {
        // Implementing receive() method.
    }
}