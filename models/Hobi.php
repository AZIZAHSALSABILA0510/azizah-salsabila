<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hobi".
 *
 * @property int $id
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $hobi
 */
class Hobi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hobi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_kelamin', 'hobi'], 'required'],
            [['nama', 'hobi'], 'string', 'max' => 50],
            [['jenis_kelamin'], 'string', 'max' => 30],
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
            'jenis_kelamin' => 'Jenis Kelamin',
            'hobi' => 'Hobi',
        ];
    }
}
