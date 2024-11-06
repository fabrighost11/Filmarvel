<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personajes".
 *
 * @property string $id_personaje
 * @property string $dni_actor
 * @property string $nombre
 * @property string|null $tipo
 *
 * @property Actores $dniActor
 */
class Personajes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $personaje;
    public static function tableName()
    {
        return 'personajes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_personaje', 'dni_actor', 'nombre'], 'required'],
            [['tipo'], 'string'],
            [['id_personaje'], 'string', 'max' => 3],
            [['dni_actor'], 'string', 'max' => 9],
            [['nombre'], 'string', 'max' => 35],
            [['dni_actor'], 'unique'],
            [['id_personaje'], 'unique'],
            [['dni_actor'], 'exist', 'skipOnError' => true, 'targetClass' => Actores::className(), 'targetAttribute' => ['dni_actor' => 'dni_actor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personaje' => 'Id Personaje',
            'dni_actor' => 'Dni Actor',
            'nombre' => 'Personaje',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * Gets query for [[DniActor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDniActor()
    {
        return $this->hasOne(Actores::className(), ['dni_actor' => 'dni_actor']);
    }
}
