<?php

/**
 * Zend_Db_Table based simpe ORM for the admin_level table
 * Autogenerated by db.php:
 *   timestamp: Sat, 13 Nov 10 15:24:19 -0500
 *   database:  openzis
 *   host:      192.168.1.22
 * 
 * @version $Id$
 */
class TB_AdminLevel extends Zend_Db_Table
{
    /**
     * Table name
     * 
     * @var string
     */
#    protected $_schema = 'OPENZIS';
    protected $_name = 'ADMIN_LEVEL';

    /**
     * Primary key field
     * 
     * @var string
     */
    protected $_primary = 'level_id';

    /**
     * List of columns
     * 
     * @var array
     */
    protected $_cols = array(
		 'level_id' => 'level_id'
		,'level_desc' => 'level_desc'
    );
}