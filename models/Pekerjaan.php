<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $pekerjaan
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'pekerjaan'], 'required'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 70],
            [['pekerjaan'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'pekerjaan' => 'Pekerjaan',
        ];
    }
}
