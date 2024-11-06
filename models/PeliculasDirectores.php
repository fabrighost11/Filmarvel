<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peliculas_directores".
 *
 * @property int $id
 * @property string $cod_pelicula
 * @property string $dni_director
 *
 * @property Peliculas $codPelicula
 * @property Directores $dniDirector
 */
class PeliculasDirectores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peliculas_directores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_pelicula', 'dni_director'], 'required'],
            [['cod_pelicula'], 'string', 'max' => 3],
            [['dni_director'], 'string', 'max' => 9],
            [['cod_pelicula', 'dni_director'], 'unique', 'targetAttribute' => ['cod_pelicula', 'dni_director']],
            [['cod_pelicula'], 'exist', 'skipOnError' => true, 'targetClass' => Peliculas::className(), 'targetAttribute' => ['cod_pelicula' => 'cod_pelicula']],
            [['dni_director'], 'exist', 'skipOnError' => true, 'targetClass' => Directores::className(), 'targetAttribute' => ['dni_director' => 'dni_director']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cod_pelicula' => 'Cod Pelicula',
            'dni_director' => 'Dni Director',
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

    /**
     * Gets query for [[DniDirector]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDniDirector()
    {
        return $this->hasOne(Directores::className(), ['dni_director' => 'dni_director']);
    }
}
