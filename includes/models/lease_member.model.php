<?php
class Lease_memberModel extends BaseModel
{
    public $table  = 'lease_member';
    public $prikey = 'user_id';
    public $alias  = 'member';
    public $_name  = 'lease_member';
    var $_relation = array(
        //һ���û���Ӧ�������
        'has_comment' => array(
            'model'         => 'lease_comment',
            'type'          => HAS_MANY,
            'foreign_key'   => 'user_id',
            'dependent' => true
        ),
        //һ���û���Ӧ�������
        'has_order' => array(
            'model'         => 'lease_order',
            'type'          => HAS_MANY,
            'foreign_key'   => 'user_id',
            'dependent' => true
        )
    );
}
?>