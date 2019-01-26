<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // create table
        $table = $this->table('users');
        $table->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('avatar', 'string', ['null'=>true, 'default'=>NULL, 'comment'=>'用户头像'])
            ->addColumn('god', 'boolean', ['default'=>FALSE, 'comment'=>'管理员'])
            ->addTimestamps('created_at', 'updated_at')
            ->addIndex('email', ['unique'=>true])
            ->addIndex('god')
            ->create();
    }

    /**
     * Migrate up
     */
    public function up()
    {
        
    }

    /**
     * Migrate down
     */
    public function down()
    {
        // drop table
        $this->dropTable('users');
    }
}
