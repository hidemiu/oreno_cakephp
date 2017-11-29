<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Test1Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Test1Table Test Case
 */
class Test1TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Test1Table
     */
    public $Test1;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.test1'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Test1') ? [] : ['className' => Test1Table::class];
        $this->Test1 = TableRegistry::get('Test1', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Test1);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
