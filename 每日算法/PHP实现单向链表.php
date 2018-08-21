<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/21
 * Time: 17:09
 */
//链表节点
class node {
    public $id;//节点id
    public $name;//节点名称
    public $next;//下一节点

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->next = null;
    }
}
//链表中还有两个特别重要的方法，插入和删除。插入需要找到插入的位置，把前一个元素的next指针指向被插入的节点
//，并将被插入节点的next指针指向后一个节点，如下图左侧所示。而删除则是把前一个节点的next指针指向后一个节点，
//并返回被删除元素的数据内容
//单链表
class singleLinkList {
    private $header;//链表头节点

    //构造方法
    public function __construct($id = null,$name = null)
    {
        $this->header = new node($id,$name,null);
    }

    //获取链表长度
    public function getLinkLength() {
        $i = 0;
        $current = $this->header;
        while ($current->next != null) {
            $i++;
            $current = $current->next;
        }
        return $i;
    }

    //添加节点数据
    //插入需要找到插入的位置，把前一个元素的next指针指向被插入的节点
    public function addLink($node) {
        $current = $this->header; //链表头节点
        while ($current->next != null) {
            if ($current->next->id > $node->id) { //获取插入节点跟也就是链表的位置节点相等的位置
                break;
            }
            $current = $current->next; //移入下一个位置
        }
        $node->next = $current->next; //将被插入节点的next指针指向后一个节点
        $current->next = $node; //把前一个元素的next指针指向被插入的节点
    }

    //删除链表节点 删除则是把前一个节点的next指针指向后一个节点，
    ////并返回被删除元素的数据内容
    public function delLink($id)
    {
        $current = $this->header;
        $flag = false;
        while ($current->next != null) {
            if ($current->next->id == $id) { //删除node 的前一个位置是$current
                $flag = true; //找到了
                break;
            }
            $current = $current->next; //$current 为要删除的位置
        }
        if ($flag) {
            $current->next = $current->next->next; //删除则是把前一个节点的next指针指向后一个节点，
        } else {
            echo "未找到id=".$id."的节点！<br>";
        }
    }

    //判断链表是否为空
    public function isEmpty()
    {
        return $this->header == null;
    }

    //清空链表
    public function clear()
    {
        $this->header = null;
    }

    //获取链表
    public function getLinkList()
    {
        $current = $this->header;
        if ($current->next == null) {
            echo "链表为空";
            return;
        }
        while ($current->next != null) {
            echo 'id:' . $current->next->id . '   name:' . $current->next->name . "<br>";
            if ($current->next->next == null) {
                break;
            }
            $current = $current->next;
        }
    }

    //获取节点名字
    public function getLinkNameById($id) {
        $current = $this->header;
        if ($current->next == null) {
            echo "链表为空!";
            return;
        }
        while ( $current->next != null ) {
            if ($current->id == $id) {
                break;
            }
            $current = $current->next;
        }
        return $current->name;
    }

    //更新节点名称
    public function updateLink($id, $name) {
        $current = $this->header;
        if ($current->next == null) {
            echo "链表为空!";
            return;
        }
        while ( $current->next != null ) {
            if ($current->id == $id) {
                break;
            }
            $current = $current->next;
        }
        return $current->name = $name;
    }
}