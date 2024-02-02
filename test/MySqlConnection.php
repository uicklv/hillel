<?php

class MySqlConnection implements DbConnection
{
    public function connect()
    {
        return 'DB connect';
    }
}