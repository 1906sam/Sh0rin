<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DataUrlsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DataUrlsTable Test Case
 */
class DataUrlsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DataUrlsTable
     */
    public $DataUrls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.data_urls',
        'app.users',
        'app.url_informations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DataUrls') ? [] : ['className' => 'App\Model\Table\DataUrlsTable'];
        $this->DataUrls = TableRegistry::get('DataUrls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DataUrls);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
