<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classe".
 *
 * @property int $Num_Classe
 * @property int $Nbre_Eleve
 * @property int $Salle
 *
 * @property Contient[] $contients
 * @property Enseigne[] $enseignes
 * @property Etablissement[] $etablissements
 * @property Relier[] $reliers
 * @property SeDeroule[] $seDeroules
 */
class Classe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Classe', 'Nbre_Eleve', 'Salle'], 'required'],
            [['Num_Classe', 'Nbre_Eleve', 'Salle'], 'integer'],
            [['Num_Classe'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Classe' => 'Numéro de la classe',
            'Nbre_Eleve' => "Nombres d'élèves",
            'Salle' => 'Salle',
        ];
    }

    /**
     * Gets query for [[Contients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContients()
    {
        return $this->hasMany(Contient::className(), ['Num_Classe' => 'Num_Classe']);
    }

    /**
     * Gets query for [[Enseignes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnseignes()
    {
        return $this->hasMany(Enseigne::className(), ['Num_Classe' => 'Num_Classe']);
    }

    /**
     * Gets query for [[Etablissements]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEtablissements()
    {
        return $this->hasMany(Etablissement::className(), ['Num_Classe' => 'Num_Classe']);
    }

    /**
     * Gets query for [[Reliers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReliers()
    {
        return $this->hasMany(Relier::className(), ['Num_Classe' => 'Num_Classe']);
    }

    /**
     * Gets query for [[SeDeroules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeDeroules()
    {
        return $this->hasMany(SeDeroule::className(), ['Num_Classe' => 'Num_Classe']);
    }
}
