<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eleve".
 *
 * @property int $Num_Eleve
 * @property string $Nom_Eleve
 * @property string $Prenom_Eleve
 * @property string $Date_Naiss_Eleve
 * @property string $Lieu_Naiss_Eleve
 * @property string $Rue_Eleve
 * @property string $Ville_Eleve
 * @property int $Code_Postal_Eleve
 *
 * @property Contient[] $contients
 * @property EstResponsable[] $estResponsables
 * @property Lier[] $liers
 * @property Obtient[] $obtients
 */
class Eleve extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eleve';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Eleve', 'Nom_Eleve', 'Prenom_Eleve', 'Date_Naiss_Eleve', 'Lieu_Naiss_Eleve', 'Rue_Eleve', 'Ville_Eleve', 'Code_Postal_Eleve'], 'required'],
            [['Num_Eleve', 'Code_Postal_Eleve'], 'integer'],
            [['Nom_Eleve', 'Prenom_Eleve', 'Lieu_Naiss_Eleve', 'Rue_Eleve', 'Ville_Eleve'], 'string'],
            [['Date_Naiss_Eleve'], 'safe'],
            [['Num_Eleve'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Eleve' => "Numéro de l'élève",
            'Nom_Eleve' => "Nom de l'élève",
            'Prenom_Eleve' => "Prénom de l'élève",
            'Date_Naiss_Eleve' => "Date de naissance de l'élève (AAAA-MM-JJ)",
            'Lieu_Naiss_Eleve' => "Lieu de naissance de l'élève",
            'Rue_Eleve' => "Rue de l'élève",
            'Ville_Eleve' => "Ville de l'élève",
            'Code_Postal_Eleve' => "Code Postal de l'élève",
        ];
    }

    /**
     * Gets query for [[Contients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContients()
    {
        return $this->hasMany(Contient::className(), ['Num_eleve' => 'Num_Eleve']);
    }

    /**
     * Gets query for [[EstResponsables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstResponsables()
    {
        return $this->hasMany(EstResponsable::className(), ['Num_eleve' => 'Num_Eleve']);
    }

    /**
     * Gets query for [[Liers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLiers()
    {
        return $this->hasMany(Lier::className(), ['Num_Eleve' => 'Num_Eleve']);
    }

    /**
     * Gets query for [[Obtients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObtients()
    {
        return $this->hasMany(Obtient::className(), ['Num_Eleve' => 'Num_Eleve']);
    }
}
