<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "premios".
 *
 * @property string $cod_premio
 * @property string $nombre
 * @property string|null $categoria
 *
 * @property PremiosPelicula[] $premiosPeliculas
 */
class Premios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'premios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_premio', 'nombre'], 'required'],
            [['cod_premio'], 'string', 'max' => 3],
            [['nombre', 'categoria'], 'string', 'max' => 35],
            [['cod_premio'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cod_premio' => 'Cod Premio',
            'nombre' => 'Nombre',
            'categoria' => 'Categoria',
        ];
    }

    /**
     * Gets query for [[PremiosPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPremiosPeliculas()
    {
        return $this->hasMany(PremiosPelicula::className(), ['cod_premio' => 'cod_premio']);
    }
}
