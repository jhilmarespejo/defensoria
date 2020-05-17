<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgresorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgresorTable Test Case
 */
class AgresorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgresorTable
     */
    public $Agresor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agresor',
        'app.denuncia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agresor') ? [] : ['className' => AgresorTable::class];
        $this->Agresor = TableRegistry::getTableLocator()->get('Agresor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agresor);

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
