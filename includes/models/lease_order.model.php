<?php
class Lease_orderModel extends BaseModel
{
    public $table  = 'lease_order';
    public $prikey = 'id';
    public $alias  = 'lorder';
    public $_name  = 'lease_order';
    var $_relation = array(
        //һ��һ�¶�����Ӧһ����Ʒ
        'order_belong_goods' => array(
            'model'         => 'lease_goods',
            'type'          => BELONGS_TO,
            'foreign_key'   => 'id',
            'reverse'       => 'has_order',
        ),
        //һ��һ�¶�����Ӧһ���û�
        'order_belong_member' => array(
            'model'         => 'lease_member',
            'type'          => BELONGS_TO,
            'foreign_key'   => 'user_id',
            'reverse'       => 'has_order',
        )
    );
}
?>