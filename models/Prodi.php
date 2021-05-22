<?php 
	namespace app\models;

	use yii\db\ActiveRecord;

	/**
	 * 
	 */
	class Prodi extends ActiveRecord
	{
		public static function tableName()
		{
			return 'prodi';
		}
		public function rules()
	{
		return [
			[['id','prodi','keterangan'], 'required'],
			[['prodi','keterangan'], 'string'],
			[['id_prodi'],'integer'],
		];
	}
}
	