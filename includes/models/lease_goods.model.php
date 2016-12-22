<?php
class Lease_goodsModel extends BaseModel
{
    public $table  = 'lease_goods';
    public $prikey = 'id';
    public $alias  = 'lgoods';
    public $_name  = 'lease_goods';
    var $_relation = array(
        //һ����Ʒ���Ӧ�ö������
        'has_order' => array(
            'model'         => 'lease_order',
            'type'          => HAS_MANY,
            'foreign_key'  => 'gid',
            'dependent' => true
        ),
        //һ����Ʒ���Ӧ�ö�����ﳵ
        'has_cart' => array(
            'model'         => 'lease_cart',
            'type'          => HAS_MANY,
            'foreign_key'  => 'gid',
            'dependent' => true
        ),
    );
}
?>