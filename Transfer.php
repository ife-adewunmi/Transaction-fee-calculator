<?php
/*
 * Author:           I.A John <ifeoluwa.adewunmi94@gmail.com>
 * Copyright:        (c) 2020, Ifeoluwa-Adewunmi John | All Rights Reserved.
 */


class Transfer
{

    private $_userAmount, $_transferCharges, $_transferStatus;

    public function __construct($amount)
    {
        $this->execute($amount);
    }

    /**
     * Return the summary & result in XML format.
     */
    public function xmlOutput()
    {
        header('Content-Type:text/xml'); // Set the XML header

        /*
         * Thanks htmlspecialchars(), I make the summary text safe for XML syntax */
        return
            '<output>
                <amount>' . $this->_userAmount . '</amount>
                <charges>' . htmlspecialchars($this->_transferCharges) . '</charges>
                <status>' . htmlspecialchars($this->_transferStatus) . '</status>
            </output>';
    }

    public function amount()
    {
        return $this->_userAmount;
    }

    public function charges()
    {
        return $this->_transferCharges;
    }

    public function status()
    {
        return $this->_transferStatus;
    }

    public function execute($amount)
    {

        // Get the contents of the JSON file 
        $configJson  = file_get_contents("config.json");

        // Convert to array 
        $config = json_decode($configJson, true);

        // Iterate through the config array 
        foreach ($config['fees'] as $i=>$value) {
            if (($value['minAmount'] <= $amount) && ($amount <= $value['maxAmount'])) {
                $this->_userAmount      = $amount;
                $this->_transferCharges = "The transfer Charges for this transaction is " . $value['feeAmount'];
                $this->_transferStatus  = "Pending Transfer!";

                return;
            } else {
                $this->_userAmount      = $amount;
                $this->_transferCharges = "There are none charges for this transaction";
                $this->_transferStatus  =  $amount . " is too large, please try a lesser amount.";
            }

        }
    }

}
