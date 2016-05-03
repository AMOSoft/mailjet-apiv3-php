<?php
/**
 * PHP version 5
 *
 * This is the Mailjet Resources file
 *
 * @category Mailjet_API
 * @package  Mailjet-apiv3
 * @author   Guillaume Badi <gbadi@mailjet.com>
 * @author   AMO & Soft <dev@amo-soft.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     dev.mailjet.com
 */

namespace Mailjet;

/**
 * PHP version 5
 *
 * This is the Mailjet Resources Class
 *
 * @category Mailjet_API
 * @package  Mailjet-apiv3
 * @author   Guillaume Badi <gbadi@mailjet.com>
 * @author   AMO & Soft <dev@amo-soft.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     dev.mailjet.com
 */
class Resources
{
    public static $Email = array('send', '');
    public static $Aggregategraphstatistics = array('aggregategraphstatistics', '');
    public static $Apikey = array('apikey', '');
    public static $Apikeyaccess = array('apikeyaccess', '');
    public static $Apikeytotals = array('apikeytotals', '');
    public static $Apitoken = array('apitoken', '');
    public static $Axtesting = array('axtesting', '');
    public static $Batchjob = array('batchjob', '');
    public static $Bouncestatistics = array('bouncestatistics', '');
    public static $Campaign = array('campaign', '');
    public static $Campaignaggregate = array('campaignaggregate', '');
    public static $Campaigndraft = array('campaigndraft', '');
    public static $CampaigndraftSchedule = array('campaigndraft', 'schedule');
    public static $CampaigndraftStatus = array('campaigndraft', 'status');
    public static $CampaigndraftSend = array('campaigndraft', 'send');
    public static $CampaigndraftTest = array('campaigndraft', 'test');
    public static $CampaigndraftDetailcontent = array('campaigndraft', 'detailcontent');
    public static $Campaigngraphstatistics = array('campaigngraphstatistics', '');
    public static $Campaignoverview = array('campaignoverview', '');
    public static $Campaignstatistics = array('campaignstatistics', '');
    public static $Clickstatistics = array('clickstatistics', '');
    public static $Contact = array('contact', '');
    public static $ContactManagecontactslists = array('contact', 'managecontactslists');
    public static $ContactGetcontactslists = array('contact', 'getcontactslists');
    public static $ContactManagemanycontacts = array('contact', 'managemanycontacts');
    public static $Contactdata = array('contactdata', '');
    public static $Contactfilter = array('contactfilter', '');
    public static $Contacthistorydata = array('contacthistorydata', '');
    public static $Contactmetadata = array('contactmetadata', '');
    public static $Contactslist = array('contactslist', '');
    public static $ContactslistCsvdata = array('contactslist', 'csvdata/text:plain');
    public static $ContactslistManagecontact = array('contactslist', 'ManageContact');
    public static $ContactslistManagemanycontacts = array('contactslist', 'ManageManyContacts');
    public static $ContactslistImportlist = array('contactslist', 'ImportList');
    public static $Contactslistsignup = array('contactslistsignup', '');
    public static $Contactstatistics = array('contactstatistics', '');
    public static $Csvimport = array('csvimport', '');
    public static $Dns = array('dns', '');
    public static $DnsCheck = array('dns', 'check');
    public static $Domainstatistics = array('domainstatistics', '');
    public static $Eventcallbackurl = array('eventcallbackurl', '');
    public static $Geostatistics = array('geostatistics', '');
    public static $Graphstatistics = array('graphstatistics', '');
    public static $Listrecipient = array('listrecipient', '');
    public static $Listrecipientstatistics = array('listrecipientstatistics', '');
    public static $Liststatistics = array('liststatistics', '');
    public static $Message = array('message', '');
    public static $Messagehistory = array('messagehistory', '');
    public static $Messageinformation = array('messageinformation', '');
    public static $Messagesentstatistics = array('messagesentstatistics', '');
    public static $Messagestate = array('messagestate', '');
    public static $Messagestatistics = array('messagestatistics', '');
    public static $Metadata = array('metadata', '');
    public static $Metasender = array('metasender', '');
    public static $Myprofile = array('myprofile', '');
    public static $Newsletter = array('newsletter', '');
    public static $NewsletterSchedule = array('newsletter', 'schedule');
    public static $NewsletterStatus = array('newsletter', 'status');
    public static $NewsletterSend = array('newsletter', 'send');
    public static $NewsletterTest = array('newsletter', 'test');
    public static $NewsletterDetailcontent = array('newsletter', 'detailcontent');
    public static $Newslettertemplate = array('newslettertemplate', '');
    public static $Newslettertemplatecategory = array('newslettertemplatecategory', '');
    public static $Openinformation = array('openinformation', '');
    public static $Openstatistics = array('openstatistics', '');
    public static $Parseroute = array('parseroute', '');
    public static $Preferences = array('preferences', '');
    public static $Preset = array('preset', '');
    public static $Sender = array('sender', '');
    public static $SenderValidate = array('sender', 'validate');
    public static $Senderstatistics = array('senderstatistics', '');
    public static $Template = array('template', '');
    public static $TemplateDetailcontent = array('template', 'detailcontent');
    public static $TemplateDetailpreviews = array('template', 'detailpreviews');
    public static $TemplateDisplaypreview = array('template', 'displaypreview');
    public static $TemplateDetailthumbnail = array('template', 'detailthumbnail');
    public static $TemplateDisplaythumbnail = array('template', 'displaythumbnail');
    public static $Toplinkclicked = array('toplinkclicked', '');
    public static $Trigger = array('trigger', '');
    public static $User = array('user', '');
    public static $UserActivate = array('user', 'activate');
    public static $Useragentstatistics = array('useragentstatistics', '');
    public static $Widget = array('widget', '');
    public static $Widgetcustomvalue = array('widgetcustomvalue', '');
}
