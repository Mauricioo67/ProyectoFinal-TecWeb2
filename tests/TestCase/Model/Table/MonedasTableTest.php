<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonedasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonedasTable Test Case
 */
class MonedasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MonedasTable
     */
    protected $Monedas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Monedas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Monedas') ? [] : ['className' => MonedasTable::class];
        $this->Monedas = $this->getTableLocator()->get('Monedas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Monedas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\MonedasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
