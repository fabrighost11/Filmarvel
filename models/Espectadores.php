<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "espectadores".
 *
 * @property string $id_usuario
 * @property string $contrasena_espe
 * @property string $usuario
 * @property string|null $pais
 * @property string|null $nombre_cine
 *
 * @property EspectadoresPeliculas $espectadoresPeliculas
 */
class Espectadores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'espectadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_usuario', 'contrasena_espe', 'usuario'], 'required'],
            [['id_usuario'], 'string', 'max' => 3],
            [['contrasena_espe'], 'string', 'max' => 20],
            [['usuario', 'nombre_cine'], 'string', 'max' => 35],
            [['pais'], 'string', 'max' => 50],
            [['id_usuario'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'contrasena_espe' => 'Contraseña Espectador',
            'usuario' => 'Usuario',
            'pais' => 'Pais',
            'nombre_cine' => 'Nombre Cine',
        ];
    }

    /**
     * Gets query for [[EspectadoresPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspectadoresPeliculas()
    {
        return $this->hasOne(EspectadoresPeliculas::className(), ['id_usuario' => 'id_usuario']);
    }
}
