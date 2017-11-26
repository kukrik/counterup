<?php

/**
 * This file contains the QCounterUp Class.
 */

namespace Kukrik\CounterUp;

use QCubed as Q;
use QCubed\Project\Application;
use QCubed\Exception\Caller;
use QCubed\Control\BlockControl;
use QCubed\Type;

// we need a better way of reconfiguring JS assets
if (!defined('QCUBED_COUNTERUP_ASSETS_URL')) {
    define('QCUBED_COUNTERUP_ASSETS_URL', QCUBED_BASE_URL . '/../kukrik/counterup/assets');
}

/**
 * Class QCounterUp: For showing animated data with Counter Up
 *
 * @package QCubed\Plugin
 *
 */

class CounterUp extends BlockControl {

    /** @var  integer Delay */
    protected $intDelay = '10';
    /** @var  integer Time */
    protected $intTime = '1000';
    /** @var  string Data */
    protected $strData;

	public function __construct($objParentObject, $strControlId = null) {
		parent::__construct($objParentObject, $strControlId);
		$this->registerFiles();
	}

	protected function registerFiles() {
        $this->addJavascriptFile('http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js');
        $this->addJavascriptFile(QCUBED_COUNTERUP_ASSETS_URL . "/js/jquery.counterup.min.js");
    }

    /**
     * Returns the control id for purposes of attaching events.
     * @return string
     */
    public function getJqControlId() {
        return $this->ControlId;
    }

    /**
     * Returns the HTML formatted string for the control
     * @return string HTML string
     */
    protected function getControlHtml() {
        $attrOverride = array('id'=>$this->getJqControlId(), 'data-value'=>$this->strData);
        if (!empty($this->strData)) {

            return $this->renderTag('span', $attrOverride, null, 0);
        }
    }

    public function getControlJavaScript() {
        $strJS = sprintf('$j("#%s").counterUp({delay: %s, time: %s})',
            $this->getJqControlId(),
            $this->intDelay,
            $this->intTime);

        return $strJS;
    }

	public function getEndScript() {
        return  $this->getControlJavaScript() . '; ' . parent::getEndScript();
	}

    /////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "Delay": return $this->intDelay;
            case "Time": return $this->intTime;
            case "Data": return $this->strData;

            default:
                try {
                    return parent::__get($strName);
                } catch (Caller $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }

    /////////////////////////
    // Public Properties: SET
    /////////////////////////
	public function __set($strName, $mixValue) {
		switch ($strName) {
            case "Delay":
                try {
                    $this->intDelay = Type::Cast($mixValue, Type::INTEGER);
                    break;
                } catch (Caller $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;

            case "Time":
                try {
                    $this->intTime = Type::Cast($mixValue, Type::INTEGER);
                    break;
                } catch (Caller $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
            break;

            case "Data":
                try {
                    $this->strData = Type::Cast($mixValue, Type::STRING);
                    break;
                } catch (Caller $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;

            default:
                try {
                    parent::__set($strName, $mixValue);
                } catch (Caller $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;
        }
	}

    /**
     * @return Q\ModelConnector\Param[]
     */
    public static function getModelConnectorParams() {
        return array_merge(parent::GetModelConnectorParams(), array(
            new Q\ModelConnector\Param (get_called_class(), 'Data', '', Type::STRING),
            new Q\ModelConnector\Param (get_called_class(), 'Delay', '', Type::INTEGER),
            new Q\ModelConnector\Param (get_called_class(), 'Time', '', Type::INTEGER),
        ));
    }
}
