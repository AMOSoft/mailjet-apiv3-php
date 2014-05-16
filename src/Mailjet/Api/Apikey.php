<?php
/**
 * MailJet Api
 *
 * Copyright (c) 2013, Mailjet.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *     * Redistributions in binary form must reproduce the above copyright notice,
 *       this list of conditions and the following disclaimer in the documentation
 *       and/or other materials provided with the distribution.
 *
 *     * Neither the name of Zend Technologies USA, Inc. nor the names of its
 *       contributors may be used to endorse or promote products derived from this
 *       software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */


namespace Mailjet\Api;

use Mailjet;
use Mailjet\Model;
use Mailjet\Api\ResultSet;
use Mailjet\Hydrator\Strategy\TRFC3339DateTimeStrategy;
use Mailjet\Hydrator\Strategy\TCustomStatusStrategy;
use Mailjet\Hydrator\Strategy\TRunLevelStrategy;
use Zend\Json\Json;
use Zend\InputFilter;
use Mailjet\Type\TCustomStatus;

/**
 * Apikey Api
 *
 * Manage your Mailjet API Keys. API keys are used as credentials to access the API
 * and SMTP server.
 *
 * @see http://mjdemo.poxx.net/~shubham/apikey.html
 */
class Apikey extends AbstractApi
{

    /**
     * Api name
     */
    protected $name = 'apikey';

    /**
     * Supported Filters
     */
    protected $filters = array(
        'APIKey' => array(
            'name' => 'APIKey',
            'required' => false
            ),
        'ConfirmKey' => array(
            'name' => 'ConfirmKey',
            'required' => false
            ),
        'CustomStatus' => array(
            'name' => 'CustomStatus',
            'required' => false
            ),
        'IsActive' => array(
            'name' => 'IsActive',
            'required' => false
            ),
        'IsMaster' => array(
            'name' => 'IsMaster',
            'required' => false
            ),
        'KeyType' => array(
            'name' => 'KeyType',
            'required' => false
            ),
        'Name' => array(
            'name' => 'Name',
            'required' => false
            ),
        'User' => array(
            'name' => 'User',
            'required' => false
            )
        );

    /**
     * Supported properties
     */
    protected $properties = array(
        'APIKey' => array(
            'name' => 'APIKey',
            'dataType' => 'string',
            'required' => true
            ),
        'CreatedAt' => array(
            'name' => 'CreatedAt',
            'dataType' => '\Datetime',
            'required' => false
            ),
        'CustomStatus' => array(
            'name' => 'CustomStatus',
            'dataType' => 'TCustomStatus',
            'required' => false
            ),
        'ID' => array(
            'name' => 'ID',
            'dataType' => 'int',
            'required' => false
            ),
        'InactiveReason' => array(
            'name' => 'InactiveReason',
            'dataType' => 'string',
            'required' => false
            ),
        'IsActive' => array(
            'name' => 'IsActive',
            'dataType' => 'bool',
            'required' => false
            ),
        'IsMaster' => array(
            'name' => 'IsMaster',
            'dataType' => 'bool',
            'required' => false
            ),
        'Name' => array(
            'name' => 'Name',
            'dataType' => 'string',
            'required' => true
            ),
        'Runlevel' => array(
            'name' => 'Runlevel',
            'dataType' => 'TRunLevel',
            'required' => false
            ),
        'SecretKey' => array(
            'name' => 'SecretKey',
            'dataType' => 'string',
            'required' => false
            ),
        'TrackHost' => array(
            'name' => 'TrackHost',
            'dataType' => 'string',
            'required' => false
            ),
        'UserID' => array(
            'name' => 'UserID',
            'dataType' => 'int',
            'required' => false
            )
        );

    /**
     * Post __construct initializations
     */
    public function init()
    {
        $this->getResultSetPrototype()->setObjectPrototype(new Mailjet\Model\Apikey);
        $this->setUrl('http://api.mailjet.com/v3/REST/apikey/');
        $hydrator = $this->getResultSetPrototype()->getHydrator();
        $hydrator->addStrategy('CreatedAt', new TRFC3339DateTimeStrategy());
        $hydrator->addStrategy('CustomStatus', new TCustomStatusStrategy());
        $hydrator->addStrategy('Runlevel', new TRunLevelStrategy());
    }

    /**
     * Return list of Mailjet\Model\Apikey
     *
     * Return list of Mailjet\Model\Apikey filtered by $filters if provided
     *
     *
     * @param array key/val filters
     * @return ResultSet\ResultSet List of Mailjet\Model\Apikey
     */
    public function getList(array $filters = array())
    {
        return parent::_list($filters);
    }

    /**
     * Return Mailjet\Model\Apikey
     *
     * @param string
     * @return Mailjet\Model\Apikey
     */
    public function getByAPIKey($APIKey)
    {
        return $this->_get($APIKey);
    }

    /**
     * Return list of Mailjet\Model\Apikey with ConfirmKey = $ConfirmKey
     *
     * @param string
     * @return ResultSet\ResultSet
     */
    public function getByConfirmKey($ConfirmKey)
    {
        $result = $this->getList(array('ConfirmKey' => $ConfirmKey));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Apikey with CustomStatus = $CustomStatus
     *
     * @param TCustomStatus
     * @return ResultSet\ResultSet
     */
    public function getByCustomStatus(TCustomStatus $CustomStatus)
    {
        $result = $this->getList(array('CustomStatus' => $CustomStatus));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Apikey with IsActive = $IsActive
     *
     * @param bool
     * @return ResultSet\ResultSet
     */
    public function getByIsActive($IsActive)
    {
        $result = $this->getList(array('IsActive' => $IsActive));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Apikey with IsMaster = $IsMaster
     *
     * @param bool
     * @return ResultSet\ResultSet
     */
    public function getByIsMaster($IsMaster)
    {
        $result = $this->getList(array('IsMaster' => $IsMaster));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Apikey with KeyType = $KeyType
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByKeyType($KeyType)
    {
        $result = $this->getList(array('KeyType' => $KeyType));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Apikey with Name = $Name
     *
     * @param string
     * @return ResultSet\ResultSet
     */
    public function getByName($Name)
    {
        $result = $this->getList(array('Name' => $Name));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Apikey with User = $User
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByUser($User)
    {
        $result = $this->getList(array('User' => $User));
        return $result;
    }

    /**
     * Return Mailjet\Model\Apikey with id = $id
     *
     * @param int Id of resource to get
     * @return Mailjet\Model\Apikey
     */
    public function get($id)
    {
        if (empty($id)) {
            throw new Exception\InvalidArgumentException("You must specify the ID");
        }

        return parent::_get($id);
    }

    /**
     * Update existing Apikey
     *
     * @param Mailjet\Model\Apikey
     * @return Mailjet\Model\Apikey|false Object created or false
     */
    public function update(Mailjet\Model\Apikey &$Apikey)
    {
        return parent::_update($Apikey);
    }

    /**
     * Create a new Apikey
     *
     * @param Mailjet\Model\Apikey
     * @return Mailjet\Model\Apikey|false Object created or false
     */
    public function create(Mailjet\Model\Apikey &$Apikey)
    {
        return parent::_create($Apikey);
    }

    /**
     * Delete the Apikey with id = $id
     *
     * @param integer Id to delete
     * @return bool True on success
     */
    public function delete($id)
    {
        return parent::_delete($id);
    }


}

