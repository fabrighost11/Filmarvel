<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peliculas".
 *
 * @property string $cod_pelicula
 * @property string|null $nombre
 * @property float $presupuesto
 * @property int $n_portagonistas
 * @property string $sinopsis
 * @property int|null $premios_ganados
 * @property int|null $calificacion
 *
 * @property ActoresPeliculas[] $actoresPeliculas
 * @property EspectadoresPeliculas $espectadoresPeliculas
 * @property FechaEstreno $fechaEstreno
 * @property PeliculasDirectores[] $peliculasDirectores
 * @property Directores[] $dniDirectors
 * @property PremiosPelicula[] $premiosPeliculas
 */
class Peliculas extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public $Estreno;

    public static function tableName() {
        return 'peliculas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['cod_pelicula', 'presupuesto', 'n_portagonistas', 'sinopsis'], 'required'],
            [['presupuesto'], 'number'],
            [['n_portagonistas', 'premios_ganados', 'calificacion'], 'integer'],
            [['sinopsis'], 'string'],
            [['cod_pelicula'], 'string', 'max' => 3],
            [['nombre'], 'string', 'max' => 50],
            [['cod_pelicula'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'cod_pelicula' => 'Cod Pelicula',
            'nombre' => 'Nombre',
            'presupuesto' => 'Presupuesto',
            'n_portagonistas' => 'Protagonistas',
            'sinopsis' => 'Sinopsis',
            'premios_ganados' => 'Premios',
            'calificacion' => 'Calificación',
        ];
    }

    /**
     * Gets query for [[ActoresPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActoresPeliculas() {
        return $this->hasMany(ActoresPeliculas::className(), ['cod_pelicula' => 'cod_pelicula']);
    }

    /**
     * Gets query for [[EspectadoresPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspectadoresPeliculas() {
        return $this->hasOne(EspectadoresPeliculas::className(), ['cod_pelicula' => 'cod_pelicula']);
    }

    /**
     * Gets query for [[FechaEstreno]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFechaEstreno() {
        return $this->hasOne(FechaEstreno::className(), ['cod_pelicula' => 'cod_pelicula']);
    }

    public function afterFind() {
        parent::afterFind();
        $this->fechaEstreno->fecha = Yii::$app->formatter->asDate($this->fechaEstreno->fecha, 'php:d-m-Y');
    }

    /**
     * Gets query for [[PeliculasDirectores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeliculasDirectores() {
        return $this->hasMany(PeliculasDirectores::className(), ['cod_pelicula' => 'cod_pelicula']);
    }

    /**
     * Gets query for [[DniDirectors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDniDirectors() {
        return $this->hasMany(Directores::className(), ['dni_director' => 'dni_director'])->viaTable('peliculas_directores', ['cod_pelicula' => 'cod_pelicula']);
    }

    /**
     * Gets query for [[PremiosPeliculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPremiosPeliculas() {
        return $this->hasMany(PremiosPelicula::className(), ['cod_pelicula' => 'cod_pelicula']);
    }

}
