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
use Zend\Json\Json;
use Zend\InputFilter;

/**
 * Eventcallbackurl Api
 *
 * Manage event-driven callback URLs, also called webhooks, used by the Mailjet
 * platform when a specific action is triggered
 *
 * @see http://dev.mailjet.com/email-api/v3/eventcallbackurl/
 */
class Eventcallbackurl extends AbstractApi
{

    /**
     * Api name
     */
    protected $name = 'eventcallbackurl';

    /**
     * Supported Filters
     */
    protected $filters = array(
        'APIKey' => array(
            'name' => 'APIKey',
            'required' => false
            ),
        'Backup' => array(
            'name' => 'Backup',
            'required' => false
            ),
        'EventType' => array(
            'name' => 'EventType',
            'required' => false
            ),
        'Status' => array(
            'name' => 'Status',
            'required' => false
            ),
        'Version' => array(
            'name' => 'Version',
            'required' => false
            )
        );

    /**
     * Supported properties
     */
    protected $properties = array(
        'APIKeyID' => array(
            'name' => 'APIKeyID',
            'dataType' => 'int',
            'required' => true
            ),
        'EventType' => array(
            'name' => 'EventType',
            'dataType' => 'string',
            'required' => false
            ),
        'ID' => array(
            'name' => 'ID',
            'dataType' => 'int',
            'required' => false
            ),
        'IsBackup' => array(
            'name' => 'IsBackup',
            'dataType' => 'bool',
            'required' => false
            ),
        'Status' => array(
            'name' => 'Status',
            'dataType' => 'string',
            'required' => false
            ),
        'Url' => array(
            'name' => 'Url',
            'dataType' => 'string',
            'required' => true
            ),
        'Version' => array(
            'name' => 'Version',
            'dataType' => 'int',
            'required' => false
            )
        );

    /**
     * Post __construct initializations
     */
    public function init()
    {
        $this->getResultSetPrototype()->setObjectPrototype(new Mailjet\Model\Eventcallbackurl);
        $this->setUrl('http://api.mailjet.com/v3/REST/eventcallbackurl/');
    }

    /**
     * Return list of Mailjet\Model\Eventcallbackurl
     *
     * Return list of Mailjet\Model\Eventcallbackurl filtered by $filters if provided
     *
     *
     * @param array key/val filters
     * @return ResultSet\ResultSet List of Mailjet\Model\Eventcallbackurl
     */
    public function getList(array $filters = array())
    {
        return parent::_list($filters);
    }

    /**
     * Return list of Mailjet\Model\Eventcallbackurl with APIKey = $APIKey
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByAPIKey($APIKey)
    {
        $result = $this->getList(array('APIKey' => $APIKey));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Eventcallbackurl with Backup = $Backup
     *
     * @param bool
     * @return ResultSet\ResultSet
     */
    public function getByBackup($Backup)
    {
        $result = $this->getList(array('Backup' => $Backup));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Eventcallbackurl with EventType = $EventType
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByEventType($EventType)
    {
        $result = $this->getList(array('EventType' => $EventType));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Eventcallbackurl with Status = $Status
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByStatus($Status)
    {
        $result = $this->getList(array('Status' => $Status));
        return $result;
    }

    /**
     * Return list of Mailjet\Model\Eventcallbackurl with Version = $Version
     *
     * @param int
     * @return ResultSet\ResultSet
     */
    public function getByVersion($Version)
    {
        $result = $this->getList(array('Version' => $Version));
        return $result;
    }

    /**
     * Return Mailjet\Model\Eventcallbackurl with id = $id
     *
     * @param int Id of resource to get
     * @return Mailjet\Model\Eventcallbackurl
     */
    public function get($id)
    {
        if (empty($id)) {
            throw new Exception\InvalidArgumentException("You must specify the ID");
        }

        return parent::_get($id);
    }

    /**
     * Update existing Eventcallbackurl
     *
     * @param Mailjet\Model\Eventcallbackurl
     * @return Mailjet\Model\Eventcallbackurl|false Object created or false
     */
    public function update(Mailjet\Model\Eventcallbackurl &$Eventcallbackurl)
    {
        return parent::_update($Eventcallbackurl);
    }

    /**
     * Create a new Eventcallbackurl
     *
     * @param Mailjet\Model\Eventcallbackurl
     * @return Mailjet\Model\Eventcallbackurl|false Object created or false
     */
    public function create(Mailjet\Model\Eventcallbackurl &$Eventcallbackurl)
    {
        return parent::_create($Eventcallbackurl);
    }

    /**
     * Delete the Eventcallbackurl with id = $id
     *
     * @param integer Id to delete
     * @return bool True on success
     */
    public function delete($id)
    {
        return parent::_delete($id);
    }


}

