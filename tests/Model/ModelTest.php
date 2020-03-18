<?php

require_once ("database/Connection.php");
require_once ("models/model.php");
require_once ("models/model_author.php");
require_once ("models/model_category.php");
require_once ("models/model_main.php");
require_once ("models/model_recipe.php");

use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    protected function setUp(): void
    {
        $this->conn = new Connection();
        $this->author = new Model_Author();
        $this->category = new Model_Category();
        $this->recipe = new Model_Recipe();
        $this->main = new Model_Main();
        $this->header = new Model();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testAuthor()
    {
        $this->assertNotEmpty($this->author->get_author(1));
    }

    public function testConnection(){
        $this->assertEquals("Yes connection!", $this->conn->database_setup());
    }

    public function testCategory()
    {
        $this->assertNotEmpty($this->category->get_category(2));
    }

    public function testRecipe()
    {
        $this->assertNotEmpty($this->recipe->get_recipe(3));
    }
    public function testMain()
    {
        $this->assertArrayHasKey(13, $this->main->get_recipes());
    }
    public function testCategoryList()
    {
        $this->assertArrayHasKey(6, $this->header->get_categories());
    }
    public function testAuthorList()
    {
        $this->assertArrayHasKey(4, $this->header->get_authors());
    }

}