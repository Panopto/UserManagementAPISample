<?php
/**
 * File for class UserManagementStructGetUserByKey
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructGetUserByKey originally named GetUserByKey
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructGetUserByKey extends UserManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The userKey
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $userKey;
    /**
     * Constructor method for GetUserByKey
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param string $_userKey
     * @return UserManagementStructGetUserByKey
     */
    public function __construct($_auth = NULL,$_userKey = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'userKey'=>$_userKey),false);
    }
    /**
     * Get auth value
     * @return UserManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param UserManagementStructAuthenticationInfo $_auth the auth
     * @return UserManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get userKey value
     * @return string|null
     */
    public function getUserKey()
    {
        return $this->userKey;
    }
    /**
     * Set userKey value
     * @param string $_userKey the userKey
     * @return string
     */
    public function setUserKey($_userKey)
    {
        return ($this->userKey = $_userKey);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructGetUserByKey
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
