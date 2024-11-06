<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "espectadores_peliculas".
 *
 * @property string $id_espe_peli
 * @property string $cod_pelicula
 * @property string $id_usuario
 * @property int|null $calificacion_peli
 * @property int|null $valoracion_actor
 *
 * @property Peliculas $codPelicula
 * @property Espectadores $usuario
 * @property UsuComentario[] $usuComentarios
 * @property UsuComentario[] $usuComentarios0
 */
class EspectadoresPeliculas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'espectadores_peliculas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_espe_peli', 'cod_pelicula', 'id_usuario'], 'required'],
            [['calificacion_peli', 'valoracion_actor'], 'integer'],
            [['id_espe_peli', 'cod_pelicula', 'id_usuario'], 'string', 'max' => 3],
            [['cod_pelicula'], 'unique'],
            [['id_usuario'], 'unique'],
            [['id_espe_peli'], 'unique'],
            [['cod_pelicula'], 'exist', 'skipOnError' => true, 'targetClass' => Peliculas::className(), 'targetAttribute' => ['cod_pelicula' => 'cod_pelicula']],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Espectadores::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_espe_peli' => 'Id Espe Peli',
            'cod_pelicula' => 'Cod Pelicula',
            'id_usuario' => 'Id Usuario',
            'calificacion_peli' => 'Calificacion Peli',
            'valoracion_actor' => 'Valoracion Actor',
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
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Espectadores::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * Gets query for [[UsuComentarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuComentarios()
    {
        return $this->hasMany(UsuComentario::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * Gets query for [[UsuComentarios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuComentarios0()
    {
        return $this->hasMany(UsuComentario::className(), ['cod_pelicula' => 'cod_pelicula']);
    }
}
