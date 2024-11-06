<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fecha_estreno".
 *
 * @property int $id_estreno
 * @property string $cod_pelicula
 * @property string $fecha
 *
 * @property Peliculas $codPelicula
 */
class FechaEstreno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fecha_estreno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_pelicula', 'fecha'], 'required'],
            [['fecha'], 'safe'],
            [['cod_pelicula'], 'string', 'max' => 3],
            [['cod_pelicula'], 'unique'],
            [['cod_pelicula'], 'exist', 'skipOnError' => true, 'targetClass' => Peliculas::className(), 'targetAttribute' => ['cod_pelicula' => 'cod_pelicula']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_estreno' => 'Id Estreno',
            'cod_pelicula' => 'Cod Pelicula',
            'fecha' => 'Fecha',
        ];
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
