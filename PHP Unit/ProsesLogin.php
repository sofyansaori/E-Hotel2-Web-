<?php

class ProsesLogin
{
    public function loginProses($sentence)
    {
        return count(explode(" ",$sentence));
    }
}
?>