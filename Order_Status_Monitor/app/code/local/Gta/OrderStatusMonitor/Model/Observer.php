<?php
    class Gta_OrderStatusMonitor_Model_Observer
    {
        public function putstatefilteronorder($Observer)
        {

        	public function checkorderstatus(Varien_Event_Observer $observer)
			{
   				 $status = $observer->getEvent()->getOrder()->getStatus();
        			 Mage::log($status,null,'orderstatus.log',true);
			}

        }
    }
?>
