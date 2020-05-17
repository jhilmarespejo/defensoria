<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VictimaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VictimaTable Test Case
 */
class VictimaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VictimaTable
     */
    public $Victima;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.victima',
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
        $config = TableRegistry::getTableLocator()->exists('Victima') ? [] : ['className' => VictimaTable::class];
        $this->Victima = TableRegistry::getTableLocator()->get('Victima', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Victima);

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
