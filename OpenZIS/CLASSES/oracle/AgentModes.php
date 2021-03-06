<?php

/**
 * Zend_Db_Table based simpe ORM for the agent_modes table
 * Autogenerated by db.php:
 *   timestamp: Sat, 13 Nov 10 15:24:19 -0500
 *   database:  openzis
 *   host:      192.168.1.22
 * 
 * @version $Id$
 */
class AgentModes extends Zend_Db_Table
{
    /**
     * Table name
     * 
     * @var string
     */
#    protected $_schema = 'OPENZIS';
	protected $_name = 'AGENT_MODES';

    /**
     * Primary key field
     * 
     * @var string
     */
    protected $_primary = 'agent_mode_id';

    /**
     * List of columns
     * 
     * @var array
     */
    protected $_cols = array(
		'agent_mode_id' => 'agent_mode_id',
		'mode_desc' 	=> 'mode_desc'
	    );
}