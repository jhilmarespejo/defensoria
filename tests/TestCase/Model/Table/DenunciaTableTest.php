<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DenunciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DenunciaTable Test Case
 */
class DenunciaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DenunciaTable
     */
    public $Denuncia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.denuncia',
        'app.victima',
        'app.agresor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Denuncia') ? [] : ['className' => DenunciaTable::class];
        $this->Denuncia = TableRegistry::getTableLocator()->get('Denuncia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Denuncia);

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
