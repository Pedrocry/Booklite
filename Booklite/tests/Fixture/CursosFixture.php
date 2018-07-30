<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CursosFixture
 *
 */
class CursosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 220, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tutor' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'valorinicial' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'valoratual' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'faculdade' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nome' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'valorvagas' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'tutor' => 'Lorem ipsum dolor sit amet',
                'valorinicial' => 'Lorem ipsum dolor sit amet',
                'valoratual' => 'Lorem ipsum dolor sit amet',
                'faculdade' => 'Lorem ipsum dolor sit amet',
                'nome' => 'Lorem ipsum dolor sit amet',
                'valorvagas' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
