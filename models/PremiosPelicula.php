<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "premios_pelicula".
 *
 * @property string $id_premio
 * @property string $cod_premio
 * @property string $cod_pelicula
 *
 * @property Premios $codPremio
 * @property Peliculas $codPelicula
 */
class PremiosPelicula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $total;
    public static function tableName()
    {
        return 'premios_pelicula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_premio', 'cod_premio', 'cod_pelicula'], 'required'],
            [['id_premio', 'cod_premio', 'cod_pelicula'], 'string', 'max' => 3],
            [['id_premio'], 'unique'],
            [['cod_premio'], 'exist', 'skipOnError' => true, 'targetClass' => Premios::className(), 'targetAttribute' => ['cod_premio' => 'cod_premio']],
            [['cod_pelicula'], 'exist', 'skipOnError' => true, 'targetClass' => Peliculas::className(), 'targetAttribute' => ['cod_pelicula' => 'cod_pelicula']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_premio' => 'Id Premio',
            'cod_premio' => 'Cod Premio',
            'cod_pelicula' => 'Cod Pelicula',
        ];
    }

    /**
     * Gets query for [[CodPremio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodPremio()
    {
        return $this->hasOne(Premios::className(), ['cod_premio' => 'cod_premio']);
    }

    /**
     * Gets query for [[CodPelicula]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodPelicula()
    {
        return $this->hasOne(Peliculas::className(), ['cod_pelicula' => 'cod_pelicula']);
    }
}
