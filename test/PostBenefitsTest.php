<?php

use PHPUnit\Framework\TestCase;
use App\Benefit;
use App\Post;

class PostBenefitsTest extends TestCase
{
    public function test_add_benefit_to_post()
    {
        $post = new Post();
        $benefit = new Benefit();

        $post->addBenefits($benefit);

        $this->assertEquals(1, $post->countBenefits());
        $this->assertInstanceOf(Benefit::class, $post->getBenefits()[0]);

    }
}