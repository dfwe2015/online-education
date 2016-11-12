<?php
/**
 * Created by Sublime.
 * User: mazhen
 * Date: 2016-11-04
 * Time: 11:30
 * �û���Ϣ
 */
namespace app\index\model;

use think\Model;

class Ask extends Model
{
	//�����û������������û���
	public function user()
	{
		return $this->belongsTo('User','uid');
	}

	//���������ͨ���ؼ��ֹ�����
	public function video()
	{
		return $this->belongsTo('video','vid');
	}

	//�����ظ����ظ�����һ�����⣩
	public function reply()
	{
		return $this->hasMany('reply','id','qid');
	}

}