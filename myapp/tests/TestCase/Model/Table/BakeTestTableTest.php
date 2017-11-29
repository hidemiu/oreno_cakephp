<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BakeTestTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BakeTestTable Test Case
 */
class BakeTestTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BakeTestTable
     */
    public $BakeTest;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bake_test'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BakeTest') ? [] : ['className' => BakeTestTable::class];
        $this->BakeTest = TableRegistry::get('BakeTest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BakeTest);

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
