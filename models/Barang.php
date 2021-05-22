<?php
namespace app\models;

use yii\db\ActiveRecord;

class Barang extends ActiveRecord
{
	public static function tableName()
	{
		return 'barang';
	}
	public function rules()
	{
		return [
			[['id','kode_barang','nama_barang','satuan','id_jenis','id_supplier','harga','stok'], 'required'],
			[['id','kode_barang','nama_barang','satuan'], 'string'],
			[['id','id_jenis','id_supplier','harga','stok'],'integer'],
		];
	}
}