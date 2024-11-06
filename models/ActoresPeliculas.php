<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actores_peliculas".
 *
 * @property string $cod_act_peli
 * @property string $dni_actor
 * @property string $cod_pelicula
 *
 * @property Peliculas $codPelicula
 * @property Actores $dniActor
 */
class ActoresPeliculas extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    //public $Actores;
    public $Nombre;
    public $Personaje;
    public $Tipo;

    public static function tableName() {
        return 'actores_peliculas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['cod_act_peli', 'dni_actor', 'cod_pelicula'], 'required'],
            [['cod_act_peli', 'cod_pelicula'], 'string', 'max' => 3],
            [['dni_actor'], 'string', 'max' => 9],
            [['cod_act_peli'], 'unique'],
            [['cod_pelicula'], 'exist', 'skipOnError' => true, 'targetClass' => Peliculas::className(), 'targetAttribute' => ['cod_pelicula' => 'cod_pelicula']],
            [['dni_actor'], 'exist', 'skipOnError' => true, 'targetClass' => Actores::className(), 'targetAttribute' => ['dni_actor' => 'dni_actor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'cod_act_peli' => 'Cod Act Peli',
            'dni_actor' => 'Dni Actor',
            'cod_pelicula' => 'Cod Pelicula',
        ];
    }

    /**
     * Gets query for [[CodPelicula]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodPelicula() {
        return $this->hasOne(Peliculas::className(), ['cod_pelicula' => 'cod_pelicula']);
    }

    /**
     * Gets query for [[DniActor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDniActor() {
        return $this->hasOne(Actores::className(), ['dni_actor' => 'dni_actor']);
    }

}
