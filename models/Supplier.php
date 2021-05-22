<?php
namespace app\models;

use yii\db\ActiveRecord;

class Supplier extends ActiveRecord
{
	public static function tableName()
	{
		return 'supplier';
	}
	public function rules()
    {
        return [
            [['id','nama_supplier', 'notelp','email','alamat'], 'required'],
            [['id','nama_supplier','alamat'],'string'],
            [['notelp'],'integer'],
            [['email'],'email']        
        ];
    }
}