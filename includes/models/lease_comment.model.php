<?php
class Lease_commentModel extends BaseModel
{
    public $table  = 'lease_comment';
    public $prikey = 'id';
    public $alias  = 'comment';
    public $_name  = 'lease_comment';
    var $_relation = array(
        //һ��ͼƬ���Ӧ��һ�����
        'comment_to_member' => array(
            'model'         => 'lease_member',
            'type'          => BELONGS_TO,
            'foreign_key'   => 'user_id',
            'reverse'       => 'has_comment',
        ),
    );
}
?>