<?php
/**
 *  GaiterJones - http://blog.gaiterjones.com
 *  
 *  Magento Master Password Extension
 *  
 *  Copyright (C) 2015 paj@gaiterjones.com 29.06.2015 v0.2
 *
 *	This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  @category   PAJ
 *  @package    MasterPassword
 *  @license    http://www.gnu.org/licenses/ GNU General Public License
 * 
 *
 */
 
class PAJ_MasterPassword_Customer_Model_Customer extends Mage_Customer_Model_Customer
{


	 /**
     * Validate password with salted hash OR PAJ master password
     *
     * @param string $password
     * @return boolean
     */
    public function validatePassword($password)
    {
        
		if (Mage::getStoreConfig('masterpassword_section1/general/masterpassword_md5_hash')!="")
		{
			if (md5($password) == Mage::getStoreConfig('masterpassword_section1/general/masterpassword_md5_hash')) {
                return true;
			}
		}

        $hash = $this->getPasswordHash();
        if (!$hash) {
            return false;
        }
        return Mage::helper('core')->validateHash($password, $hash);
    }

}