<?php

namespace CodesVault\WPqb\Tests;

use PHPUnit\Framework\TestCase;
use CodesVault\WPqb\Tests\Expression\SelectApi;

class SelectTest extends TestCase
{
    public function testFrom()
    {
        $sql = 'SELECT * FROM wp_posts';
        $query =
            SelectApi::select('*')
            ->from('posts')
            ->getSql();

        $this->assertSame($sql, $query);
    }

    public function testDistinct()
    {
        $sql = 'SELECT DISTINCT * FROM wp_posts';
        $query =
            SelectApi::select('*')
            ->distinct()
            ->from('posts')
            ->getSql();

        $this->assertSame($sql, $query);
    }
}
