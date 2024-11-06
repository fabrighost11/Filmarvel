<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usu_comentario".
 *
 * @property int $id_comentario
 * @property string $id_usuario
 * @property string $cod_pelicula
 * @property string $comentario
 *
 * @property EspectadoresPeliculas $usuario
 * @property EspectadoresPeliculas $codPelicula
 */
class UsuComentario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usu_comentario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_usuario', 'cod_pelicula', 'comentario'], 'required'],
            [['id_usuario', 'cod_pelicula'], 'string', 'max' => 3],
            [['comentario'], 'string', 'max' => 255],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => EspectadoresPeliculas::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
            [['cod_pelicula'], 'exist', 'skipOnError' => true, 'targetClass' => EspectadoresPeliculas::className(), 'targetAttribute' => ['cod_pelicula' => 'cod_pelicula']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_comentario' => 'Id Comentario',
            'id_usuario' => 'Id Usuario',
            'cod_pelicula' => 'Cod Pelicula',
            'comentario' => 'Comentario',
        ];
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(EspectadoresPeliculas::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * Gets query for [[CodPelicula]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodPelicula()
    {
        return $this->hasOne(EspectadoresPeliculas::className(), ['cod_pelicula' => 'cod_pelicula']);
    }
}
