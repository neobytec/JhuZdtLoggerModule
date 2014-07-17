<?php

namespace Jhu\ZdtLoggerModule\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * @since   0.1
 * @author  Jérémy Huet <jeremy.huet@gmail.com>
 * @link    https://github.com/jhuet
 * @package Jhu\ZdtLoggerModule
 * @license MIT
 */
class ModuleOptions extends AbstractOptions
{
    /**
     * Turn off strict options mode
     */
    protected $__strictMode__ = false;

    /**
     * The logger used for the application
     *
     * @var string|\Zend\Log\Logger
     */
    protected $logger = 'Zend\Log\Logger';
    
    /**
     * The logger level to filter the writer.
     * 
     * @var integer
     */
    protected $level;
    
    /**
     * The logger filter comparator for the writer.
     * 
     * @var string
     */
    protected $levelComparator;

    /**
     * Set logger
     *
     * @param  string|\Zend\Log\Logger $logger
     * @return ModuleOptions
     */
    public function setLogger($logger)
    {
        $this->logger =  $logger;

        return $this;
    }

    /**
     * Get logger
     *
     * @return string
     */
    public function getLogger()
    {
        return $this->logger;
    }
    
    /**
     * Set level
     * 
     * @param integer $level
     * @return ModuleOptions
     */
    public function setLevel($level)
    {
        $this->level = $level;
        
        return $this;
    }
    
    /**
     * Get level
     * 
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }
    
    /**
     * Set levelComparator
     * 
     * @param string $levelComparator
     * @return ModuleOptions
     */
    public function setLevelComparator($levelComparator)
    {
        $this->levelComparator = $levelComparator;
        
        return $this;
    }
    
    /**
     * Get levelComparator
     * 
     * @return string
     */
    public function getLevelComparator()
    {
        return $this->levelComparator;
    }
}
