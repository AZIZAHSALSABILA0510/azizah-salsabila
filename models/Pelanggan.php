<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $id
 * @property string $nama
 * @property string $judul_film
 * @property string $judul_buku
 * @property string $judul_lagu
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'judul_film', 'judul_buku', 'judul_lagu'], 'required'],
            [['nama', 'judul_film', 'judul_buku', 'judul_lagu'], 'string', 'max' => 50],
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
            'judul_film' => 'Judul Film',
            'judul_buku' => 'Judul Buku',
            'judul_lagu' => 'Judul Lagu',
        ];
    }
}
