<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GuestUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GuestUsersTable Test Case
 */
class GuestUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GuestUsersTable
     */
    public $GuestUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.guest_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GuestUsers') ? [] : ['className' => 'App\Model\Table\GuestUsersTable'];
        $this->GuestUsers = TableRegistry::get('GuestUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GuestUsers);

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
