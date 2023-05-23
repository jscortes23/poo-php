<?php

namespace App;
class Post
{
    protected $benefits = [];
    public function addBenefits($benefit)
    {
        $this->benefits[] = $benefit;
    }
    public function countBenefits()
    {
        return count($this->benefits);
    }
    public function getBenefits()
    {
        return $this->benefits;
    }
}

?>