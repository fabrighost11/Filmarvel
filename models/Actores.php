<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actores".
 *
 * @property string $dni_actor
 * @property string $nombre
 * @property int $edad
 * @property string|null $sexo
 * @property string|null $nacionalidad
 * @property int|null $valoracion_general
 *
 * @property ActoresPeliculas[] $actoresPeliculas
 * @property Personajes $personajes
 */
class Actores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
   
    public static function tableName()
    {
        return 'actores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dni_actor', 'nombre', 'edad'], 'required'],
            [['edad', 'valoracion_general'], 'integer'],
            [['sexo'], 'string'],
            [['dni_actor'], 'string', 'max' => 9],
            [['nombre', 'nacionalidad'], 'string', 'max' => 35],
            [['dni_actor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dni_actor' => 'Dni Actor',
            'nombre' => 'Nombre',
            'edad' => 'Edad',
            'sexo' => 'Sexo',
            'nacionalidad' => 'Nacionalidad',
            'valoracion_general' => 'Valoracion General',
        ];
    }

    /**
     * Gets query for [[ActoresPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActoresPeliculas()
    {
        return $this->hasMany(ActoresPeliculas::className(), ['dni_actor' => 'dni_actor']);
    }

    /**
     * Gets query for [[Personajes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonajes()
    {
        return $this->hasOne(Personajes::className(), ['dni_actor' => 'dni_actor']);
    }
}
