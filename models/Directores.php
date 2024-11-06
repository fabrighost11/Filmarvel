<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "directores".
 *
 * @property string $dni_director
 * @property string $nombre
 * @property string|null $telefono
 * @property int $edad
 * @property string $nacionalidad
 *
 * @property PeliculasDirectores[] $peliculasDirectores
 * @property Peliculas[] $codPeliculas
 */
class Directores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'directores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dni_director', 'nombre', 'edad', 'nacionalidad'], 'required'],
            [['edad'], 'integer'],
            [['dni_director'], 'string', 'max' => 9],
            [['nombre', 'nacionalidad'], 'string', 'max' => 35],
            [['telefono'], 'string', 'max' => 13],
            [['dni_director'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dni_director' => 'Dni Director',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'edad' => 'Edad',
            'nacionalidad' => 'Nacionalidad',
        ];
    }

    /**
     * Gets query for [[PeliculasDirectores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasDirectores()
    {
        return $this->hasMany(PeliculasDirectores::className(), ['dni_director' => 'dni_director']);
    }

    /**
     * Gets query for [[CodPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodPeliculas()
    {
        return $this->hasMany(Peliculas::className(), ['cod_pelicula' => 'cod_pelicula'])/* ->viaTable('peliculas_directores', ['dni_director' => 'dni_director']) */;
    }
}
