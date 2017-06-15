<?php
/**
 * File for class UserManagementServiceGet
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementServiceGet originally named Get
 * @package UserManagement
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementServiceGet extends UserManagementWsdlClass
{
    /**
     * Method to call the operation originally named GetUserByKey
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructGetUserByKey $_userManagementStructGetUserByKey
     * @return UserManagementStructGetUserByKeyResponse
     */
    public function GetUserByKey(UserManagementStructGetUserByKey $_userManagementStructGetUserByKey)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetUserByKey($_userManagementStructGetUserByKey));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetUsers
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructGetUsers $_userManagementStructGetUsers
     * @return UserManagementStructGetUsersResponse
     */
    public function GetUsers(UserManagementStructGetUsers $_userManagementStructGetUsers)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetUsers($_userManagementStructGetUsers));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetGroupIsPublic
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructGetGroupIsPublic $_userManagementStructGetGroupIsPublic
     * @return UserManagementStructGetGroupIsPublicResponse
     */
    public function GetGroupIsPublic(UserManagementStructGetGroupIsPublic $_userManagementStructGetGroupIsPublic)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetGroupIsPublic($_userManagementStructGetGroupIsPublic));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructGetGroup $_userManagementStructGetGroup
     * @return UserManagementStructGetGroupResponse
     */
    public function GetGroup(UserManagementStructGetGroup $_userManagementStructGetGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetGroup($_userManagementStructGetGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetGroupsByName
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructGetGroupsByName $_userManagementStructGetGroupsByName
     * @return UserManagementStructGetGroupsByNameResponse
     */
    public function GetGroupsByName(UserManagementStructGetGroupsByName $_userManagementStructGetGroupsByName)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetGroupsByName($_userManagementStructGetGroupsByName));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetUsersInGroup
     * @uses UserManagementWsdlClass::getSoapClient()
     * @uses UserManagementWsdlClass::setResult()
     * @uses UserManagementWsdlClass::saveLastError()
     * @param UserManagementStructGetUsersInGroup $_userManagementStructGetUsersInGroup
     * @return UserManagementStructGetUsersInGroupResponse
     */
    public function GetUsersInGroup(UserManagementStructGetUsersInGroup $_userManagementStructGetUsersInGroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetUsersInGroup($_userManagementStructGetUsersInGroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see UserManagementWsdlClass::getResult()
     * @return UserManagementStructGetGroupIsPublicResponse|UserManagementStructGetGroupResponse|UserManagementStructGetGroupsByNameResponse|UserManagementStructGetUserByKeyResponse|UserManagementStructGetUsersInGroupResponse|UserManagementStructGetUsersResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
