<?php

require_once ("controllers/controller_main.php");

use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase
{
    protected function setUp(): void
    {
        $this->main = new Controller_Main();

    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testControllerMain()
    {
        $this->assertNotEmpty($this->main->action_index());
    }


}