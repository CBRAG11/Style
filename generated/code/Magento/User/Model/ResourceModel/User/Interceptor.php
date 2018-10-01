<?php
namespace Magento\User\Model\ResourceModel\User;

/**
 * Interceptor class for @see \Magento\User\Model\ResourceModel\User
 */
class Interceptor extends \Magento\User\Model\ResourceModel\User implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Authorization\Model\RoleFactory $roleFactory, \Magento\Framework\Stdlib\DateTime $dateTime, $connectionName = null, \Magento\Framework\Acl\Data\CacheInterface $aclDataCache = null, \Magento\User\Model\Backend\Config\ObserverConfig $observerConfig = null)
    {
        $this->___init();
        parent::__construct($context, $roleFactory, $dateTime, $connectionName, $aclDataCache, $observerConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function recordLogin(\Magento\User\Model\User $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'recordLogin');
        if (!$pluginInfo) {
            return parent::recordLogin($user);
        } else {
            return $this->___callPlugins('recordLogin', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadByUsername($username)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByUsername');
        if (!$pluginInfo) {
            return parent::loadByUsername($username);
        } else {
            return $this->___callPlugins('loadByUsername', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasAssigned2Role($user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAssigned2Role');
        if (!$pluginInfo) {
            return parent::hasAssigned2Role($user);
        } else {
            return $this->___callPlugins('hasAssigned2Role', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _clearUserRoles(\Magento\User\Model\User $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_clearUserRoles');
        if (!$pluginInfo) {
            return parent::_clearUserRoles($user);
        } else {
            return $this->___callPlugins('_clearUserRoles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Framework\Model\AbstractModel $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($user);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles(\Magento\Framework\Model\AbstractModel $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRoles');
        if (!$pluginInfo) {
            return parent::getRoles($user);
        } else {
            return $this->___callPlugins('getRoles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteFromRole(\Magento\Framework\Model\AbstractModel $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteFromRole');
        if (!$pluginInfo) {
            return parent::deleteFromRole($user);
        } else {
            return $this->___callPlugins('deleteFromRole', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function roleUserExists(\Magento\Framework\Model\AbstractModel $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'roleUserExists');
        if (!$pluginInfo) {
            return parent::roleUserExists($user);
        } else {
            return $this->___callPlugins('roleUserExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function userExists(\Magento\Framework\Model\AbstractModel $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'userExists');
        if (!$pluginInfo) {
            return parent::userExists($user);
        } else {
            return $this->___callPlugins('userExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isUserUnique(\Magento\Framework\Model\AbstractModel $user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isUserUnique');
        if (!$pluginInfo) {
            return parent::isUserUnique($user);
        } else {
            return $this->___callPlugins('isUserUnique', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveExtra($object, $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveExtra');
        if (!$pluginInfo) {
            return parent::saveExtra($object, $data);
        } else {
            return $this->___callPlugins('saveExtra', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function countAll()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'countAll');
        if (!$pluginInfo) {
            return parent::countAll();
        } else {
            return $this->___callPlugins('countAll', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRulesBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidationRulesBeforeSave');
        if (!$pluginInfo) {
            return parent::getValidationRulesBeforeSave();
        } else {
            return $this->___callPlugins('getValidationRulesBeforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateRoleUsersAcl(\Magento\Authorization\Model\Role $role)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateRoleUsersAcl');
        if (!$pluginInfo) {
            return parent::updateRoleUsersAcl($role);
        } else {
            return $this->___callPlugins('updateRoleUsersAcl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unlock($userIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unlock');
        if (!$pluginInfo) {
            return parent::unlock($userIds);
        } else {
            return $this->___callPlugins('unlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function lock($userIds, $exceptId, $lifetime)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'lock');
        if (!$pluginInfo) {
            return parent::lock($userIds, $exceptId, $lifetime);
        } else {
            return $this->___callPlugins('lock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateFailure($user, $setLockExpires = false, $setFirstFailure = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateFailure');
        if (!$pluginInfo) {
            return parent::updateFailure($user, $setLockExpires, $setFirstFailure);
        } else {
            return $this->___callPlugins('updateFailure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOldPasswords($user, $retainLimit = 4)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOldPasswords');
        if (!$pluginInfo) {
            return parent::getOldPasswords($user, $retainLimit);
        } else {
            return $this->___callPlugins('getOldPasswords', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function trackPassword($user, $passwordHash, $lifetime = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'trackPassword');
        if (!$pluginInfo) {
            return parent::trackPassword($user, $passwordHash, $lifetime);
        } else {
            return $this->___callPlugins('trackPassword', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestPassword($userId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLatestPassword');
        if (!$pluginInfo) {
            return parent::getLatestPassword($userId);
        } else {
            return $this->___callPlugins('getLatestPassword', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        if (!$pluginInfo) {
            return parent::getIdFieldName();
        } else {
            return $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTable');
        if (!$pluginInfo) {
            return parent::getMainTable();
        } else {
            return $this->___callPlugins('getMainTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($tableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        if (!$pluginInfo) {
            return parent::getTable($tableName);
        } else {
            return $this->___callPlugins('getTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        if (!$pluginInfo) {
            return parent::getConnection();
        } else {
            return $this->___callPlugins('getConnection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($object, $value, $field);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($object);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addUniqueField($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUniqueField');
        if (!$pluginInfo) {
            return parent::addUniqueField($field);
        } else {
            return $this->___callPlugins('addUniqueField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetUniqueField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetUniqueField');
        if (!$pluginInfo) {
            return parent::resetUniqueField();
        } else {
            return $this->___callPlugins('resetUniqueField', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unserializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unserializeFields');
        if (!$pluginInfo) {
            return parent::unserializeFields($object);
        } else {
            return $this->___callPlugins('unserializeFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUniqueFields');
        if (!$pluginInfo) {
            return parent::getUniqueFields();
        } else {
            return $this->___callPlugins('getUniqueFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanged($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanged');
        if (!$pluginInfo) {
            return parent::hasDataChanged($object);
        } else {
            return $this->___callPlugins('hasDataChanged', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChecksum($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChecksum');
        if (!$pluginInfo) {
            return parent::getChecksum($table);
        } else {
            return $this->___callPlugins('getChecksum', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        if (!$pluginInfo) {
            return parent::afterLoad($object);
        } else {
            return $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        if (!$pluginInfo) {
            return parent::beforeSave($object);
        } else {
            return $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave($object);
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        if (!$pluginInfo) {
            return parent::beforeDelete($object);
        } else {
            return $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        if (!$pluginInfo) {
            return parent::afterDelete($object);
        } else {
            return $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serializeFields');
        if (!$pluginInfo) {
            return parent::serializeFields($object);
        } else {
            return $this->___callPlugins('serializeFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beginTransaction');
        if (!$pluginInfo) {
            return parent::beginTransaction();
        } else {
            return $this->___callPlugins('beginTransaction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addCommitCallback($callback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCommitCallback');
        if (!$pluginInfo) {
            return parent::addCommitCallback($callback);
        } else {
            return $this->___callPlugins('addCommitCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'commit');
        if (!$pluginInfo) {
            return parent::commit();
        } else {
            return $this->___callPlugins('commit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rollBack');
        if (!$pluginInfo) {
            return parent::rollBack();
        } else {
            return $this->___callPlugins('rollBack', func_get_args(), $pluginInfo);
        }
    }
}
